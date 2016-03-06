<?php
  include 'db_connection.php';

  if(isset($_POST['add'])) {
    $business_id = mysql_real_escape_string($_POST['busines-id']);
    $subtotal_val = mysql_real_escape_string($_POST['subtotal_val']);
    $reference_val = mysql_real_escape_string($_POST['reference_val']);
    $date_val = mysql_real_escape_string($_POST['date_val']);

    $add_val = "INSERT INTO `wallas`.`income` (`id`, `value`, `ref`, `date`, `business_id`) VALUES (NULL, '$subtotal_val', '$reference_val', '$date_val', '$business_id')";

    $insert = mysql_query($add_val);
  }

  header('Location: ../../index.php');
?>
