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
	if (is_numeric($id)) {
		$cond = "WHERE id = $id";
	}else{
		$cond = "WHERE slug = '$id'";
	}

	$q = "SELECT * FROM pages $cond";
	$r = mysqli_query($dbc, $q);

	$data = mysqli_fetch_assoc($r);

	$data['body_nohtml']=strip_tags($data['body']);

	if ($data['body'] == $data['body_nohtml']){
		$data['body_formated'] = '<p>'.$data['body'].'</p>';
	}else{
		$data['body_formated'] = $data['body'];
	}

	return $data;
}

function data_post_type($dbc,$id){

	$q = "SELECT * FROM type WHERE id = $id";
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
	return $data['fullname_reverse'];
}

function data_news($dbc,$number)
{
	$q = "SELECT id, title ,DATE_FORMAT(date,'%M, %D, %Y') as date_formated, date, author, body FROM news  ORDER BY date  DESC LIMIT $number";	
	$r = mysqli_query($dbc, $q);

	$data = mysqli_fetch_assoc($r);
	return $data;
}

?>