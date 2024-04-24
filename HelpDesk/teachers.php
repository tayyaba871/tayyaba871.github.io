<?php
// Database connection
$server = "localhost";
$username = "root";
$password = "";
$db = "helpdesk";
$conn = mysqli_connect($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch teachers from the database
$sql = "SELECT * FROM teachers";
$result = $conn->query($sql);

// Check if there are any teachers
if ($result->num_rows > 0) {
    // Start the dropdown menu
    echo '<select name="teacher_id" class="form-control">';
    echo '<option value="">Select Teacher</option>';

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["teacher_id"] . '">' . $row["teachername"] . '</option>';
    }

    // Close the dropdown menu
    echo '</select>';
} else {
    echo "No teachers found";
}

// Close the database connection
$conn->close();
?>
