<?php
session_start();

if (isset($_SESSION['email'])) {
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
    // HEADER
      include "www/templates/base/header.php";
    // CONTENT
      include "www/templates/charts/home.php";
    // FOOTER
      include "www/templates/base/footer.php";

    // JAVASCRIPT
      require("www/inc/tail.php");
    ?>
  </body>
</html>

<?php
} else {
  header('Location: login.php');
}
?>
