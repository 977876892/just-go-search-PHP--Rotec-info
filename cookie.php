<?php
  include_once ('connection.php');
  if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=md5($_POST['password']);
   $sql="select * from signup where(email='".$email."' and pass='".$pass."')";
    $query=mysql_query($sql);
    $result = mysql_fetch_array($query);
    
    if($result >0){
    	setcookie("ligin","1");
    	header("location:postad1.php");
      echo "<script>alert('Submit');</script>";
    }
    else{
    	header("location:cookie.php");
       echo "<script>alert('Invalid Email ID & Password');</script>";
    }

    
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Just Search</title>
     <!-- fab icon -->
    <link rel="shortcut icon" type="image/png" href="img/icon.png"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css1/index.css" rel="stylesheet">
    <link href="css1/form.css" rel="stylesheet">
   <!--login-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type="text/javascript" src="js/angular.min.js"></script>
   <script type="text/javascript" src="js/login.js"></script>
   <script type="text/javascript" src="js/inputfocus.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

   
  </head>
  <body ng-app="myApp">
        <a href="index.php"><h1 style="text-align:center; margin-top:6%;"><img src="img/10.png" alt="" title="Click Here To Go To Home Page"></h1></a>

   <form name="frm" action="" method="post" novalidate>
  <div class="container-fluid">
         <div class="container">
             
              <div class="login">
               
                <div class="login-form" ng-controller="Democtrl">
                <h1>Login</h1>
                  <h3>Email:</h3>
                  <input type="email" name="email" placeholder="Email" ng-model="email" required/><br>
                  <span ng-show="frm.email.$dirty && frm.email.$invalid">
                          <span ng-show="frm.email.$error.required" style="color:red;">Enter ur email id</span>
                          <span ng-show="frm.email.$error.email" style="color:red;">Roung email ID</span>
                  </span>
                  <h3>Password:</h3>
                  <input type="password" name="password" placeholder="Password"  ng-model="password" required/>
                  <br>
                  <span ng-show="frm.password.$error.required && frm.password.$dirty" style="color:red;">Enter ur Password</span><br>
                  <input type="submit" name="submit" value="Login" class="login-button"/>
                  <br>
                  <a href="signup.php" class="sign-up">Sign Up!</a>
                  <br>
                  <h6 class="no-access">Forgot Password?</h6>
                </div>
              </div>
              
         </div>
  </div>
</form>














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>