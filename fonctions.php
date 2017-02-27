<?php
function connection()
{
  global $hote;
  global $port;
  global $db;
  global $login;
  global $mdp;

  try
  {
    $pdo = new PDO('mysql:host='.$hote.';port='.   $port.
    ';dbname='.$db, $login, $mdp);
    // cette ligne fera en sorte que le dsn,username et password sois en utf8
		$pdo -> exec('SET CHARACTER SET UTF8');
  }
  catch (Exception $e)
  {
    echo 'ça marche pas';
  }
  return $pdo;
}
