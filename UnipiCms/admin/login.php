<?php 
#Start Session
session_start();

#Database Connection
include("../config/connection.php");

if($_POST){

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = sha1('$_POST[password]')";
    $r = mysqli_query($dbc,$q);

    if (mysqli_num_rows($r) == 1) {
        $_SESSION['username'] = $_POST['email'];
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ("config/css.php");?>
    <?php include ("config/js.php");?>	
    <style> body {padding-top: 40px; padding-bottom: 40px; background-color: #eee;


      } </style>	
</head>
<body>
<div id="wrap">
  <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-info">                        
                <div class="panel-heading">
                    <strong>Sign in</strong>
                </div><!-- END panel-heading -->                           
                <div class="panel-body">
                    <form action="login.php" method="post" role="form">  
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div><!-- END panel-body -->
            </div><!-- END panel -->                
        </div><!-- END col -->                   
    </div><!-- END row -->            
  </div><!-- END container -->			
</div>
</body>
</html>