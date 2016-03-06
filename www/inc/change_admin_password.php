<?php
  include 'db_connection.php';

  if(isset($_POST['change-pass'])) {
    $id = mysql_real_escape_string($_POST['id']);
    $password = mysql_real_escape_string($_POST['password-1']);
    $password_confirm = mysql_real_escape_string($_POST['password-2']);

    // Sql query
    $change_val = "UPDATE `users` SET password='$password' WHERE id='$id' AND level='1'";

    $change = mysql_query($change_val);

    // if error while updated.
    if(!$change) {
      echo "<br><br>Error!";
    }

    header('Location: ../../admin/dashboard.php?saved');
  }
?>
