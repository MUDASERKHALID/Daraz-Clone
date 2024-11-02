<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "darazdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $enteredUsername = $_POST["fullName"];
    $enteredPassword = $_POST["password"];

    // Perform a query to check the username and password in the database
    $sql = "SELECT * FROM signup WHERE fullName = '$enteredUsername' AND password = '$enteredPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        // Set a session variable to store the success message
        session_start();
        $_SESSION['login_message'] = 'Successfully logged in!';

        // Display an alert
        echo '<script>alert("Successfully logged in!");</script>';

        // Redirect using JavaScript after the alert is closed
        echo '<script>window.location.href = "index.html";</script>';
        exit();
    } else {
        // Login failed
        echo '<script>alert("Incorrect username or password. Please try again.");</script>';
    }
}

// Close the database connection
$conn->close();
?>
