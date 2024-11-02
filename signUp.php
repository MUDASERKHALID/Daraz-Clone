<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumber = $_POST['phoneNumber'];
    $verificationCode = $_POST['verificationCode'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password=$_POST['password'];
    $fullName = $_POST['fullName'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $exclusiveOffers = isset($_POST['exclusiveOffers']) ? 1 : 0;

    // Database connection
    $servername = "localhost";
    $username = "root";
    $db_password = ""; // Use a separate variable for DB password to avoid conflicts
    $dbname = "darazdb";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the table
    $sql = "INSERT INTO signup (phoneNumber, verificationCode, password, fullName, birthday, gender, exclusiveOffers)
            VALUES ('$phoneNumber', '$verificationCode', '$password', '$fullName', '$birthday', '$gender', '$exclusiveOffers')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
