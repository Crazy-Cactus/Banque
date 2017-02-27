<?php
$page = 'inscription';
require_once('init.php');
require_once('header.php');

if (!empty($_POST["user"]))
{
  if (isset($_POST['nom'])
    && isset($_POST['prenom'])
    && isset($_POST['email'])
    && isset($_POST['password']))
  {
    
  }
}
else
{
 ?>
 <form action="inscription.php" method="post">
   <input type="text" name="nom" placeholder="Votre Nom">
   <input type="text" name="prenom" placeholder="Votre Prenom">
   <input type="email" name="email" placeholder="Votre adresse email">
   <input type="password" name="mot de passe" placeholder="Votre mot de passe">
   <input type="submit" value="Banco !">
 </form>
}
