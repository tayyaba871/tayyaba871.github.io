<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "connectdb.php"; ?>
<script>
function getTeacher(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'Departmentid='+val,
	success: function(data){
		$("#teacher-list").html(data);
	}
	});
}

function showMsg()
{

	$("#msgC").html($("#department-list option:selected").text());
	$("#msgS").html($("#teacher-list option:selected").text());
	return false;
}
</script>

<body>
	<!<div class ="jumbotron" id="cs1"> </div>

	<div class="col-md-3">
	<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="index.html"><img src="img/uob.png" alt="" align="left"></a>
                      
					
					
					</div>

</div>
		<div class="container-fluid">
                   <?php
                    //session_start();
                    require('studvalidate.php'); 
                       $var1 ='';
                       $var1 = $_SESSION['name'] ;
			           $var2 ='';
                       $var2 = $_SESSION['id'] ;
                    ?>


           <h1>WELLCOME <?php echo $var2 ?> </h1>

           <div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item active" style="background-color: #F9A825 ; color: white; border-color: #06F2F8;"><h3 align="center">Complaint</h3>
					
                    <a href="mailto:cmrdmaihula@gmail.com?Subject=Student%20Complain" target="_top" class="list-group-item">General complaint/Receptionist</a>
					<a href="mailto:shemimf@gmail.com?Subject=Student%20Complain" target="_top" class="list-group-item">Computing Dept</a>
					<a href="mailto:shemimf@gmail.com?Subject=Student%20Complain" target="_top" class="list-group-item">Business Dept</a>
					<a href="mailto:cmrdmaihula@gmail.com?Subject" target="_top" class="list-group-item">IT Issues</a>
					<a href="mailto:cmrdmaihula@gmail.com?Subject" target="_top" class="list-group-item">Account Issues</a>
					<a href="mailto:cmrdmaihula@gmail.com?Subject" target="_top" class="list-group-item">Administrative/Registrer</a>
                    
                     </div>
					<hr>
					<div class="list-group">
					<class="list-group-item active" style="background-color: #F9A825 ; color: white; border-color: #06F2F8;"><h3 align="center">View Details</h3>
					<a href="staff_details.php" class="list-group-item action">View Staff Details</a>
					<a href="" class="list-group-item action">View My Appointments</a>
					<a href="" class="list-group-item action">View Staff Details</a>
					<a href="" class="list-group-item action">View Complaints</a>
				</div>
			</div>
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color: #F9A825; color: white; text-align: center;";>
				
				<h5>Student appointment Page </h5></div>
				<div class="card-body" >
					<form class="form-group" action="comp_pros2.php" method="POST" enctype="multipart/form-data">	
					
					 <label>Enter Appointment Message</label>
						<input type="text" name="msg"  class="form-control" required><br>
                     
					<label>Department</label>
						
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
						<!--<select class="form-control" name="department">
							<option>Select...</option>
							<option>Computing</option>
							<option>Engineering</option>
							<option>Accountancy</option>
							<option>Business</option>
							<option>Law</option>
						</select><br>
-->
						
		<label style="font-size:20px" >Teacher:</label>
		<select id="teacher-list" name="Teachers" class="form-control" >
		<option value="">Select Teacher</option>
		</select>
						<center> <input type="submit" name="studcomp" value="Submit Complaint" class="btn btn-warning"></center>

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