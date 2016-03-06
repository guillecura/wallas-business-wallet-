<?php
$session_user = $_SESSION['email'];
$session_admin = $_SESSION['admin'];
// SQL queries
$u = "SELECT * FROM users WHERE email='$session_user'";
$u_query = mysql_query($u);
$u_length = mysql_num_rows($u_query);
$u_item = mysql_fetch_array($u_query);
$b_owner_id = $u_item['id'];

$adm = "SELECT * FROM users WHERE email='$session_admin' AND id='1'";
$adm_query = mysql_query($adm);
$adm_item = mysql_fetch_array($adm_query);

$b = "SELECT * FROM business WHERE owner='$b_owner_id'";
$b_query = mysql_query($b);
$b_length = mysql_num_rows($b_query);

$t = "SELECT * FROM types";
$t_query = mysql_query($t);
$t_item = mysql_fetch_array($t_query);
?>
