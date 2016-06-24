<?php 

include('../../config/connection.php');

$id = $_GET['id'];

$q2 = "SELECT * FROM pages WHERE id = $id";
$r2 = mysqli_query($dbc,$q2);
$label = mysqli_fetch_assoc($r2);

$q3 = "DELETE FROM navigation WHERE label = '$label[label]'";
$r3 = mysqli_query($dbc,$q3);

$q = "DELETE FROM pages WHERE id = $id";
$r = mysqli_query($dbc,$q);



if ($r) {
	echo "page deleted ";
	echo $id;
	echo $label['label'];
}else{
	echo "there was an error...<br>";
	echo $q.'<br>';
	echo mysqli_error($dbc);
}


?>