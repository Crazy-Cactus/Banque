<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Doge - <?php echo $page ?></title>
  </head>
  <body>
    <header>
      <h1>Banque Doge</h1>
      <nav>
        <li><a href="index.php">Accueil</a></li>
        <?php if (!empty($_SESSION['user'])):?>
            <li><a href="co_deco.php?deco=True">Deconnexion</a></li>
        <?php else: ?>
            <li><a href="co_deco.php">Connexion</a></li>
            <li><a href="inscription.php">Inscription</a></li>
        <?php endif; ?>

      </nav>
    </header>

    <main>
