<?php
  include 'db_connection.php';

  if(isset($_POST['update'])) {
    $id = mysql_real_escape_string($_POST['id']);
    if (isset($_POST['level'])) {
      $level = mysql_real_escape_string($_POST['level']);
    } else {
      $level = 0;
    }

    // Sql query
    $level_u = "UPDATE `users` SET `level`='$level' WHERE `id`='$id'";
    $admin = mysql_query($level_u);

    // if error while updated.
    if(!$admin) {
      header('Location: /admin/users.php?user=' .$id. '&error');
    }
    header('Location: /admin/user.php?user=' .$id. '&saved');
  }
?>
