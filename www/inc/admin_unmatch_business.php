<?php
  include 'db_connection.php';

  if(isset($_POST['unmatch'])) {
    $id = mysql_real_escape_string($_POST['business']);

    // Sql query
    $unmatch_b = "UPDATE `business` SET `owner`='' WHERE `id`='$id'";

    $unmatch = mysql_query($unmatch_b);

    // if error while updated.
    if(!$unmatch) {
      header('Location: /admin/users.php?user=' .$id. '&error');
    }

    header('Location: /admin/users.php?user=' .$id. '&unmatched');
  }
?>
