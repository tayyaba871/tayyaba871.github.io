<?php 

require('cons.php');
require('staffvalidate.php');

if(isset($_POST['staff_reply'])){
    $var2 ='';
    $var2 = $_SESSION['ID'];
	
	
    $subject = $_POST['subject'];
	$msg = $_POST['msg'];
	$studname = $_POST['studname'];
	
	$reply = $_POST['reply'];

	$todayDate = date("Y-m-d H:i:s");
	

  $sql= "UPDATE `complain` SET `staff_reply` = '$reply', `reply_date` = '$todayDate' WHERE `complain`.`staff_id` = $var2 AND `complain`.`subject` = '$subject' AND `complain`.`stud_id` = '$studname' ";
 $result = mysqli_query($conn,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('staffpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>