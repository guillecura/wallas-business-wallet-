<?php
  include 'db_connection.php';

  if(isset($_POST['edit'])) {
    $id = mysql_real_escape_string($_POST['id']);
    $f_name = mysql_real_escape_string($_POST['f_name']);
    $l_name = mysql_real_escape_string($_POST['l_name']);
    $email = mysql_real_escape_string($_POST['email']);

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

      $avatar = ", avatar='$avatar'";

    } else {
      $avatar = "";
    }

    // Sql query
    $edit_val = "UPDATE `users` SET f_name='$f_name', l_name='$l_name', email='$email' $avatar WHERE id='$id'";

    $edit = mysql_query($edit_val);

    header('Location: ../../account.php');
  }
?>
