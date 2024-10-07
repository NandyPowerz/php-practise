<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your actual database username
$password = ""; // Replace with your actual database password
$dbname = "Nandy"; // Use the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a variable to store the login status
$login_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user = $_POST['ID'];
    $name = $_POST['Name'];
    $dob_year = $_POST['dob_year'];
    $subject = $_POST['subject'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM Person WHERE ID = ? AND Name = ? AND YEAR(dob) = ? AND subject = ?");
    $stmt->bind_param("ssss", $user, $name, $dob_year, $subject);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found
        $login_status = "Accepted";
    } else {
        // User not found
        $login_status = "Not Accepted";
    }

    $stmt->close();
}

$conn->close();
?>3