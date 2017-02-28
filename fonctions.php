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

  $requete = 'INSERT INTO utilisateurs (nom, prenom, email, password, courant, livret)
  VALUES(
  ' . $db->quote($nom) . ',
  ' . $db->quote($prenom) . ',
  ' . $db->quote($email) . ',
  ' . $db->quote($password) . ',
      1000, 0)';

  $insertion = $db->exec($requete);
  return $insertion;
}

function in_db($table, $champ, $averifier)
{

  global $db;

  $resultat = $db->query("SELECT * FROM " . $table . " WHERE " . $champ . " = '" . $averifier . "'");

  if($resultat->fetchColumn() == 0)
  {
    return False;
  }
  else
  {
    return True;
  }

}

function co($email, $password)
{

    global $db;

    $resultat = $db->query("SELECT * FROM utilisateurs WHERE email = '" . $email . "'
    AND password = '" . $password . "'");

    if ($resultat->fetchColumn() == 0)
    {
        return False;
    }
    else {
        return True;
    }
}

function select_user($email)
{

  global $db;

  $resultat = $db->query("SELECT * FROM utilisateurs WHERE email = '" . $email . "'");

  return $resultat;
}
