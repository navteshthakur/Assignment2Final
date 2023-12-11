<?php
  require './includes/nav.php';
  session_start();
if (!isset($_SESSION['EXPIRES']) || $_SESSION['EXPIRES'] < time()+3600) {
    session_destroy();
    $_SESSION = array();
}
$_SESSION['EXPIRES'] = time() + 3600;
  header('location:index.php');
  require './includes/footer.php';
?>
