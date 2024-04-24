<?php 

require('cons.php');
if(isset($_POST['studreg'])){
    $id = $_POST['id'];
    $name = $_POST['fullname'];
	$phone = $_POST['number'];
	$email = $_POST['email'];
	$department = $_POST['department'];
    $password = $_POST['password'];	
    $gender = $_POST['gender'];
	
$sql = "INSERT INTO student (stud_id, stud_name, gender, dept, phone_number, email, password) VALUES('$id', '$name', '$gender', '$department', 'phone', '$email', '$password')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Student Registed Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}
}


?>