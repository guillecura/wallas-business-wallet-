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
        echo "<div class='message'><span>Settings successfully saved!</span></div>";
      }

      if (isset($_GET['feed'])) {
        echo "<div class='message'><span>Thanks, your feedback has been shipped.</span></div>";
      }

      include "../www/templates/admin/nav.php";
      include "../www/templates/admin/dashboard.php";
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
