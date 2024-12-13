<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Hostelfinders</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Your styles -->
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  <link href="css/flexslider/flexslider.css" rel="stylesheet" media="screen">
  <link href="css/tabber/tabber.css" rel="stylesheet" media="screen">
  <link href="css/styles.css" rel="stylesheet" media="screen">
  <link href="css/responsive.css" rel="stylesheet" media="screen">

  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,100,200,300' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim, for Ie6-8 support of HTML5 elements -->
  <!--[if lt Ie 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <!-- styles for Ie -->
</head>

<body>
  
  <!-- BEGIN HEADER -->
  <header>
    <div class="container">
      <div class="top-header">

        <!-- Logo -->

        <!-- End Logo -->

        <!-- Menu -->

        <div class="menu-navbar  pull-left">

          <div class="navbar">

            <ul class="nav" id="navmenu">

              <li><a class="brand" href="index2.php" title="">Home</a></li>


              <li><a href="about_us2.php">who we are</a></li>
              <li><a href="contact2.php">Contact Us</a></li>


              <li class="dropdown"><a class="dropdown-toggle" data-target="#" data-toggle="dropdown"
                  ><?php echo $_SESSION['user_email'];  ?></a>

                <ul class="dropdown-menu">

                  <li><a href="ownerprofile.php?id=<?php echo $_SESSION['user_id'] ?>">Profile</a></li>


                  <li><a href="index.php">Logout</a></li>

                </ul>

              </li>

            </ul>

          </div>

        </div>

        <!-- End Menu -->

      </div>
    </div>