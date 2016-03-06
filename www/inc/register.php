<?php
  include 'db_connection.php';

  $f_name = mysql_real_escape_string($_POST['f_name']);
  $l_name = mysql_real_escape_string($_POST['l_name']);
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
  $password2 = mysql_real_escape_string($_POST['password2']);
  $vault_name = $f_name."&#39;s Vault";

  if ($password != $password2) {
    header('Location: ../../register.php?error');
  } else {
    $pass = $password;
    $count = strlen($pass);
    $first = substr($pass, 0, $count / 2);
    $second = substr($pass, $count / 2);
    $text = $second.$first;
    $text2 = $text.$email;

    $crypted = md5($text);
    $vault = md5($text2);

    $errors = array();

    if ($_FILES['avatar']['name'] != '') {
      $file_name = $_FILES['avatar']['name'];
      $file_size = $_FILES['avatar']['size'];
      $file_tmp = $_FILES['avatar']['tmp_name'];
      $file_type = $_FILES['avatar']['type'];
      $file_ext = strtolower(end(explode('.', $file_name)));
      $ext = array("jpeg","jpg","png","gif");

      if (in_array($file_ext, $ext) === false) {
         $errors[] = "extension not allowed, please choose a JPEG, PNG or GIF file.";
      }

      if ($file_size > 1048576) {
         $errors[] = 'File size cannot be larger than 1 MB';
      }

      if (empty($errors) == true){
        $avatar = $f_name . $l_name . "-avatar." . $file_ext;
         move_uploaded_file($file_tmp, "../img/media/" . $avatar);
      } else {
         print_r($errors);
      }
    }

    if(isset($_POST['register'])) {
      $insert_val = "INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `avatar`, `level`) VALUES (NULL, '$f_name', '$l_name', '$email', '$crypted', '$avatar', '0');";
      $insert = mysql_query($insert_val);

      if (!$insert) {
        header('Location: ../../register.php?error');
      } else {
        $u = "SELECT * FROM `users` WHERE `email`='$email'";
        $u_query = mysql_query($u);
        $u_length = mysql_num_rows($u_query);
        $u_item = mysql_fetch_array($u_query);
        $b_owner_id = $u_item['id'];

        if ($u_length == 1) {
          $insert_vault = "INSERT INTO `business` (`id`, `rut`, `name`, `type`, `avatar`, `owner`) VALUES (NULL, '$vault', '$vault_name', '2', '$avatar', '$b_owner_id');";
          $create_vault = mysql_query($insert_vault);

          if (!$create_vault) {
            header('Location: ../../login.php?vault');
          } else {
            header('Location: ../../login.php?login');
          }
        }
      }
    }

    if(isset($_POST['add-user'])) {
      $insert_val = "INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `avatar`, `level`) VALUES (NULL, '$f_name', '$l_name', '$email', '$crypted', '$avatar', '0');";
      $insert = mysql_query($insert_val);

      if (!$insert) {
        header('Location: /admin/users.php?error');
      } else {
        $u = "SELECT * FROM `users` WHERE `email`='$email'";
        $u_query = mysql_query($u);
        $u_length = mysql_num_rows($u_query);
        $u_item = mysql_fetch_array($u_query);
        $b_owner_id = $u_item['id'];

        if ($u_length == 1) {
          $insert_vault = "INSERT INTO `business` (`id`, `rut`, `name`, `type`, `avatar`, `owner`) VALUES (NULL, '$vault', '$vault_name', '2', '$avatar', '$b_owner_id');";
          $create_vault = mysql_query($insert_vault);

          if (!$create_vault) {
            header('Location: /admin/users.php?error');
          } else {
            header('Location: /admin/users.php?added');
          }
        }
      }
    }
  }
?>
