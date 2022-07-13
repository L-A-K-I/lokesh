<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option>
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
								<a button type="submit" class="btn btn-lg btn-danger"href="donor.php"id="search">Search</a></button>
								<button type="submit" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
