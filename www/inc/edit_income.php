<?php
  include 'db_connection.php';

  if(isset($_POST['edit-income'])) {
    $id = mysql_real_escape_string($_POST['id']);
    $date = mysql_real_escape_string($_POST['date']);
    $ref = mysql_real_escape_string($_POST['ref']);
    $value = mysql_real_escape_string($_POST['value']);

    // Sql query
    $income_val = "UPDATE `income` SET date='$date', ref='$ref', value='$value' WHERE id='$id'";

    $edit = mysql_query($income_val);

    // if error while updated.
    if (!$edit) {
      echo "<br><br>Error!";
    }

    header('Location: ../../index.php');
  }

  if(isset($_POST['delete-income'])) {
    $id = mysql_real_escape_string($_POST['id']);

    // Sql query
    $income_val = "DELETE FROM `income` WHERE id='$id'";

    $delete = mysql_query($income_val);

    // if error while updated.
    if (!$delete) {
      echo "<br><br>Error!";
    }

    header('Location: ../../index.php');
  }
?>
