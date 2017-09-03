
<?php
  include_once ('connection.php');
  if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['emailadd'];
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
    
    $sql="select * from signup where(email='".$email."')"; /*email id not match*/
    $query=mysql_query($sql);
    $result = mysql_fetch_array($query);
     if($result[0] > 0)
     {
      echo "<script>alert('Email ID already exists!');</script>";/*email do not match*/
     }
     else
     {
   
          if(mysql_query("insert into signup (uname,fname,lname,email,pass,cpass) 
                         VALUES ('$uname','$fname','$lname','$email','$pass','$cpass')")) /*insert into database*/
                {
                    echo "<script>alert('Submit');</script>";
                    echo "<script>window.open('postad1.php','_self')</script>";
                }
             
            else
            {
               echo "<script>alert('No Submit');</script>";
              
            }
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
    <link href="css1/sign.css" rel="stylesheet">

    <!--confirm password-->
    <script>
       function val(){
          if(frm.cpassword.value != frm.password.value){
            alert("Password Confirmation Does Not Match");
            return false;
          }
        return true;
       }
    </script>

  </head>
  <body ng-app="myApp">
  
  <div class="container-fluid login-form">
    <a href="index.php"><h1 style="text-align:center;"><img src="img/10.png" alt="" title="Click Here To Go To Home Page"></h1></a>
      <div class="container">

        <div class="login">
              <h1>Signup</h1>
              <form action="" method="post" name="frm">
                  <input type="text" name="uname" placeholder="User Name" required="required"/>
                 <input type="text" name="fname" placeholder="First Name" required="required"/>
                 <input type="text" name="lname" placeholder="Last Name" required="required"/>
                 <input type="email" name="emailadd" placeholder="Email Address" required="required"/>
                 <input type="password" name="password" placeholder="Password" required="required"/>
                 <input type="password" name="cpassword" placeholder="Confirm Password" required="required"/>
                <input type="submit" name="submit" onclick="return val();" class="btn btn-primary btn-block btn-large" value="submit">
                <input type="reset" class="btn btn-danger btn-block btn-large" value="Reset">
             </form>
        </div>
  </div>
</div>
  
  
  
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>