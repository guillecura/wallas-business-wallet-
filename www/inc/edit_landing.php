<?php
  include 'db_connection.php';

  if(isset($_POST['save'])) {
    $id = mysql_real_escape_string($_POST['id']);

    if (isset($_POST['abstract'])) {
      $abstract = mysql_real_escape_string($_POST['abstract']);
      $abs = "`abstract`='$abstract'";
    } else {
      $abs = "";
    }

    $errors = array();

    if ($_FILES['hero-img']['name'] != '') {
      $file_name = $_FILES['hero-img']['name'];
      $file_size = $_FILES['hero-img']['size'];
      $file_tmp = $_FILES['hero-img']['tmp_name'];
      $file_type = $_FILES['hero-img']['type'];
      $file_ext = strtolower(end(explode('.', $file_name)));

      $ext = array("jpeg","jpg","png","gif");

      if (in_array($file_ext, $ext) === false) {
         $errors[] = "extension not allowed, please choose a JPEG, PNG or GIF file.";
      }

      if ($file_size > 1048576) {
         $errors[] = 'File size cannot be larger than 1 MB';
  	  }

      if (empty($errors) == true){
        $hero_img = "landingpage-" .date("Y-n-j"). "." . $file_ext;
         move_uploaded_file($file_tmp, "../img/" . $hero_img);
      } else {
         print_r($errors);
      }

      $hero_img = ", `hero_img`='$hero_img'";

    } else {
      $hero_img = "";
    }

    // Sql query
    $edit_val = "UPDATE `wallas`.`landing` SET $abs $hero_img WHERE id='$id'";

    $edit = mysql_query($edit_val);

    header('Location: ../../admin/customize.php?saved');
  }
?>
