<?php

	include('../config/connection.php');

	$ds = DIRECTORY_SEPARATOR;  //1
	$id = $_GET['id'];
	echo $id;

	$storeFolder = '../uploads';   //2

	$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	$newname = time();
	$random = rand(100,999);
	$name = $newname.$random.'.'.$ext;



	echo $name;
	 
	if (!empty($_FILES)) {
	     
	    $tempFile = $_FILES['file']['tmp_name'];          //3             
	      
	    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
	     
   		$targetFile =  $targetPath. $name;  //5
	 
	    move_uploaded_file($tempFile,$targetFile); //6
	     
	}

?>     
