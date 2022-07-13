<?php 

	//include header file
	include ('include/header.php');


?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select place --</option>
	<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup><option value="Amaravati" >Amaravati</option>
	<optgroup title="Arunachal Pradesh" label="&raquo; Arunachal Pradesh"></optgroup><option value="Itanagar" >Itanagar</option>
	<optgroup title="Assam" label="&raquo; Assam"></optgroup><option value="Dispur" >Dispur</option>
	<optgroup title="Bihar" label="&raquo; Bihar"></optgroup><option value="Patna" >Patna</option>
	<optgroup title="Chhattisgarh" label="&raquo; Chhattisgarh"></optgroup><option value="Raipur" >Raipur</option>
	<optgroup title="Goa " label="&raquo; 	Goa"></optgroup><option value="Panaji" >Panaji</option>
	<optgroup title="Gujarat " label="&raquo; Gujarat"></optgroup><option value="Gandhinagar" >Gandhinagar</option>
	<optgroup title="Haryana" label="&raquo; 	Haryana"></optgroup><option value="Chandigarh" >Chandigarh</option>
	<optgroup title="Himachal Pradesh " label="&raquo; Himachal Pradesh"></optgroup><option value="Shimla" >Shimla</option>
	<optgroup title="Jammu and Kashmir" label="&raquo; Jammu and Kashmir "></optgroup><option value="Srinagar" >Srinagar</option>
	<optgroup title="Jharkhand " label="&raquo; Jharkhand"></optgroup><option value="Ranchi" >Ranchi</option>
	<optgroup title="Karnataka" label="&raquo; Karnataka"></optgroup><option value="Bengaluru" >Bengaluru</option>
	<optgroup title="Kerala " label="&raquo; Kerala"></optgroup><option value="Thiruvananthapuram" >Thiruvananthapuram</option>
	<optgroup title="Madhya Pradesh" label="&raquo;Madhya Pradesh"></optgroup><option value="Bhopal" >Bhopal</option><optgroup title="Maharashtra " label="&raquo;Maharashtra "></optgroup><option value="Mumbai" >Mumbai</option><optgroup title="Manipur " label="&raquo; Manipur"></optgroup><option value="Imphal" >Imphal</option>
	<optgroup title="Meghalaya " label="&raquo; Meghalaya"></optgroup><option value="Shillong" >Shillong</option>
	<optgroup title="Mizoram " label="&raquo; Mizoram"></optgroup><option value="Aizawl" >Aizawl</option>
	<optgroup title="Nagaland " label="&raquo;Nagaland "></optgroup><option value="	Kohima" >Kohima</option>
	<optgroup title="Odisha " label="&raquo; Odisha"></optgroup><option value="Bhubaneswar" >Bhubaneswar</option>
	<optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Chandigarh" >Chandigarh</option>
	<optgroup title="Rajasthan" label="&raquo;Rajasthan"></optgroup><option value="Jaipur" >Jaipur</option>
	<optgroup title="Sikkim" label="&raquo;Sikkim"></optgroup><option value="Gangtok" >Gangtok</option>
	<optgroup title="Tamil Nadu " label="&raquo; Tamil Nadu"></optgroup><option value="Chennai" >Chennai</option>
	<optgroup title="Telangana" label="&raquo;Telangana"></optgroup><option value="Hyderabad" >Hyderabad</option>
	<optgroup title="Tripura" label="&raquo;Tripura"></optgroup><option value="Agartala" >Agartala</option>
    <optgroup title="Uttar Pradesh" label="&raquo;Uttar Pradesh"></optgroup><option value="Lucknow" >Lucknow</option>
    <optgroup title="Uttarakhand" label="&raquo;Uttarakhand"></optgroup><option value="Dehradun" >Dehradun</option>
    <optgroup title="West Bengal" label="&raquo;West Bengal"></optgroup><option value="Kolkata" >Kolkata</option>
</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<form method="POST"action="donor.php">
								<!--<a button type="submit" class="btn btn-lg btn-danger"onclick href="donor.php">Search</a></button>-->
								<a button type="submit" href="donor.php"class="btn btn-lg btn-danger">Search</a></button>
							</form>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							The most common blood group to the rarest, the site has a huge database of blood donors. So if you need blood, it's a good place to turn to. It's simple. It's effective. It's Free. It can match you with a donor near you in minutes. And you can save the life of a loved one. You can also Sign up as a donor at the site and save the life of someone else's loved one. Pass the message and let's build a community that cares !
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									 Saving and improving lives in our community with safe and reliable blood and innovative cell therapies.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To generate awareness on Blood Donation and its significance in saving lives during emergencies particularly during Obstetric emergencies and accidents.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood, by providing innovative hemotherapy services, and by promoting research and education programs in transfusion medicine.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>