<?php
$page = 'Accueil';
require_once('init.php');
require_once('header.php');

if (isset($_GET['message'])): ?>
  <p> <?php echo $_GET['message'] ?></p>
<?php endif;

if (isset($_SESSION['user'])): ?>
    <table>
      <thead>
        <tr>
          <th>Compte</th>
          <th>Argent</th>
        </tr>
      </thead>

      <tr>
        <td>Courant</td>
        <td><?php echo $_SESSION['user']['courant'] ?>€</td>
        <th>
          <form action="virement.php" method="post">
            <input type="number" name="cvl" placeholder="virement vers livret">
            <input type="submit" value="Banco !">
          </form>
        </th>
      </tr>
      <tr>
        <td>Livret</td>
        <td><?php echo $_SESSION['user']['livret'] ?>€</td>
        <th>
          <form action="virement.php" method="post">
            <input type="number" name="lvc" placeholder="virement vers compte">
            <input type="submit" value="Banco !">
          </form>
        </th>
      </tr>
    </table>
<?php endif;

require_once('footer.php');
?>
