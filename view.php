<!--login-->
<?php
  include_once ('connection.php');
  if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=md5($_POST['password']);
   $sql="select * from signup where(email='".$email."' and pass='".$pass."')";
    $query=mysql_query($sql);
    $result = mysql_fetch_array($query);
     if($result[0] > 0)
        {
             echo "<script>alert('Submit');</script>";
             echo "<script>window.open('postad1.php','_self')</script>";
        }
        else
        {
           echo "<script>alert('Invalid Email ID');</script>";
        }
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Just Search</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- fab icon -->
    <link rel="shortcut icon" type="image/png" href="img/icon.png"/>
    <!-- my -->
    <link href="css/my.css" rel="stylesheet">
    <link href="css/view.css" rel="stylesheet">
    
   <link href="css/modal.css" rel="stylesheet">
   <!--login-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type="text/javascript" src="js/angular.min.js"></script>
   <script type="text/javascript" src="js/login.js"></script>
   <script type="text/javascript" src="js/inputfocus.js"></script>


<!--click to top-->
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(window).scroll(function(){
      if($(this).scrollTop() > 100){
        $('#scroll').fadeIn(3000);
      }
      else{
        $('#scroll').fadeOut(3000);
      }
    });
    $("#scroll").click(function(){
      $("html,body").animate({scrollTop:0},600);
      return false;
    });
  });
</script>
<link rel="stylesheet" href="css/top.css">

  </head>
  <body>
   <!--background-->
  <div class="container-fluid">
    <div class="container back-white">
        <div class="row">
       <!--header-->
          <header class="header">
              <div class="col-xs-12 col-md-8 col-sm-6 col-lg-8" id="logo">
               <a href="index.php"><img src="img/11.png" alt="" class="img-responsive" title="Click Here To Go To Home Page"></a>
              </div>
              <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4">
                      <div class="row">
                  <!-- follows button -->
                       <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 header-top">
                              
                            <ul>
                                <li><a href=""><img src="follows/f.png" class="img-responsive" title="Facebook" alt=""></a></li>
                                <li><a href=""><img src="follows/t.png" class="img-responsive" title="Twitter" alt=""></a></li>
                                <li><a href=""><img src="follows/g.png" class="img-responsive" title="Google+" alt=""></a></li>
                                <li><a href=""><img src="follows/p.png" class="img-responsive" title="Pinterest" alt=""></a></li>
                                <li><a href=""><img src="follows/y.png" class="img-responsive" title="Youtube" alt=""></a></li>
                              </ul>

                        </div></div>
                    <!--postad Form-->
                       <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 header-bottom">
                          <button type="button" class="btn btn-default btn-lg" id="myBtn">POSTAD</button>
                            <!-- The Modal -->
                          <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                              <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Login Form</h2>
                              </div>
                              <div class="modal-body"  ng-app="myApp" ng-controller="Democtrl">
                                  <form name="login" class="form"  action="" method="post" novalidate>
                                <div class="form-group">
                                        <label for="exampleInputPassword1" style="font-family:Times New Roman;color:#f78f1e;">Email</label>
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email ID"
                                        style="color:black;font-family:Times New Roman;" title="Email" name="email" ng-model="email" required>
                                        <span ng-show="login.email.$dirty && login.email.$invalid">
                                          <span ng-show="login.email.$error.required" style="color:red;">Enter ur email id</span>
                                          <span ng-show="login.email.$error.email" style="color:red;">Roung email ID</span>
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="color:#f78f1e;font-family:Times New Roman;">Password</label>
                                    <input type="Password" class="form-control"  id="exampleInputEmail1" placeholder="Password" style="font-family:Times New Roman;color:black;" title="Password" name="password" ng-model="password" required>
                                    <span ng-show="login.password.$error.required && login.password.$dirty" style="color:red;">Enter ur Password</span>
                                </div>
                                
                      <hr style="border-color:#349ae5;">
                       <a href="signup.php"><button1 type="reset" class="btn btn-primary" style="float:right;">Signup</button1></a>
                      <input type="submit" name="submit" class="btn btn-success" value="submit" ng-disabled="login.$invalid">
                      <input type="reset" class="btn btn-danger" >
                      
                            </form>
                              </div>
                              
                            </div>

                          </div>

                       </div>

              </div>
          </header>
     <!--header end-->

<!--banner-->
      <div class="container-fluid">
          <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 banner"></div>
           </div>
      </div>
  <!--banner end-->
  
  <!--product search-->
  <form action="" method="post" class="form-wrapper">
   <div class="container-fluid">
          <div class="row">
             <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 ">
				<input type="text" id="search" placeholder="Location search for..." name="location" required>
				<input type="submit" value="submit" id="submit">
             </div>
			
           </div>
      </div>
    </form>
  <!--bproduct search end-->
  <div class="container">
     <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
		  <?php
		   include_once ('connection.php');
		   if(isset($_POST['location'])){
      $loc=$_POST['location'];
      $category=$_GET['category'];
			$query=mysql_query("SELECT * FROM post WHERE location LIKE '%".$loc."%' and category LIKE '".$category."'");
		  ?>
		   <table border="2" style="width:100%;">
			 
			 <thead>
			   <tr>
				 <th>Category</th>
				 <th>Title</th>
				 <th>CompanyUrl</th>
				 <th>Location</th>
				 <th>Description</th>
				 <th>Name</th>
				 <th>Mobile</th>
         <th>Email</th>
				 <th>Images</th>
			   </tr>
			   
			 </thead>
			 <tbody>
		   <?php
		   
			while($row=mysql_fetch_array($query)){
			 
			  $category=$row['category'];
			  $title=$row['title'];
			  $url=$row['companyurl'];
			  $des=$row['description'];
			  $location=$row['location'];
			  $name=$row['name'];
			  $mobile=$row['mobile'];
        $email=$row['email'];
			  $img=$row['images'];
			 
			  echo '<tr><td>'.$category .' </td><td>'.$title.'</td><td> '.$url.' </td><td>'.$des.' </td><td>'.$location.'</td><td> '.$name.' </td><td>'.$mobile.' </td><td>'.$email.'</td><td><img src="'.$img.'"  style="width:50px;height:50px;"></td></tr>';
			}
			
		   }
		   
		  ?>
  
            </tbody>
         </table> 
     </div>
 </div>









    


         </div>
    </div>
   </div><!--background-end-->

<!-- BackToTop Button -->
<a href="#" id="scroll" title="Scroll to Top" style="display: none;"><img src="img/rock.png" id="rock" class="img-responsive" alt=""><span></span></a>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <!--my modal-->
    <script src="js/modal.js"></script>
  </body>
</html>