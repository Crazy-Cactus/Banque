<?php
require_once('config.php');
require_once('header.php');
?>

  <form action="login.php" method="post">
    <input type="email" name="login" placeholder="Adresse email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="Banco !">
  </form>
  <a href="index.php">Retour</a>
  <?php
