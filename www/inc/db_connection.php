<?php
// DB Conection
  $username = "me";
  $password = "44320064";
  // $username = "root";
  // $password = "root";
  $hostname = "localhost";

  // Connection to the database
  $dbhandle = mysql_connect($hostname, $username, $password)
    or die("Unable to connect to MySQL");

  // Select a database to work with
  $selected = mysql_select_db("wallas", $dbhandle)
    or die("Could not select wallas");
?>
