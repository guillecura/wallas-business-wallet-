<?php
  include 'db_connection.php';

  if(isset($_POST['change-pass'])) {
    $id = mysql_real_escape_string($_POST['id']);
    $password = mysql_real_escape_string($_POST['password-1']);
    $password_confirm = mysql_real_escape_string($_POST['password-2']);

    // crypt
    $pass = $password;
    $count = strlen($pass);
    $first = substr($pass, 0, $count / 2);
    $second = substr($pass, $count / 2);
    $text = $second.$first;

    $crypted = md5($text);

    // Sql query
    $change_val = "UPDATE `users` SET password='$crypted' WHERE id='$id'";

    $change = mysql_query($change_val);

    // if error while updated.
    if(!$change) {
      echo "<br><br>Error!";
    }

    header('Location: ../../account.php');
  }
?>
