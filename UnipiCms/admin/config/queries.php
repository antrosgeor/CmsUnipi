<?php

switch ($pageid) {
	case 'dashboard':
	
	break;

	case 'pages':
		if ( isset($_POST['submited'])==1) {
			$title = mysqli_real_escape_string($dbc,$_POST['title']);
			$label = mysqli_real_escape_string($dbc,$_POST['label']);
			$header = mysqli_real_escape_string($dbc,$_POST['header']);
			$body = mysqli_real_escape_string($dbc,$_POST['body']);
			$type = mysqli_real_escape_string($dbc,$_POST['type']);

			if (isset($_POST['id']) !="") {
			   $action = "updated";
			   $q = "UPDATE pages SET type = $type, user = $_POST[user], slug = '$_POST[slug]', title = '$title', label = '$label', header = '$header', body = '$body'  WHERE id = $_POST[id] ";
			   $q2 = "UPDATE navigation SET label = '$label' ,url = '$_POST[slug]'  WHERE id = $_POST[id]";
 			   mysqli_query($dbc,$q2);
			}else{
			   $action = "added";
			   $q = "INSERT INTO pages (user,slug,title,label,header,body,type) VALUES ('$_POST[user]','$_POST[slug]','$title ','$label','$header','$body','$type')";
			   $q2 = "INSERT INTO navigation (label,url,position,status) VALUES ('$label','$_POST[slug]','1','1')";
 			   mysqli_query($dbc,$q2);
			}

			$r = mysqli_query($dbc,$q);

			if ($r) {
			   $message = '<p class="alert alert-success">Page was '.$action.'!</p>';
			} else {
			   $message = '<p class="alert alert-danger">Page could not be '.$action.'</p>'.mysqli_error($dbc);
			   $message .= '<p class="alert alert-warning">'.$q.'</p>';
			}  
		}	

		if (isset($_GET['id'])) { $opened = data_page($dbc,$_GET['id']); } 

	break;

	case 'users':
		if ( isset($_POST['submited'])==1) {
					$first = mysqli_real_escape_string($dbc,$_POST['first']);
					$last = mysqli_real_escape_string($dbc,$_POST['last']);

					if ($_POST['password'] != "") {

						if ($_POST['password']==$_POST['passwordv']) {

							$password = " password = sha1('$_POST[password]'),";
							$verify = true;

						}else{

							$verify = false;

						}
					}else{

						$verify = false;
					}


					if (isset($_POST['id']) !="") {

					   $action = "updated";
					   $q = "UPDATE users SET first = '$first', last = '$last', email = '$_POST[email]',  $password status = $_POST[status]  WHERE id = $_POST[id] ";
					   $r = mysqli_query($dbc,$q);

					}else{

					   $action = "added";
					   $q = "INSERT INTO users (first,last,email,password,status) VALUES ('$first', '$last' , '$_POST[email]' , sha1('$_POST[password]'),'$_POST[status]')";
					   if ($verify == true) {
					   	  $r = mysqli_query($dbc,$q);
					   }
					   
					}

					if ($r) {
					   $message = '<p class="alert alert-success">User was '.$action.'!</p>';
					} else {
					   $message = '<p class="alert alert-danger">User could not be '.$action.'</p>'.mysqli_error($dbc);
					   if ($verify == false) {
					   	 $message .= '<p class="alert alert-danger">Passwords do not match or empty</p>';
					   }
					   $message .= '<p class="alert alert-warning">QUery:'.$q.'</p>';
					}  
				}	
		if (isset($_GET['id'])) { $opened = data_user($dbc,$_GET['id']); } 

	break;

	case 'navigation':
		if ( isset($_POST['submited'])==1) {

					$label = mysqli_real_escape_string($dbc,$_POST['label']);
					$url = mysqli_real_escape_string($dbc,$_POST['url']);

					if (isset($_POST['id']) !="") {

					   $action = "updated";
					   $q = "UPDATE navigation SET id ='$_POST[id]', label = '$label', url = '$url' ,position = $_POST[position] , status =$_POST[status]  WHERE id = '$_POST[openedid]' ";
					   $r = mysqli_query($dbc,$q);

					}

					if ($r) {
					   $message = '<p class="alert alert-success">Navigation Item was '.$action.'!</p>';
					} else {
					   $message = '<p class="alert alert-danger">Navigation Item could not be '.$action.'</p>'.mysqli_error($dbc);
					   $message .= '<p class="alert alert-warning">QUery:'.$q.'</p>';
					}  
				}	
	break;

	case 'settings':
		if ( isset($_POST['submited'])==1) {

					$label = mysqli_real_escape_string($dbc,$_POST['label']);
					$value = mysqli_real_escape_string($dbc,$_POST['value']);

			
					if (isset($_POST['id']) !="") {

					   $action = "updated";
					   $q = "UPDATE settings SET id ='$_POST[id]', label = '$label', value = '$value' WHERE id = '$_POST[openedid]' ";
					   $r = mysqli_query($dbc,$q);

					}

					if ($r) {
					   $message = '<p class="alert alert-success">Setting was '.$action.'!</p>';
					} else {
					   $message = '<p class="alert alert-danger">Setting could not be '.$action.'</p>'.mysqli_error($dbc);
					   $message .= '<p class="alert alert-warning">QUery:'.$q.'</p>';
					}  
				}	
	break;

	case 'news':
		if ( isset($_POST['submited'])==1) {
			$title = mysqli_real_escape_string($dbc,$_POST['title']);
			$date = mysqli_real_escape_string($dbc,$_POST['date']);
			$user = mysqli_real_escape_string($dbc,$_POST['user']);
			$body = mysqli_real_escape_string($dbc,$_POST['body']);



			if (isset($_POST['id']) !="") {
			   $action = "updated";
			   $q = "UPDATE news SET title = '$title', date = now(), author = '$user', body = '$body' WHERE id = $_POST[id] ";
			}else{
			   $action = "added";
			   $q = "INSERT INTO news (title,date,author,body) VALUES ('$title',now(),'$user','$body')";
			}

			$r = mysqli_query($dbc,$q);

			$q = "UPDATE updated SET  date = now() WHERE type = 'news' ";
			$r = mysqli_query($dbc,$q);
			
			if ($r) {
			   $message = '<p class="alert alert-success">Post was '.$action.'!</p>';
			} else {
			   $message = '<p class="alert alert-danger">Post could not be'.$action.'</p>'.mysqli_error($dbc);
			   $message .= '<p class="alert alert-warning">'.$q.'</p>';
			}  
		 }	

		if (isset($_GET['id'])) { $opened = data_news($dbc,$_GET['id']); } 

	break;

	default:
	
	break;
}


?>