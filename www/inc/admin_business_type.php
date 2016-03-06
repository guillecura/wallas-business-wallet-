<?php
  include 'db_connection.php';

  if(isset($_POST['update-type'])) {
    $id = mysql_real_escape_string($_POST['id']);
    $c_base = mysql_real_escape_string($_POST['c_base']);
    $iva = mysql_real_escape_string($_POST['iva']);
    $fonasa_1 = mysql_real_escape_string($_POST['fonasa_1']);
    $fonasa_2 = mysql_real_escape_string($_POST['fonasa_2']);
    $bps = mysql_real_escape_string($_POST['bps']);
    $irpf_1 = mysql_real_escape_string($_POST['irpf_1']);
    $irpf_1_val = mysql_real_escape_string($_POST['irpf_1_val']);
    $irpf_2 = mysql_real_escape_string($_POST['irpf_2']);
    $irpf_2_val = mysql_real_escape_string($_POST['irpf_2_val']);
    $irpf_3 = mysql_real_escape_string($_POST['irpf_3']);
    $irpf_3_val = mysql_real_escape_string($_POST['irpf_3_val']);
    $irpf_4 = mysql_real_escape_string($_POST['irpf_4']);
    $irpf_4_val = mysql_real_escape_string($_POST['irpf_4_val']);
    $irpf_5 = mysql_real_escape_string($_POST['irpf_5']);
    $irpf_5_val = mysql_real_escape_string($_POST['irpf_5_val']);
    $irpf_6 = mysql_real_escape_string($_POST['irpf_6']);
    $irpf_6_val = mysql_real_escape_string($_POST['irpf_6_val']);

    // Sql query
    $edit_val = "UPDATE `types` SET `c_base`='$c_base', `iva`='$iva', `fonasa_1`='$fonasa_1', `fonasa_2`='$fonasa_2', `bps`='$bps', `irpf_1`='$irpf_1', `irpf_1_val`='$irpf_1_val', `irpf_2`='$irpf_2', `irpf_2_val`='$irpf_2_val', `irpf_3`='$irpf_3', `irpf_3_val`='$irpf_3_val', `irpf_4`='$irpf_4', `irpf_4_val`='$irpf_4_val', `irpf_5`='$irpf_5', `irpf_5_val`='$irpf_5_val', `irpf_6`='$irpf_6', `irpf_6_val`='$irpf_6_val' WHERE id='$id'";
    $edit = mysql_query($edit_val);

    if (!$edit) {
      header('Location: /admin/type.php?t=' .$id. '&error');
    }

    header('Location: /admin/type.php?t=' .$id. '&saved');
  }
?>
