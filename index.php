
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
           echo "<script>alert('Invalid Email ID & Password'');</script>";
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
    <link href="css/item.css" rel="stylesheet">
  
  <!--my modal-->
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
               <a href=""><img src="img/11.png" alt="" class="img-responsive"></a>
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

    <!--content-->
    <form action="view.php" method="post">
      <div class="container-fluid item">
          <div class="container">
          <div class="row">
      <!--1 row-->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Doctor">
                     <a href="view.php?category=doctor"><img src="items/1.png" class="img-responsive" alt="">
                     <h5><b>Doctor</b></h5></a>
                   </div>
                   <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Drivers">
                      <a href="view.php?category=drivers"><img src="items/2.png" class="img-responsive" alt="">
                      <h5><b>Drivers</b></h5></a>
                   </div>
                   <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Fitness Center">
                      <a href="view.php?category=fitness"><img src="items/3.png" class="img-responsive" alt="">
                      <h5><b>Fitness Center</b></h5></a>
                   </div>
                   <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Cosmetics Shops">
                      <a href="view.php?category=cosmetics"><img src="items/4.png" class="img-responsive" alt="">
                      <h5><b>Cosmetics Shops</b></h5></a>
                   </div>
                   <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content"  id="mechanic" title="cybercafe">
                      <a href="view.php?category=cybercafe"><img src="items/5.png"  class="img-responsive" alt="">
                      <h5><b>Cybercafe</b></h5></a>
                   </div>
              </div>
        <!--2 row-->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1"  title="Courier Services">
                        <a href="view.php?category=courier"><img src="items/6.png" class="img-responsive" alt="">
                        <h5><b>Courier Services</b></h5></a>
                     </div>

                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Photography">
                       <a href="view.php?category=photography"><img src="items/7.png"  class="img-responsive" alt="">
                        <h5><b>Photography </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Gas Agency ">
                       <a href="view.php?category=gas"><img src="items/8.png" class="img-responsive" alt="">
                       <h5><b>Gas Agency </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Astrology">
                       <a href="view.php?category=astrology"><img src="items/9.png" class="img-responsive" alt="">
                       <h5><b>Astrology </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" id="startup" title="Lawyers">
                       <a href="view.php?category=lawyers"><img src="items/10.png"  class="img-responsive" alt="">
                       <h5><b>Lawyers </b></h5></a>
                     </div>
              </div>
       <!--3 row-->
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Bus Tickets Booking">
                       <a href="view.php?category=busticket"><img src="items/26.png" class="img-responsive" alt="">
                       <h5><b>Bus Tickets Booking </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Gift Centre">
                       <a href="view.php?category=gift"><img src="items/12.png" class="img-responsive" alt="">
                       <h5><b>Gift Centre </b></h5></a>
                     </div>

                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Tailors">
                       <a href="view.php?category=tailors"><img src="items/13.png" class="img-responsive" alt="">
                       <h5><b>Tailors </b></h5></a>
                       
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Computer">
                       <a href="view.php?category=computer"><img src="items/14.png" class="img-responsive" alt="">
                       <h5><b>Computer </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" id="healthcare" title="Barber Shop">
                       <a href="view.php?category=barber"><img src="items/15.png" class="img-responsive" alt="">
                       <h5><b>Barber Shop </b></h5></a>
                     </div>
              </div>
        <!--4 row-->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Movies">
                       <a href="view.php?category=movies"><img src="items/16.png" class="img-responsive" alt="">
                       <h5><b>Movies </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Institutes">
                       <a href="view.php?category=institute"><img src="items/17.png" class="img-responsive" alt="">
                       <h5><b>Institutes  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Backers">
                       <a href="view.php?category=backers"><img src="items/18.png" class="img-responsive" alt="">
                       <h5><b>Backers  </b></h5></a>
                     </div>

                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Car Rent">
                       <a href="view.php?category=car"><img src="items/19.png" class="img-responsive" alt="">
                       <h5><b>Car Rent  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" id="rents" title="Driving School">
                       <a href="view.php?category=driving"><img src="items/20.png" class="img-responsive" alt="">
                       <h5><b>Driving School  </b></h5></a>
                     </div>
              </div>
        <!--5 row-->
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Schools
      ">
                       <a href="view.php?category=schools"><img src="items/21.png" class="img-responsive" alt="">
                       <h5><b>Schools  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Xerox">
                       <a href="view.php?category=xerox"><img src="items/22.png" class="img-responsive" alt="">
                       <h5><b>Xerox  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Colleges">
                       <a href="view.php?category=colleges"><img src="items/23.png" class="img-responsive" alt="">
                       <h5><b>Colleges  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Hostels">
                       <a href="view.php?category=hostels"><img src="items/24.png" class="img-responsive" alt="">
                       <h5><b>Hostels  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" id="rents" title="Book Store ">
                       <a href="view.php?category=book"><img src="items/25.png" class="img-responsive" alt="">
                       <h5><b>Book Store  </b></h5></a>
                     </div>
                     
                     
             </div>
      <!--6 row-->
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="ATM center ">
                       <a href="view.php?category=atm"><img src="items/27.png"  class="img-responsive" alt="">
                       <h5><b>ATM center  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Banks">
                       <a href="view.php?category=banks"><img src="items/28.png"  class="img-responsive" alt="">
                       <h5><b>Banks  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Footwear Shops ">
                       <a href="view.php?category=footwear"><img src="items/29.png" class="img-responsive" alt="">
                       <h5><b>Footwear Shops  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Hospitals">
                       <a href="view.php?category=hospital"><img src="items/30.png"  class="img-responsive" alt="">
                       <h5><b>Hospitals  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" id="rents" title="Hotels">
                       <a href="view.php?category=hotels"><img src="items/31.png" class="img-responsive" alt="">
                       <h5><b>Hotels  </b></h5></a>
                     </div>
                     
             </div>
       <!--7 row-->
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Furniture">
                       <a href="view.php?category=furniture"><img src="items/32.png"  class="img-responsive" alt="">
                       <h5><b>Furniture  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Jewellery Shops">
                       <a href="view.php?category=jewellery"><img src="items/33.png" class="img-responsive" alt="">
                       <h5><b>Jewellery Shops  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Pharmacy">
                       <a href="view.php?category=pharmacy"><img src="items/34.png" class="img-responsive" alt="">
                       <h5><b>Pharmacy  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Bike Repair Centre">
                       <a href="view.php?category=bike"><img src="items/35.png" class="img-responsive" alt="">
                       <h5><b>Bike Repair Centre  </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" id="rents" title="Pan Card Dealer ">
                       <a href="view.php?category=pan"><img src="items/36.png"  class="img-responsive" alt="">
                       <h5><b>Pan Card Dealer  </b></h5></a>
                     </div>
                     
             </div>
       <!--8 row-->
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content1" title="Petrol Pumps">
                       <a href="view.php?category=petrol"><img src="items/37.png" class="img-responsive" alt="">
                        <h5><b>Petrol Pumps</b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Transport">
                       <a href="view.php?category=transport"><img src="items/38.png" class="img-responsive" alt="">
                        <h5><b>Transport </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="CA">
                       <a href="view.php?category=ca"><img src="items/39.png" class="img-responsive" alt="">
                        <h5><b>CA   </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" title="Car Repair Centre">
                       <a href="view.php?category=carrepair"><img src="items/11.png" class="img-responsive" alt="">
                        <h5><b>Car Repair Centre   </b></h5></a>
                     </div>
                     <div class="col-xs-12 col-sm-5 col-md-3 col-lg-2 content" id="rents" title="Others">
                       <a href="view.php?category=others"><img src="items/40.png" class="img-responsive" alt="">
                        <h5><b>Others  </b></h5></a>
                     </div>
                     
             </div>
      
           </div>
       </div>
       </div>
      </form>
<!--content end-->














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