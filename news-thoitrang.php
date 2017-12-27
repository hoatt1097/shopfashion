<?php 
  include 'database.php';
  $dt = new Database;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    
    <title>News</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style type="text/css" media="screen">
      .divcenter {
        margin-top: 30px;
        position: relative !important;
        float: none !important;
        margin-left: auto !important;
        margin-right: auto !important;
      }
      .nobottommargin {
        margin-bottom: 0 !important;
      }
      .acctitle {
          padding-top: 5px;
          padding-bottom: 5px;
          font-size: 20px;
          line-height: 35px;
          font-weight: 400;
      }
      .button {
          display: inline-block;
          position: relative;
          cursor: pointer;
          outline: none;
          white-space: nowrap;
          margin: 5px;
          padding: 0 22px;
          font-size: 14px;
          height: 40px;
          line-height: 40px;
          background-color: #00c5bb;
          color: #FFF;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 1px;
          border: none;
          text-align: center;
      }
      .button:hover {
          background-color: #ff7a13;
      }

    </style>  

  </head>
  <body>
    <?php
	include('header.php');
	include('thoitrang.php');
	//include('footer.php');
?>
  </body>
</html>