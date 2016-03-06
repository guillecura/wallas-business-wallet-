<!DOCTYPE html>
<html>
  <head>
      <title>Wallas</title>
      <meta name="description" content="Wallas, 2015">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width user-scalable=no">
      <meta name="format-detection" content="telephone=no">

      <link rel="shortcut icon" href=""?>

      <link rel="stylesheet" href="/www/css/admin.css">

      <script src="www/js/jquery.js"></script>
      <script src="www/js/modernizr.js"></script>
      <script src="www/js/dragdealer.js"></script>

      <?php
        // Include the DB connection
        include "www/inc/db_connection.php";
        include "www/inc/queries.php";
        include "www/inc/months.php";

        // SQL queries
        $land = "SELECT * FROM landing";
        $land_query = mysql_query($land);
        $landing = mysql_fetch_array($land_query);
      ?>

  </head>

  <body class="page-landing">
    <section style="background-image: url('/www/img/<?php echo $landing['hero_img']; ?>');">
      <?php include "www/inc/logo.php"; ?>
    </section>
    <article>
      <?php echo $landing['abstract']; ?>
    </article>
    <footer>
      <div>
        <ul>
          <li><a href="#">Register!</a></li>
          <li><a href="/login.php">Sing in</a></li>
          <li><a href="mailto:hi@guillecura.co" target="_blank">Contact us</a></li>
        </ul>
        <div>
          <?php include "www/inc/logo.php"; ?>
        </div>
        <div>
          <a class="button" href="#">App coming soon!</a>
        </div>
      </div>
      <span>&copy; <?php echo date("Y") ?> guillecura.co - all rights reserved.</span>
    </footer>
  </body>
</html>
