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

function insertion_user($nom, $prenom, $email, $password)
{
  global $db;

  $requete = 'INSERT INTO utilisateurs (nom, prenom, email, password)
  VALUES(
  ' . $db->quote($nom) . ',
  ' . $db->quote($prenom) . ',
  ' . $db->quote($email) . ',
  ' . $db->quote($password) . ')';

  $insertion = $db->exec($requete);
  return $insertion;
}
