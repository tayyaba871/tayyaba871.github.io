<?php
//session_start();
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
       $department = $row['Departmentid'];
       $profile = $row['profile'];
       $image =   $row['image']; 
       echo "<tr>
      
      <td> <img height=100px; width=100px;  src= '$image'></td>
      <td>$name</td>
      <td>$department</td>
      <td>$email</td>
      <td>$phone</td>  
        
    </tr>";
     }
}

function view_event(){
  global $conn;
     $sql = "SELECT * FROM event";
     $result = mysqli_query($conn, $sql);
     while ($row=mysqli_fetch_array($result)) {
       $name =  $row['name'];
       $presenter = $row['presenter'];
       $venue = $row['venue'];
       $date = $row['date'];
       $department = $row['department'];
       $time = $row['time'];
       $image =   $row['image']; 
       echo "<tr>
      
      <td> <img height=100px; width=100px;  src= '$image'></td>
      <td>$name</td>
      <td>$department</td>
      <td>$presenter</td>
      <td>$venue</td>  
      <td>$date</td>
      <td>$time</td>  
    </tr>";
     }
}


function view_apppointment(){
  global $conn;
  require('staffvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['name'];
   $var2 ='';
     $var2 = $_SESSION['ID'] ;
     $sql = "SELECT * FROM appointment WHERE staff_id = $var2 ";
     $result = mysqli_query($conn, $sql);
   //$final= mysqli_num_rows($result);
     if($result == true){
     while ($row=mysqli_fetch_array($result)) {
       $msg =  $row['app_msg'];
       $id = $row['stud_id'];
       $staff_id = $row['staff_id'];
       $Department_id = $row['Department_id'];
       echo "<tr>
      
      <td>$msg</td>
    <td>$id</td>
      <td>$staff_id</td>
      <td>$Department_id</td>
      <td><a href='staffappreply.php'>Reply</a></td> 
      
      
        
    </tr>";
     }
}else{
      echo "<script>alert('Sorry an error occurs')</script>";
      //echo "<script>window.open('staffpanel.php', '_self')</script>";
    }
  }




function view_staffcompreply(){
  global $conn;
  require('studvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['name'];
   $var2 ='';
     $var2 = $_SESSION['id'] ;
     $sql = "SELECT * FROM complain WHERE stud_id = $var2 ";
     $result = mysqli_query($conn, $sql);
   //$final= mysqli_num_rows($result);
     if($result == true){
     while ($row=mysqli_fetch_array($result)) {
       $msg =  $row['enq_msg'];
       //$id = $row['stud_id'];
     $subject= $row['subject'];
     //  $department = $row['dept'];
       $date = $row['com_date'];
      $staff_reply = $row['staff_reply'];
     $reply_date = $row['reply_date'];
     
       echo "<tr>
      
      
    <td>$subject</td>
    <td>$msg</td>
     
    
        
      <td>$date</td> 
    <td>$staff_reply</td>
    <td>$reply_date</td>
      
    </tr>";
     }
}else{
      echo "<script>alert('Sorry an error occurs')</script>";
      //echo "<script>window.open('staffpanel.php', '_self')</script>";
    }
  }


function view_staffappreply(){
  global $conn;
  require('studvalidate.php');
     $var1 ='';
     $var1 = $_SESSION['name'];
   $var2 ='';
     $var2 = $_SESSION['id'] ;
     $sql = "SELECT * FROM appointment WHERE stud_id = $var2 ";
     $result = mysqli_query($conn, $sql);
   //$final= mysqli_num_rows($result);
     if($result == true){
     while ($row=mysqli_fetch_array($result)) {
       $msg =  $row['app_msg'];
       //$id = $row['stud_id'];
     $stud_id= $row['stud_id'];
     //  $department = $row['dept'];
       $staff_id = $row['staff_id'];
      $staff_reply = $row['staff_reply'];
     $reply_date = $row['reply_date'];
     
       echo "<tr>
    
      <td>$msg</td>    
      <td>$stud_id</td> 
     <td>$staff_reply</td>
     <td>$reply_date</td>
      
    </tr>";
     }
}else{
      echo "<script>alert('Sorry an error occurs')</script>";
      //echo "<script>window.open('staffpanel.php', '_self')</script>";
    }
  }



   function search_staff_details(){
    global $conn;
    if(isset($_POST['search'])){

    $mail = $_POST['search'];
    $sql = "SELECT * FROM staff WHERE ID = $mail";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
      $name =  $row['fullname'];
       $phone = $row['phone_number'];
       $email = $row['email'];
       $designation = $row['designation'];
       $department = $row['designation'];
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
      echo "<script>alert('Sorry an error occurs')</script>";
      //echo "<script>window.open('doctor_details.php', '_self')</script>";
    }
      
    }
      
    }     
   
   function search_student_details(){
    global $conn;
    if(isset($_POST['search'])){

    $mail = $_POST['search'];
    $sql = "SELECT * FROM student WHERE stud_id = $mail";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
       while ($row=mysqli_fetch_array($result)) {
      $name =  $row['stud_name'];
       $phone = $row['phone_number'];
       $email = $row['email'];
       
       $department = $row['dept'];
     
       

      echo "<tr>
      <td>$name</td>
      <td>$department</td>
      <td>$email</td>
      <td>$phone</td>
       </tr>";
    }
   
    }else{
      echo "<script>alert('Sorry an error occurs.')</script>";
    }
      
    }
      
    }     

?>