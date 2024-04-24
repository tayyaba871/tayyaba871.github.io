<?php

require_once('cons.php');
function get_staff_details(){
	global $conn;
     $sql = "SELECT * FROM staff";
     $result = mysqli_query($conn, $sql);
     while ($row=mysqli_fetch_array($result)) {
     	 $name =  $row['fullname'];
	     $phone = $row['phone_number'];
	     $email = $row['email'];
	     $designation = $row['designation'];
       $department = $row['department'];
       $profile = $row['profile'];
       $image =   $row['image']; 
	     echo "<tr>
      
      <td> <img height=100px; width=100px;  src= 'img/".$image."'></td>
      <td><input type='text' name='msg'  class='form-control' value='$name'></td>
      <td>$name</td>
      <td>$department</td>
      <td>$email</td>
      <td>$phone</td>  
        
    </tr>";
     }
}

function view_complaint(){
  global $conn;
  require('staffvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['name'];
	 $var2 ='';
     $var2 = $_SESSION['ID'] ;
     $sql = "SELECT * FROM complain WHERE stud_id = $var2 ";
     $result = mysqli_query($conn, $sql);
	 //$final= mysqli_num_rows($result);
     if($result == true){
     while ($row=mysqli_fetch_array($result)) {
       $msg =  $row['enq_msg'];
       $id = $row['stud_id'];
       $department = $row['dept'];
       $date = $row['com_date'];
       echo "<tr>
      
      <td>$msg</td>
      <td>$department</td>
      <td>$id</td>  
      <td>$date</td> 
      <td><a href='staffreply.php'>Reply</a></td>
      <td><td><a href='stafflogin.php'>Delete</a></td>  
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('staffpanel.php', '_self')</script>";
    }
  }



   function search_staff_details(){
    global $conn;
    if(isset($_POST['search'])){

    $mail = $_POST['search'];
    $sql = "SELECT * FROM staff WHERE email = '$mail'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
      $name =  $row['fullname'];
       $phone = $row['phone_number'];
       $email = $row['email'];
       $designation = $row['designation'];
       $department = $row['department'];
       $profile = $row['profile'];
       $image =   $row['image']; 

      echo "<tr>
      <td>$name</td>
      <td>$department</td>
      <td>$email</td>
      <td>$phone</td>
       </tr>";
    }
   
    }else{
      echo "<script>alert('The record cant be found')</script>";
      echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
    }
      
    }     
   
?>