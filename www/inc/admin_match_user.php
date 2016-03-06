<?php
  include 'db_connection.php';

  if(isset($_POST['match'])) {
    $id = mysql_real_escape_string($_POST['id']);
    $owner = mysql_real_escape_string($_POST['owner']);

    $edit_val = "UPDATE `business` SET `owner`='$owner' WHERE id='$id'";
    $edit = mysql_query($edit_val);

    if (!$edit) {
      header('Location: /admin/detail.php?b=' .$id. '&error');
    }
    header('Location: /admin/detail.php?b=' .$id. '&saved');
  }
?>
