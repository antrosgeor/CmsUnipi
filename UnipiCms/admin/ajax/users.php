<?php 

include('../../config/connection.php');

$id = $_GET['id'];
echo $id;

$q = "DELETE FROM users WHERE id = $id";
$r = mysqli_query($dbc,$q);

if ($r) {
	echo "user deleted";
}else{
	echo "there was an error...<br>";
	echo $q.'<br>';
	echo mysqli_error($dbc);
}


?>