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
        header("Location: portfolio.php"); // Redirect to portfolio.php
        exit(); // Ensure no further code is executed

    } else {
        // User not found
        $login_status = "Not Accepted";
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: yellowgreen;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        label {
            color: red;
            font-size: 30px;
            display: inline-block;
        }
        input {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php if ($login_status == "Accepted"): ?>
        
    <?php else: ?>
        <h2>Login form</h2>
        <form action="index.php" method="post">
            <label for="ID">ID:</label>
            <input type="text" id="ID" name="ID" required><br><br>
            <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name" required><br><br>
            <label for="dob_year">Year of Birth:</label>
            <input type="text" id="dob_year" name="dob_year" required><br><br>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required><br><br>
            <input type="submit" value="Submit">
        </form>
        <?php if ($login_status == "Not Accepted"): ?>
            <p>Not Accepted</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
