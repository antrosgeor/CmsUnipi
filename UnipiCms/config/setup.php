<?php
//setup file
error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$dbname = "UnipiCms";

#Database Connection
include("config/connection.php");

#Constants
DEFINE("D_TEMPLATE","template");
DEFINE("D_VIEW","views");

#Functions
include("functions/sandbox.php");
include("functions/data.php");
include("functions/template.php");


#Site Setup
$site_title = data_setting_value($dbc,'site-title');
$debug = data_setting_value($dbc,'debug-status');
$parallax = data_setting_value($dbc,'parallax-status');
$posts_per_page = data_setting_value($dbc,'posts_per_page');

$path = get_path();

if (!isset($path['call_parts'][0]) || $path['call_parts'][0] == "")
{
	//$path['call_parts'][0] = 'home';//set $path['call_parts'][0] to equal the value given in the url
	header('Location:home');
}

#Page Setup
$page = data_page($dbc,$path['call_parts'][0]); 
$view = data_post_type($dbc,$page['type']); 

?>