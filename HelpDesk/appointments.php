<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//session_start();

require("studvalidate.php");
if (!isset($_SESSION['loggedin'])){ 
    header('Location: studentlogin.php');
    exit();
} 

include "connectdb.php";

if(isset($_POST['submit'])) {
    // Retrieve form data
    $app_msg = $_POST['app_msg'];
    $stud_id = $_SESSION['stud_id']; // Assuming you have a session variable for student ID
    $department_id = $_POST['department']; // Assuming you have this in your form
    $teachersname = $_POST['Teachers']; // Assuming you have this in your form
    $staff_reply = "";
    $reply_date = "0000-00-00"; // Assuming it's initially empty

    // Fetch staff ID based on teacher's name
    $sql_teacher_id = "SELECT teacher_id FROM teachers WHERE teachername = '$teachersname'";
    $result_teacher_id = $dbhandle->query($sql_teacher_id);
    if ($result_teacher_id->num_rows > 0) {
        $row_teacher_id = $result_teacher_id->fetch_assoc();
        $staff_id = $row_teacher_id['teacher_id'];

        // Insert into database
    $sql = "INSERT INTO appointment (app_msg, stud_id, Department_id, staff_id, teachername, staff_reply, reply_date) 
        VALUES ('$app_msg', '$stud_id', '$department_id', '$staff_id', '$teachersname', '$staff_reply', '$reply_date')";

        
        if ($dbhandle->query($sql) === TRUE) {
            echo "<script>alert('New Appointment details sent  Succesfully')</script>";
    echo "<script>window.open('studpanel.php','_self')</script>";
}
     else {
            echo "Error: " . $sql . "<br>" . $dbhandle->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
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
</head>
<body>

    <div class="col-md-3">
    <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/Logo.png" width="300px" alt=""></a>
                      
                    
                    
                    </div>

</div>
<center>
<div class="col-md-6">
    <div class="card" >
        <div class="card-body" style="background-color: #000000; color: white; text-align: center;">
            <h2>Book an Appointment</h2>
            <form method="POST" action="">
                <label>Your StudentID:</label>
                <input type="number" id="stud_id" name="stud_id" required><br><br>
                <label>Department</label>
                <select name="department" id="department-list" class="form-control">
                    <option value="">Select Department</option>
                    <?php
                    $sql1 = "SELECT * FROM Department";
                    $results = $dbhandle->query($sql1);
                    while ($rs = $results->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $rs["Departmentid"]; ?>"><?php echo $rs["Departmentname"]; ?></option>
                        <?php
                    }
                    ?>
                </select><br>
                <label>Teacher:</label>
                <select id="teacher-list" name="Teachers" class="form-control">
                    <option value="">Select Teacher</option>
                    <?php
                    $sql = "SELECT * FROM teachers";
                    $result = $dbhandle->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["teachername"] . "'>" . $row["teachername"] . "</option>";
                        }
                    }
                    ?>
                </select><br>
                <label>Message:</label><br>
                <textarea id="app_msg" name="app_msg" rows="4" cols="50" required></textarea><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</center>

    
    <!--JavaScript links -->

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

    });

    </script> > -->

</body>
</html>
