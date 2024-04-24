<?php
session_start();
require("cons.php"); // Assuming this file contains your database connection

// Check if the login form is submitted
if(isset($_POST['submit'])) {
    // Retrieve email and password from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the email and password (you can use your existing validation logic)

    // Assuming you have a function to authenticate the user
    if(authenticateUser($email, $password)) {
        // If authentication is successful, fetch the student's ID from the database
        $sql = "SELECT stud_id FROM student WHERE email = ?"; // Change 'email' to your actual column nam
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($student_id);
        $stmt->fetch();
        $stmt->close();

        // Set the student ID to the session variable
        $_SESSION['student_id'] = $student_id;

        // Redirect the user to the main page
        header('Location: main_page.php');
        exit();
    } else {
        // If authentication fails, display an error message
        echo "Invalid email or password";
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
            background-image: url('img/bg student.png');
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
    <center>
    <div class="container container-form">
        <div class="card">
            <div class="card-body" style="background-color: #000000; color: white; text-align: center;">
                <h5>Update My Profile</h5>
            </div>
            <div class="card-body">
                <form class="form-group" action="studpanel.php" method="POST" enctype="multipart/form-data">  
                    <label>Fullname</label>
                    <input type="text" name="fullname" class="form-control" value="<?php echo isset($stud_name) ? $stud_name : ''; ?>" required><br>
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control" value="<?php echo isset($gender) ? $gender : ''; ?>" required><br>
                    <label>Department</label>
                    <input type="text" name="department" class="form-control" value="<?php echo isset($dept) ? $dept : ''; ?>" required><br>
                    <label>Phone Number</label>
                    <input type="text" name="number" class="form-control" value="<?php echo isset($phone_number) ? $phone_number : ''; ?>" required><br>
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($email) ? $email : ''; ?>" required><br>
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo isset($password) ? $password : ''; ?>" required><br>
    
                    <center> <input type="submit" name="update" value="Update Details" class="btn btn-warning"></center>
                </form>
            </div>
        </div>
    </div>
    </center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
