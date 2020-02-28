<?php

session_start();
include("conn.php");
$user=$_SESSION['user_name'];
if($user==true){}
else
{
	header("location:login.php")
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link rel="stylesheet" href="cssstyle.css" type="text/css">
    <title></title>
  </head>
  <body style="padding:10px ; background-image: url('bg2.jpg'); background-size: cover;";>

      <div id="menu-nav">
        <div id="navigation-bar">
          <ul>
            <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="#"><i class="fa fa-warehouse"></i><span>Inventory</span></a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> <span>Stats</span></a></li>
            <li><a href="About.html"><i class="fa fa-user"></i><span>About</span></a></li>
            <li><a href="Contact.html"><i class="fa fa-book"></i><span>Contact</span></a></li>
			<li><a href="logout.php"><i class="fa fa-sign-out" style="font-size:24px"></i><span>Logout</span></a></li>
          
          </ul>
        </div>
        
	</div>
      <br>
      <div class="tabContainer" align="center">
        <div class="buttonContainer">
          <button onclick="showPanel(0,'#cdd4c5')">Current Orders</button>
          <button onclick="showPanel(1,'#cdd4c5')">Requested Orders</button>
        </div>
        <div class="tabPanel">List of current Orders</div>
        <div class="tabPanel">List of requested Orders</div>
      </div>
      <script src="jscript.js"></script>
  </body>
</html>
