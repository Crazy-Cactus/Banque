<?php
require_once('config.php');
require_once('header.php');
?>

  <form action="login.php" method="post">
    <label>Adresse <input type="email" name="login" ></label>
    <label>Password <input type="password" name="password" ></label>
    <input type="submit" value="submit">
  </form>
  <a href="index.php">Retour</a>
  <?php
