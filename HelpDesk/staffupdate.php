 <?php

    require('cons.php');
	require('staffvalidate.php');	
	$var1 ='';
	$var1 = $_SESSION['ID'];
	$sql = "SELECT * FROM staff WHERE ID = $var1";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
	while ($row=mysqli_fetch_array($result)) {
	$name =  $row['fullname'];
	$phone = $row['phone_number'];
	$email = $row['email'];
    //$designation = $row['designation'];
	//$department = $row['department'];
    //$profile = $row['profile'];
	$image =   $row['image'];
	$password =   $row['password'];

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
            margin: 0;
            padding: 0;
        }
        .container-logo {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
        }
        .container-form {
            margin: auto;
            max-width: 500px; /* Adjust this value based on your design */
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container-logo">
					<a class="navbar-brand logo_h" href="index.html"><img src="img/Logo.png" width="300px" alt=""></a>
    </div>

    <div class="container container-form">
        <div class="card">
            <div class="card-body" style="background-color: #000000; color: white; text-align: center;">
                <h5>Update My Profile</h5>
            </div>
            <div class="card-body">
                <form class="form-group" action="updatestaff_process.php" method="POST" enctype="multipart/form-data">  
                    <label>Fullname</label>
                    <input type="text" name="fullname"  class="form-control" value="<?php echo $name; ?>" required><br>
                    <label>Phone Number</label>
                    <input type="text" name="number"  class="form-control" value="<?php echo $phone; ?>" required><br>
                    <label>Email</label>
                    <input type="text" name="email"  class="form-control" value="<?php echo $email; ?>" required><br>
                    <label>Password</label>
                    <input type="text" name="password"  class="form-control" value="<?php echo $password; ?>" required><br>
                    
                    <center> <input type="submit" name="update" value="Update Details" class="btn btn-warning"></center>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
