
<?php
//session_start();
require("studvalidate.php");
if (!isset($_SESSION['loggedin'])){ 
	//echo "logged out";
	header('Location: studentlogin.php');
	exit();
} 
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style> 
     body {
        background-image: url('img/bg student.png');
        background-size: cover; 
        background-position: center; 
        background-color: #dfeaf3;
	}
	</style>
	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "connectdb.php"; ?>
<script>
//function getTeacher(val) {
	//$.ajax({
	//type: "POST",
	//url: "get_state.php",
	//data:'Departmentid='+val,
	//success: function(data){
		//$("#teacher-list").html(data);
	///}
	//});
//}

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
					
					<a class="navbar-brand logo_h" href="index.html"><img src="img/Logo.png" width="300px" alt=""></a>
                      
					
					
					</div>

</div>
		
           <div class="row">
				<div class="col-md-3">
				<div class="list-group">
					<class="list-group-item" active style="background-color: #000000 ; color: white; border-color: #06F2F8;"><h3 align="center"> Actions</h3>
					<a href="prot.php" target="_top" class="list-group-item">Protocols</a>
                    <a href="mailto:receptionist@bolton.co.uk.com?Subject=Student%20Complain" target="_top" class="list-group-item">Receptionist Email</a>
					<a href="mailto:ITfaisal@gmail.com?Subject" target="_top" class="list-group-item">IT Problems Email us.</a>
					<a href="mailto:Accountant@gmail.com?Subject" target="_top" class="list-group-item">Account Issues Email us.</a>
					<a href="mailto:Gemmacena@gmail.com?Subject" target="_top" class="list-group-item">Administrative/Registrer Email us.</a>
					<a href="staffcompreply.php" class="list-group-item action">View Staff Complain reply</a>
					<a href="viewevent.php" class="list-group-item action">View Events</a>
					<a href="appointments.php" class="list-group-item action">Create Appointments</a>
					<a href="studupdate.php" class="list-group-item">Update profile</a>
					<a href="logout.php" class="list-group-item action">Log Out</a>
                   
                     </div>
					<hr>
					
			</div>
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-body" style="background-color: #000000; color: white; text-align: center;";>
				
				<h5>Student Complaint </h5></div>
				<div class="card-body" >
					<form class="form-group" action="comp_pros.php" method="POST" enctype="multipart/form-data">
						<label>Subject</label>
						<input type="text" name="subject"  class="form-control" required><br>
					
					 <label>Complaint/Enquiry Message</label>
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
						
		<label style="font-size:20px" >Teacher:</label>
<select id="teacher-list" name="Teachers" class="form-control">
<option value="">Select Teacher</option>
<?php
$sql = "SELECT * FROM teachers";
$result = $dbhandle->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["teacher_id"] . "'>" . $row["teachername"] . "</option>";
    }
}
?>
</select><br>

						<center> <input type="submit" name="studcomp" value="Submit Complaint" class="btn btn-warning"></center>

					</form>
				</div>
			</div>
		</div>

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