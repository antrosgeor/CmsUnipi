<?php

function data_setting_value($dbc,$id)
{
	$q = "SELECT * FROM settings WHERE id = '$id'";
	$r = mysqli_query($dbc,$q);

	$data = mysqli_fetch_assoc($r);

	return $data['value'];
}

function data_page($dbc,$id)
{
	$q = "SELECT * FROM pages WHERE id = '$id'";	
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_assoc($r);
	return $data;
}

function data_user($dbc,$id)
{
	if (is_numeric($id)) {
		$q = "SELECT * FROM users WHERE id = '$id'";
	}else {
		$q = "SELECT * FROM users WHERE email = '$id'";
	} 
	
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_assoc($r);
	$data['fullname'] = $data['first'].' '.$data['last'];
	$data['fullname_reverse'] = $data['last'].', '.$data['first'];
	return $data;
}

function page_title($dbc)
{
	$q = "SELECT value FROM settings WHERE id = 'site-title'";	
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_assoc($r);
	return $data;
}


function data_news($dbc,$id)
{
	$q = "SELECT * FROM news WHERE id = '$id'";	
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_assoc($r);
	return $data;
}

function get_date()
{
	$date = getdate();

	$month = $date['month'];
	$day = $date['mday'];
	$year = $date['year'];

	$date = $month." ".$day.", ".$year;

	return $date;
}

?>