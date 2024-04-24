<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['studcomp'])){
    require('cons.php');
    require('studpanel.php');
    $var1 = $_SESSION['name'];
    $var2 = $_SESSION['id'];
    $department = $_POST['department'];
    $msg = $_POST['msg'];   
    $staff = $_POST['Teachers'];
    $subject = $_POST['subject'];
    $reply_date = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO complain (subject, enq_msg, staff_id, stud_id, dept, com_date, staff_reply, reply_date) VALUES('$subject', '$msg', '$staff', '$var2', '$department', '$reply_date', '', '$reply_date')";


    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('New Complaint sent Successfully')</script>";
        echo "<script>window.open('studpanel.php','_self')</script>";
    } else {
        echo "<script>alert('Sorry, an error occurred while submitting the complaint')</script>";
    }
}
?>
