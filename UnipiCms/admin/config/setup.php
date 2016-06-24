<?php
//setup file

error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$dbname = "UnipiCms";

#Database Connection
include("../config/connection.php");

#Constants
DEFINE("D_TEMPLATE","template");

#Functions
include("functions/data.php");
include("functions/template.php");
include("functions/sandbox.php");

#Site Setup
$debug = data_setting_value($dbc,'debug-status');

$site_title = page_title($dbc)[value];


if (isset($_GET['page']))
{
	$pageid = $_GET['page'];//set pageid equal to get[page]
}else
{
	$pageid = 'dashboard';//set pageid equal to 1
}

#page setup
include("config/queries.php");
$page = data_page($dbc,$pageid); 

#user setup
$user = data_user($dbc,$_SESSION['username']);	

?>