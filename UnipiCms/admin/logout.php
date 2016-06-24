<?php 

#Start Session
session_start();

unset($_SESSION['username']);//Delete userame key

//session_destroy();//this would delete all of the session keys

header('Location: login.php');

?>