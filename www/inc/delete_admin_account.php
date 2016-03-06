<?php
  include 'db_connection.php';

  if(isset($_POST['delete-account'])) {

    $id_target = mysql_real_escape_string($_POST['id']);

    $del_val = "DELETE FROM `wallas`.`users` WHERE id=$id_target AND level='1'";
    $delete = mysql_query($del_val);

    if ($delete) {
      header('Location: ../../admin');
    }
  }
?>
