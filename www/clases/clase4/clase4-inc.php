<!-- DB Conection -->
<?php
  $username = "root";
  $password = "root";
  $hostname = "localhost";

  // Connection to the database
  $dbhandle = mysql_connect($hostname, $username, $password)
    or die("Unable to connect to MySQL");

  // Select a database to work with
  $selected = mysql_select_db("programacion2", $dbhandle)
    or die("Could not select examples");

  // Close the connection
  // mysql_close($dbhandle);
?>
