<?php 

//Include Connection
include_once('connection.php');

//Header
header('Content-type: application/json');

//REQUEST_METHOD
$method = $_SERVER['REQUEST_METHOD'];

//Switch REST
switch ($method) {
  case 'POST':
    rest_post($dbc);  
    break;
  case 'GET':
	rest_get($dbc);
    break;
  default:
    break;
}

//Rest Get
function rest_get($dbc){
	//Process client url
	if (!empty($_GET['key'])) {

		//get data from url
		$key = $_GET['key'];
		$data = get_data($key,$dbc);

		//Server info
	 	//print_r($_SERVER);

		if (empty($data)) {
			//no data to send 
			deliver_response(200,"no data",NULL);
		}else{
			//send data
			deliver_response(200,$key,$data);
		}

	}else{
		//throw invalid request
		deliver_response(400,"invalid request",NULL);
	}
}

//Rest Post
function rest_post($dbc){

   //input data
   $user_name     = $_POST["user_name"];
   $from          = $_POST["user_email"];
   $phone_number  = $_POST["phone_number"];
   $body          = $_POST["msg"];

   //store mesasage to db
   $q = "INSERT INTO messages (name,email,phone,message,date) VALUES ('$user_name ','$from','$phone_number','$body', now() )";
   $r = mysqli_query($dbc,$q);

   if ($r) {
       deliver_response(200,"message sent",$NULL);
   }else{
       deliver_response(200,"no data",NULL);
   }


}

//Get Data From Database
function get_data($key,$dbc){

	$q = " select * from  $key ";

	if (isset($_GET['page']) & $key == "pages" ){
		$q = " select * from  $key where title = '$_GET[page]'";
	}elseif (isset($_GET['news_id']) & $key == "news" ) {
		$q = " select * from  $key where title = '$_GET[news_id]'";
	}elseif (isset($_GET['id']) & $key == "updated" ) {
		 $q = " select * from  $key where type = '$_GET[id]'";

	}elseif($key == "news"){
         $q = "SELECT n.id, n.title, n.date, CONCAT( users.last,', ', users.first) AS author ,n.body
               FROM news n
               INNER JOIN users ON n.author = users.id 
               ORDER BY date DESC";
    }

	$r = mysqli_query($dbc,$q);

	if ($r) {
		//$data = mysqli_fetch_all($r);

		$data = [];
		while ($row = mysqli_fetch_assoc($r)) {
    		$data[] = $row;
		}

	}
	else{
		$data =NULL;
	}
	
	return $data;
}

//Deliver Response
function deliver_response($status,$message,$data){

	header("HTTP/1.1 $status $message ");

	$response['status'] = $status; 
	$response['message'] = $message; 
	$response['data'] = $data; 

	$json_response = json_encode($response);
	echo $json_response;
}

?>