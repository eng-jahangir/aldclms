<?php
      require('db_connector.php'); 
      date_default_timezone_set('Asia/Dhaka'); 
      $dates=date("Y-m-d");
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Display</title>
  </head>
  <body>
      <?php
      require('banner.php');
      require('menu.php');
      require('dashboard.php');
      ?>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
  </body>
</html>