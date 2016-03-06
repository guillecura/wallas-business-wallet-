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
      <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
  </head>

  <body>
    <?php
    // HEADER
      include "../www/templates/admin/header.php";
    // CONTENT
      include "../www/templates/admin/nav.php";
      include "../www/templates/admin/feedback.php";
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
