<?php
session_start();

if (isset($_SESSION['admin'])) {
  header('Location: dashboard.php');
} else {
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Wallas</title>
      <meta name="description" content="Wallas, 2015">
      <?php require("../www/inc/head.php"); ?>
  </head>

  <body>
    <?php
      if (isset($_GET['expired'])) {
        echo "<div class='message'><span>Session expired after 1h of inactivity.</span></div>";
      }

      if (isset($_GET['error'])) {
        echo "<div class='message'><span>Wrong admin email or password!</span></div>";
      }

      if (isset($_GET['nonlogged'])) {
        echo "<div class='message'><span>You need to login first!</span></div>";
      }
    // CONTENT
      include "../www/templates/admin/login.php";
    ?>
  </body>
</html>

<?php
}
?>
