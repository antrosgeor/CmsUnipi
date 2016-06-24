<?php

#START SESSION
session_start();

#INCLUDE setup.php
include("config/setup.php");

#REDIRECT TO LOGIN PAGE
if (!isset($_SESSION['username'])) {	
  header('Location: login.php');
}

?>

  
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $site_title ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  gia tis mixanes anazitisis-->
	<meta name="keywords" content="pc, cms, software technology, papei, university peiraius" />
	<!--perigrafi perilipsi -->
	<meta name="description" content="this is page for software technology of university peiraius " />
	<!--tipos selidas --> 
	<meta http-equiv="Content_type" content="text/html; charset=utf-8" />
	<!--sigrafeas tis selidas -->
	<meta name="author" content="Th.Fasoulas, A.Georgiou"  />
	<!-- //fortoni tin selida meta apo X sec -->
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<!-- //anakatefthinsi tis selidas meta apo X sec ths selidas url
	<meta http-equiv="refresh" content="5;url=http://deixto.com" /> -->
	<!-- //odigies ths se lidas pros programmata xartografisis kai deiktodotisis 
	<meta name="robots" content="index, nofollow"> -->
	<!--elexos tou caching an tha kratisis antigrafo tis selidas -->
	<meta http-equiv="pragma" content="no-cashe">
	<meta http-equiv="cache-control" content="no-cashe">
	<!-- //telos tis selidas apo to server meta tin li3i tis imeras
	<meta http-equiv="expires" content="Tue, 31 Dec 2008 23:59:59 GMT"> -->
	<!--ico logo -->
	<link rel="shortcut icon" href="images/pc.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="functions/custom.js"></script>
    <?php include ("config/css.php");?>
    <?php include ("config/js.php");?>		
</head>
<body>
  <div id="wrap">
  	<?php include(D_TEMPLATE."/navigation.php") ?>