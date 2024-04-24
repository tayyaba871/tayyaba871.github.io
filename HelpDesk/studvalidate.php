<?php 
 session_start();
require('cons.php');

if(isset($_POST['loginsubmit'])){
    
    $username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM student WHERE stud_id = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	$final = mysqli_num_rows($result);

	if($final > 0){
		while ($row=mysqli_fetch_array($result)) {
			$_SESSION['loggedin'] = TRUE;
     	 $_SESSION['name'] =  $row['stud_name'];
     	 $_SESSION['id'] =  $row['stud_id'];
        header("Location:studpanel.php");
     
 }
	}else{
		echo "<script>alert('Please enter your correct details')</script>";
		echo "<script>window.open('studentlogin.php','_self')</script>";
		
	}
}


?>

