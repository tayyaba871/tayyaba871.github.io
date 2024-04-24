<?php 

require('cons.php');
if(isset($_POST['register'])){
    
    $name = $_POST['fullname'];
	$phone = $_POST['number'];
	$email = $_POST['email'];
	$cpassword = $_POST['cpassword'];
    $password = $_POST['password'];	
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    if($password == $cpassword){
	
$sql = "INSERT INTO users (id,  name, address, gender, phone_number, email, $username, password) VALUES(NULL, '$name', '$address', '$gender', 'phone', '$email', '$username', '$password')";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('New Student Registed Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "<script>alert('Sorry Password do not match')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
}
}


?>