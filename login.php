<?php
// Establish database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Perform SQL query
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Check if login is successful
if ($result->num_rows > 0) {
    // Login successful
    echo "Login successful!";
} else {
    // Login failed
    echo "Invalid username or password.";
}

$conn->close();
?>
