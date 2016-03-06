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
      if (isset($_GET['saved'])) {
        echo "<div class='message'><span>Successfully saved!</span></div>";
      }
      include "../www/templates/admin/nav.php";
      include "../www/templates/admin/customize.php";
    // MODALS
      echo "<div class='mask close-modal'></div>";
      include "../www/templates/admin/modal_change_cover.php";
      include "../www/templates/admin/modal_change_abstract.php";
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
