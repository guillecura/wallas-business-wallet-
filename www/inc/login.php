<?php
  include 'db_connection.php';

  $email_val = mysql_real_escape_string($_POST['email_val']);
  $password_val = mysql_real_escape_string($_POST['password_val']);

  $pass = $password_val;
  $count = strlen($pass);
  $first = substr($pass, 0, $count / 2);
  $second = substr($pass, $count / 2);
  $text = $second.$first;
  $crypted = md5($text);

  if(isset($_POST['login'])) {
    $check_login = "SELECT * FROM `users` WHERE `email`='$email_val' AND `password`='$crypted'";
    $sign_in = mysql_query($check_login);
    $user_rows = mysql_num_rows($sign_in);

    if ($user_rows == 1) {
      session_start();
      $_SESSION['email'] = $_POST['email_val'];
      header('Location: ../../index.php');
      die();
    } else {
      header('Location: ../../login.php?error');
      die();
    }
  }

  if(isset($_POST['admin-login'])) {
    $check_login = "SELECT * FROM `users` WHERE `email`='$email_val' AND `password`='$crypted' AND `level`='1'";
    $sign_in = mysql_query($check_login);
    $user_rows = mysql_num_rows($sign_in);

    if ($user_rows == 1) {
      session_start();
      $_SESSION['admin'] = $_POST['email_val'];
      $_SESSION['logged'] = date("Y-n-j H:i:s");
      header('Location: /admin/dashboard.php');
      die();
    } else {
      header('Location: /admin/index.php?error');
      die();
    }
  }
?>
