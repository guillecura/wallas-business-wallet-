<?php
  include 'db_connection.php';

  if(isset($_POST['edit'])) {
    $id = mysql_real_escape_string($_POST['id']);
    $name = mysql_real_escape_string($_POST['name']);
    $rut = mysql_real_escape_string($_POST['rut']);
    $number = mysql_real_escape_string($_POST['number']);
    $address = mysql_real_escape_string($_POST['address']);
    $phone = mysql_real_escape_string($_POST['phone']);

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
        $avatar = $rut . "-logo." . $file_ext;
        move_uploaded_file($file_tmp, "../img/media/" . $avatar);
      } else {
        print_r($errors);
      }

      $avatar = ", avatar='$avatar'";

    } else {
      $avatar = "";
    }

    // Sql query
    $edit_val = "UPDATE `business` SET `name`='$name', `rut`='$rut', `number`='$number', `address`='$address', `phone`='$phone' $avatar WHERE id='$id'";

    $edit = mysql_query($edit_val);

    if (!$edit) {
      header('Location: /admin/detail.php?b=' .$id. '&error');
    }

    header('Location: /admin/detail.php?b=' .$id. '&saved');
  }
?>
