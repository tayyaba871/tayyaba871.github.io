<?php
//session_start();
require("staffvalidate.php");
if (!isset($_SESSION['loggedin'])){ 
	echo "logged out";
	header('Location: stafflogin.php');
	exit();
} 
?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style> 
     body {
        background-image: url('img/bg admin.png');
        background-size: cover; 
        background-position: center; 
        background-color: #dfeaf3;
	}
	</style>
</head>
<body>
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"><img src="img/Logo.png" width="300px" alt=""></a>
                      
					
					
					</div>

</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
			<div class="list-group">
				<class="list-group-item" active style="background-color: #000000 ; color: white; border-color: white;"><h3 align="center">Actions</h3>
					<a href="mailto:ITfaisal@gmail.com?Subject" target="_top" class="list-group-item">IT Issues Email us.</a>
					<a href="staffcomp.php" class="list-group-item action">View Student Complaints</a>
					<a href="staffapp.php" class="list-group-item action">View Student appointment</a>
					<a href="staff_details.php" class="list-group-item action">View Staff Details</a>
					<a href="staffupdate.php" class="list-group-item">Update profile</a>
               <a href="logout.php" class="list-group-item action">Log Out</a>

			</div>
		</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #000000; color: white; text-align: center;";>
				
				<h5>Register Event </h5></div>
				<div class="card-body" >
					<form class="form-group" action="viewevent.php" method="POST" enctype="multipart/form-data">
						<label>Event/Workshop Name</label>
						<input type="text" name="name" class="form-control" required>
						<label>Department</label>
						<select class="form-control" name="dept">
							<option>Select...</option>
							<option>Computing</option>
							<option>Engineering</option>
							<option>Accountancy</option>
							<option>Business</option>
							<option>Law</option>
						</select>
						<label>Presenter</label>
						<input type="text" name="presenter" class="form-control" required>						
						<label>Venue</label>
						<input type="text" name="venue" class="form-control" required="number"><br>
						<label>Date</label>
						<input type="date" name="date" class="form-control" required>
						<label>Time</label>
						<input type="time" name="time" class="form-control" required>
						<label>Image</label>
						<input type="file" name="image" class="form-control" required><br>
						<center> <input type="submit" name="eventreg" value="Register Event" class="btn btn-primary"></center>

					</form>
				</div>

			</div>
		</div>

	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>




