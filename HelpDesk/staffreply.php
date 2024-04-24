<?php
                    require('cons.php');
				    require('staffvalidate.php');	
				    $var2 ='';
				    $var2 = $_SESSION['ID'];
				
				    $sql = "SELECT * FROM complain WHERE staff_id = $var2 ";
				     $result = mysqli_query($conn, $sql);
				     if(mysqli_num_rows($result) > 0){
				     while ($row=mysqli_fetch_array($result)) {
				       $subject = $row['subject'];
				       $msg =  $row['enq_msg'];
				       $id = $row['stud_id'];
				       $department = $row['dept'];
								       }
								   }else{
				      echo "<script>alert('The record cant be found')</script>";
				     // echo "<script>window.open('doctor_details.php', '_self')</script>";
    }

        
?>


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
                   


           <h1>WELLCOME <?php echo $var2 ?> </h1>


<div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #F9A825 ; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="" class="list-group-item">Add Event</a>
					<a href="" class="list-group-item">Add Solution</a>
					<a href="" class="list-group-item">Business Dept</a>
					<a href="" class="list-group-item">IT Issues</a>
					<a href="" class="list-group-item">Account Issues</a>
					<a href="" class="list-group-item">Administrative/Registrer</a>
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #F9A825 ; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					<a href="staffcomp.php" class="list-group-item action">View Student Complaints</a>
					<a href="" class="list-group-item action">View My Appointments</a>
					<a href="" class="list-group-item action">View Staff Details</a>

				</div>
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #3498DB; color: white; text-align: center;";>
				
                      

				<h5>Respond to Student Enquiry </h5></div>
				<div class="card-body" >
					<form class="form-group" action="staffreply_process.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Subject</label>
						<input type="text" name="subject"  class="form-control" value="<?php echo $subject; ?>" readonly ><br>

					 <label>Student Message</label>
						<input type="text" name="msg"  class="form-control" value="<?php echo $msg; ?>" readonly><br>

					<label>Student Name</label>
						<input type="text" name="studname"  class="form-control" value="<?php echo $id; ?>" readonly><br>
					<label>Department</label>
						<input type="text" name="department"  class="form-control" value="<?php echo $department; ?>" readonly><br>
					
					<label>Staff Reply</label>
						<input type="text" name="reply"  class="form-control" value="" required=""><br>
					
                     
					
						<center> <input type="submit" name="staff_reply" value="Reply Complain" class="btn btn-primary"></center>

					</form>
				</div>
			</div>
		</div>
<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #F9A825 ; color: white; border-color: #06F2F8;"><h3 align="center">Preferences</h3>
					
                    <a href="staffupdate.php" class="list-group-item">Add Event</a>
					<a href="" class="list-group-item">Add Solution</a>
					<a href="" class="list-group-item">Business Dept</a>
					<a href="" class="list-group-item">IT Issues</a>
					<a href="" class="list-group-item">Account Issues</a>
					<a href="" class="list-group-item">Administrative/Registrer</a>
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #F9A825 ; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					<a href="staffcomp.php" class="list-group-item action">View Student Complaints</a>
					<a href="" class="list-group-item action">View My Appointments</a>
					<a href="" class="list-group-item action">View Staff Details</a>

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