<?php
  if(!isset($_COOKIE["ligin"]))
    header("location:cookie.php");
?>
<?php
  include_once ('connection.php');
  if(isset($_POST['submit'])){
       $select=$_POST['select'];
       $title=$_POST['title'];
       $url=$_POST['url'];
       $location=$_POST['location'];
       $description=$_POST['description'];
       $urname=$_POST['urname'];
       $mobile=$_POST['number'];
       $email=$_POST['emailadd'];

 
    $file=$_FILES['file']['name'];
    $tmp=$_FILES['file']['tmp_name'];
    $size=$_FILES['file']['size'];
    $extension =explode('.', $file);
    $extension =strtolower(end($extension));
    $newfile=uniqid().'.'.$extension;
    $store="images/".$newfile;
    if($size >= 1000000)
    {
         echo "<script>alert('NO Submitted');</script>";
        
    }
    else
    {
          if(move_uploaded_file($tmp, $store))
          {
                  if(mysql_query("INSERT INTO `post`(`category`, `title`, `companyurl`, `location`, `description`, `name`, `mobile`, `email`,`images`) VALUES ('$select','$title','$url','$location','$description','$urname','$mobile','$email','$store')"))
                    {
                    echo "<script>alert('Submitted');</script>";
                    echo "<script>window.open('index.php','_self')</script>";
                   }
          }
          else
           {
            echo "<script>alert('Max File Should Be 1 MB');</script>";
            echo "<script>alert('NO Submitted');</script>";

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
    <link href="css1/rute.css" rel="stylesheet">
   <script src="js1/angular.min.js"></script>
    <script src="js1/formvali.js"></script>
   <!--select option comment-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
		    jQuery(function() {  
		    jQuery('.error').hide(); // Hide Warning Label. 
		    jQuery("input[name=submit]").on("click", function() {
		     var returnvalue;
		      if(jQuery("select[name=select]").val() == 0) {
		        jQuery("label#select_error").show(); // show Warning 
		        jQuery("select#sel").focus();  // Focus the select box      
		        returnvalue=false;   
		     }
		return returnvalue;
		});
		      });  
    </script>
  </head>
  <body ng-app="myApp">
      <a href="index.php"><h1 style="text-align:center;"><img src="img/10.png" title="Click Here To Go To Home Page" alt=""></h1></a>
       <div class="container-fluid login-form">
                  <div class="container">
                             <div class="login">
							<h1>POSTAD</h1>
				<form name="frm" action="" method="post" enctype="multipart/form-data">
					
					<select name="select" class="design" id="sel" />
				              <option value="0">Select Category</option>
							  <option value="doctor" name="doctor">Doctor</option>
							  <option value="drivers" name="drivers">Drivers</option>
							  <option value="fitness" name="fitness">Fitness Center</option>
							  <option value="cosmetics" name="cosmetics">Cosmetics Shops</option>
							  <option value="cybercafe" name="cybercafe">Cybercafe</option>
		           <option value="courier" name="courier">Courier Services</option>
		           <option value="photography" name="photography">Photography</option>
							 <option value="gas" name="gas">Gas Agency</option>
							  <option value="astrology" name="astrology">Astrology</option>
							  <option value="lawyers" name="lawyers">Lawyers</option>
							  <option value="busticket" name="busticket">Bus Tickets Booking </option>
							  <option value="gift" name="gift">Gift Centre</option>
							  <option value="tailors" name="tailors">Tailors</option>
								<option value="computer" name="computer">Computer</option>
								<option  value="barber" name="barber">Barber Shop</option>
                <option value="movies" name="movies">Movies</option>
                <option value="institute" name="institute">Institutes</option>
                <option value="backers" name="backers">Backers</option>
                <option value="car" name="car">Car Rent</option>
                <option value="driving" name="driving">Driving School</option>
                <option value="schools" name="schools">Schools</option>
                <option value="xerox" name="xerox">Xerox</option>
                <option value="colleges" name="colleges">Colleges</option>
                <option value="hostels" name="hostels">Hostels</option>
                <option value="books" name="book">Book Store</option>
                <option value="atm" name="atm">ATM center</option>
                <option value="banks" name="banks">Banks</option>
                <option value="footwear" name="footwear">Footwear Shops </option>
                <option value="hospital" name="hospital">Hospitals</option>
                <option value="hotels" name="hotels">Hotels</option>
                <option value="furniture" name="furniture">Furniture</option>
                <option value="jewellery" name="jewellery">Jewellery Shops</option>
                <option value="pharmacy" name="pharmacy">Pharmacy</option>
                <option value="bike" name="bike">Bike Repair Centre</option>
                <option value="pan" name="pan">Pan Card Dealer  </option>
                <option value="petrol" name="petrol">Petrol Pumps</option>
                <option value="transport" name="transport">Transport</option>
                <option value="ca" name="ca">CA</option>
                <option value="carrepair" name="carrepair">Car Repair Centre</option>
							  <option>Others</option>
                     </select>
                     <label class="error" id="select_error" style="color:#FC2727;font-family:times of new roman;"><b> Warning : You have to Select One Item.</b></label><td>		
                     <input type="text" name="title" placeholder="Title" required="required"/>
		             <input type="text" name="url" placeholder="Company URL" required="required"/>
					 <input type="text" name="location" placeholder="Location" required="required"/>
					<textarea name="description" placeholder="Description" required="required"></textarea>
					<input type="file" name="file" value="Valid ID Proof" required="required"/>
					<input type="text" name="urname" placeholder="Your Name" required="required"/>

		            <input type="number"   ng-controller="Democtrl"  name="number" placeholder="Your Mobile No" required="required" ng-class="{ 'has-error' : frm.number.$invalid && !frm.number.$pristine }" ng-model="contact"  ng-maxlength="10" ng-minlength="10" required="true"/>
		             <span ng-show="frm.number.$error.maxlength && frm.number.$dirty" style="color:red;font-family:times of new roman;">Wrong number</span>
		             <span ng-show="frm.number.$error.minlength && frm.number.$dirty" style="color:red;font-family:times of new roman;">Wrong number</span>
                          <span ng-show="frm.number.$error.required && frm.number.$dirty" style="color:red;font-family:times of new roman;">Number is required</span>

		            <input type="email" name="emailadd" placeholder="Your Email Address" required="required"/>
					<input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="submit">
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