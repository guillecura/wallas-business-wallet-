<?php
session_start();

if (isset($_SESSION['admin'])) {
  include "../www/inc/admin_time.php";
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Wallas | Panel</title>
      <meta name="description" content="Wallas, 2015">
      <?php require("../www/inc/admin_head.php"); ?>
  </head>

  <body>
    <?php
    // HEADER
      include "../www/templates/admin/header.php";
    // CONTENT
      if (isset($_GET['saved'])) {
        echo "<div class='message'><span>Business type saved successfully!</span></div>";
      }
      if (isset($_GET['error'])) {
        echo "<div class='message'><span>An error occurred!</span></div>";
      }
      include "../www/templates/admin/nav.php";
      include "../www/templates/admin/type.php";
    // JAVASCRIPT
      require("../www/inc/admin_tail.php");
    ?>
  </body>
</html>

<?php
} else {
  header('Location: index.php?nonlogged');
}
?>
