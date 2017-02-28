<?php
require_once('init.php');
require_once('header.php');

if (isset($_GET['deco']) && $_GET['deco'] == True)
{
  session_destroy();
  header('Location: index.php');
}

if (!empty($_POST['email'])
  && !empty($_POST['password']))
  {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if(co($email, $password))
    {
      $tab_id = select_id($email);
      foreach ($tab_id as $id)
      {
          $_SESSION['user'] = $id['id'];
          header('location: index.php?message=vous etes connecté');
      }
    }
  }
  else {
    echo "va te faire";
  }
?>

  <form action="co_deco.php" method="post">
    <input type="email" name="email" placeholder="Adresse email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="Banco !">
  </form>
  <a href="index.php">Retour</a>
  <?php
