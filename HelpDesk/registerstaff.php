<?php include "connectdb.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt="" align="left"></a>
                      
					
					
					</div>

</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #3498DB ; color: white; border-color: #06F2F8;"><h3 align="center">Registrations</h3>
					<a href="" class="list-group-item action">Register Staff</a>
					<a href="studreg.php" class="list-group-item action">Register Student</a>
					<a href="addevent.php" class="list-group-item action">Add Event</a>
					
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #3498DB ; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					<a href="staff_details.php" class="list-group-item action">View Staff Details</a>
					<a href="viewcomp.php" class="list-group-item action">View Complaints</a>
					<a href="viewevent.php" class="list-group-item action">View Events</a>
				</div>
			</div>
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #F9A825; color: white; text-align: center;";>
				<div class="dropdown">
				<h5>Staff Registration </h5> </div></div>
				<div class="card-body" >
					<form class="form-group" action="staffreg.php" method="POST" enctype="multipart/form-data">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" required>
						<label>Phone Number</label>
						<input type="number" name="number" class="form-control" required>
						<label>Email</label>
						<input type="email" name="email" class="form-control" required="number"><br>
						<label>Department ID</label>
						<select name="department" id="department-list" class="form-control"  onChange="getTeacher(this.value);">
		<option value="">Select Department</option>
		<?php
		$sql1="SELECT * FROM Department";
         $results=$dbhandle->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["Departmentid"]; ?>"><?php echo $rs["Departmentname"]; ?></option>
		<?php
		}
		?>
		</select><br>

						<label>Password</label>
						<input type="password" name="password" class="form-control" required><br>

						<label>Image</label>
						<input type="file" name="image" class="form-control" required><br>
						<center> <input type="submit" name="staffreg" value="Register Staff" class="btn btn-primary"></center>

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