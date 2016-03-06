<?php
session_start();

if (isset($_SESSION['email'])) {
  header('Location: index.php');
} else {
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Wallas</title>
      <meta name="description" content="Wallas, 2015">
      <?php require("www/inc/head.php"); ?>
  </head>

  <body>
    <?php
    // CONTENT
      if (isset($_GET['error'])) {
        echo "<div class='message'><span>Passwords doesn't match.</span></div>";
      }
      include "www/templates/accounts/register.php";
    // JAVASCRIPT
      require("www/inc/tail.php");
    ?>
  </body>
</html>

<?php
}
?>
