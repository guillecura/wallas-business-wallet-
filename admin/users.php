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
      if (isset($_GET['error'])) {
        echo "<div class='message'><span>Error rendering user's profile.</span></div>";
      }
      if (isset($_GET['added'])) {
        echo "<div class='message'><span>User added successfully!</span></div>";
      }
      if (isset($_GET['deleted'])) {
        echo "<div class='message'><span>User deleted successfully!</span></div>";
      }
      include "../www/templates/admin/nav.php";
      include "../www/templates/admin/users.php";
    // MODALS
      echo "<div class='mask close-modal'></div>";
      include "../www/templates/admin/modal_add_user.php";
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
