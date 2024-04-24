<?php
session_start();
require('cons.php');

if(isset($_POST['loginsubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement using prepared statements
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check the number of rows returned by the query
    $final = mysqli_num_rows($result);

    if($final == 1){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $username;
        header("Location:adminpanel.php");
        exit; // Add exit after header redirect to prevent further execution
    } else {
        echo "<script>alert('Please enter your correct details')</script>";
        echo "<script>window.open('adminlogin.php','_self')</script>";
}
}
?>