<?php

include ("../config/connection.php");

//header
header("access-control-allow-origin: *");

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    print_r($_POST);

    //input data .
    $user_name     = $_POST["user_name"];
    $from          = $_POST["user_email"];
    $phone_number  = $_POST["phone_number"];
    $body          = $_POST["msg"];
    $subject       = "Testing Email Service";
    $to            = "fassoulas_athanasios@hotmail.gr";

    //store mesasage to db
    $q = "INSERT INTO messages (name,email,phone,message,date) VALUES ('$user_name ','$from','$phone_number','$body', now() )";
    $r = mysqli_query($dbc,$q);
    
    //echo $q;

    if ($r) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }  


    // //send mail    
    // if (mail ($to, $subject, $body, $from)) { 
    //     echo '<p>Your message has been sent!</p>';
    // } else { 
    //     echo '<p>Something went wrong, go back and try again!</p>'; 
    // } 

}

?>