<?php
$page = 'inscription';
require_once('init.php');
require_once('header.php');

if (!empty($_POST['nom'])
  && !empty($_POST['prenom'])
  && !empty($_POST['email'])
  && !empty($_POST['password']))
{
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);

  $in_db = in_db('utilisateurs', 'email', $email);

  if (!$in_db)
  {
    $valid = insertion_user($nom, $prenom, $email, $password);
    if ($valid)
    {
      header('location: index.php?message=SUCCESS');
    }
    else
    {
      echo "ERREUR";
    }
  }
  else
  {
    echo "cette adresse est deja utilisé";
  }
}
 ?>
 <form action="inscription.php" method="post">
   <input type="text" name="nom" placeholder="Votre Nom">
   <input type="text" name="prenom" placeholder="Votre Prenom">
   <input type="email" name="email" placeholder="Votre adresse email">
   <input type="password" name="password" placeholder="Votre mot de passe">
   <input type="submit" value="Banco !">
 </form>
