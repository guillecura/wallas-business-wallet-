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
      include "www/templates/accounts/profile.php";
    // FOOTER
      include "www/templates/base/footer.php";

    // JAVASCRIPT
      require("www/inc/tail.php");

    // MODALS
      echo "<div class='mask close-modal'></div>";
      include "www/templates/business/modal_delete_item.php";
      include "www/templates/business/modal_add_business.php";
      include "www/templates/accounts/modal_settings.php";
      include "www/templates/accounts/modal_edit_user.php";
    ?>
  </body>
</html>

<?php
} else {
  header('Location: login.php');
}
?>
