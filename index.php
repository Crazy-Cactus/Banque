<?php
$page = 'Accueil';
require_once('init.php');
require_once('header.php');

if (isset($_GET['message'])): ?>
  <p> <?php echo $_GET['message'] ?></p>
<?php endif;

require_once('footer.php');
?>
