<?php
                    require('cons.php');
				    require('staffvalidate.php');	
				    $var2 ='';
				    $var2 = $_SESSION['ID'];
				
				    $sql = "SELECT * FROM appointment WHERE staff_id = $var2 ";
				     $result = mysqli_query($conn, $sql);
				     if(mysqli_num_rows($result) > 0){
				     while ($_row=mysqli_fetch_array($result)) {
				       $subject = $_row['app_msg'];
						$msg = $_row['staff_id'];
						$studid = $_row['stud_id'];}
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
				<class="list-group-item" active style="background-color: #000000 ; color: white; border-color: #06F2F8;"><h3 align="center">Actions</h3>
				<a href="" class="list-group-item">Add Event</a>
					<a href="mailto:ITfaisal@gmail.com?Subject" target="_top" class="list-group-item">IT Issues</a>
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

				<h5>Respond to Student Appointment  </h5></div>
				<div class="card-body" >
					<form class="form-group" action="staff_app_reply.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Message</label>
						<input type="text" name="app_msg"  class="form-control" value="<?php echo $subject; ?>" readonly ><br>

					<label>Student ID</label>
						<input type="text" name="stud_id"  class="form-control" value="<?php echo $studid; ?>" readonly><br>
						
						<label>Staff ID</label>
						<input type="text" name="staff_id"  class="form-control" value="<?php echo $msg; ?>" readonly><br>
					
					
					
					<label>Please select a following reply</label>
						<select class="form-control" name="department">
							<option>Select...</option>
							<option>Done.</option>
							<option>Will check and let you know.</option>
							<br>
							<br>
							
							<center> <input type="submit" name="staffapp_reply" value="Submit Reply" class="btn btn-warning"></center>
						
					
                     
					
						

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