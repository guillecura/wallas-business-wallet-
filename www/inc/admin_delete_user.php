<?php
  include 'db_connection.php';

  if(isset($_POST['delete-user'])) {

    $id_target = mysql_real_escape_string($_POST['id']);

    $del_val = "DELETE FROM `users` WHERE `id`='$id_target'";
    $delete = mysql_query($del_val);

    if (!$delete) {
      header('Location: /admin/user.php?user=' .$id. '&error');
    }

    header('Location: /admin/users.php?deleted');
  }
?>
