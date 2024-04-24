<?php 

require('cons.php');
if(isset($_POST['eventreg'])){
    $name = $_POST['name'];
	$dept = $_POST['dept'];
	$presenter = $_POST['presenter'];
	$venue = $_POST['venue'];
	$date = $_POST['date'];
	$time = $_POST['time'];	
	$target = "img/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name']; 
	 
	 move_uploaded_file($_FILES['image']['tmp_name'], $target);
	
$sql = "INSERT INTO event VALUES(NULL, '$name', '$dept', '$presenter', '$venue', '$date', '$time', '$target')";
$result = mysqli_query($conn, $sql);
 /*if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 	echo "image uploaded";
 }else{
 	echo "failed to upload image";
 }*/
if ($result) {
	echo "<script>alert('New Event Registed Succesfully')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item" active style="background-color: #FCAE30 ; color: white; border-color: #06F2F8;"><h3 align="center">Actions</h3>
				<a href="adminpanel.php" class="list-group-item action">Registeration for Staff</a>
				<a href="studreg.php" class="list-group-item action">Registeration for Student</a>
				<a href="viewevent.php" class="list-group-item action">View Events</a>
				<a href="logout.php" class="list-group-item action">Log Out</a>
				</div>
			</div>
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #FCAE30; color: white; text-align: center;";>
				<div class="dropdown">
				<h5>New Event Deatails </h5> </div></div>
				<div class="card-body" >
					<form class="form-group" method="POST" enctype="multipart/form-data">
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
		<div class="col-md-1">
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function(){
    $('#time').combodate({
        firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
        minuteStep: 1
    });  
});
</script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
				  Swal.fire({
				  title: 'Welcome Admin',
				  text: 'Enjoy your operations',
				  imageUrl: 'images/logo.jpg',
				  imageWidth: 200,
				  imageHeight: 100,
				  imageAlt: 'Custom image',
				  animation: false
				})
	});

</script> > -->
</body>
</html>