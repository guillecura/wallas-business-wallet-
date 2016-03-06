<?php
  include 'db_connection.php';

  if(isset($_POST['delete-business'])) {

    $id_target = mysql_real_escape_string($_POST['id']);

    $del_val = "DELETE FROM `business` WHERE `id`='$id_target'";
    $delete = mysql_query($del_val);

    if (!$delete) {
      header('Location: /admin/detail.php?b=' .$id. '&error');
    }

    header('Location: /admin/business.php?deleted');
  }
?>
