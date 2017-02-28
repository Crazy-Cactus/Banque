<?php
$page = 'Virement';
require_once('init.php');
require_once('header.php');

if (!empty($_POST['cvl']))
{
  virement($_SESSION['user'], 'courant', (float)$_POST['cvl']);
  $_SESSION['user']['courant'] -= (float)$_POST['cvl'];
  $_SESSION['user']['livret'] += (float)$_POST['cvl'];

  header('Location: index.php');
}

if (!empty($_POST['lvc']))
{
  virement($_SESSION['user'], 'livret', (float)$_POST['cvl']);
  $_SESSION['user']['courant'] += (float)$_POST['lvc'];
  $_SESSION['user']['livret'] -= (float)$_POST['lvc'];

  header('Location: index.php');
}

 ?>
