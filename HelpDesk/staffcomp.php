<!DOCTYPE html>
<?php include('staff_details_process.php') ?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style> 
     body {
        background-image: url('img/bg admin.png');
        background-size: cover; 
        background-position: center; 
        background-color: #dfeaf3;
      }
        h4.center-text {
            text-align: center;
        }
	</style>
</head>
<body>

<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/Logo.png" width="300px" alt=""></a>

</div>
<div class="container" style="width: 1500px; margin-top:100px";>
	<div class="card">
       <!<img src="images/admin.jpeg" class="card-img-top" width="50px" height="150px">
       
		<div class="card-body" style="background-color: #000000 ; color: white; border-color: #06F2F8;">
         <div class="row">
         <div class="col-md-3">
         <a href="staffpanel.php" class="btn btn-light">Click to go back</a></div>
		<div class="col-md-4">
		     <h4 class="center-text">Student Complaint</h4> 
		  </div>

		 <div class="col-md-5">
		 	
		 </div>
		 </div>
	</div>
		<div class="card-body">
			<table class="table table-hover">
  <thead>
    <tr>
      
      
      <th scope="col">Complaint Msg</th>
      <th scope="col">Department</th>
      <th scope="col">Student Name</th>
      <th scope="col">Complaint Date/Time</th>
      <th scope="col">Respond</th>
      
      

    </tr>
  </thead>
  <tbody>
    <?php 
      view_complaint();  
     ?>
  </tbody>
</table>
			
		</div>
	</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>