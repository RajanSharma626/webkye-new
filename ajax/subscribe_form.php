<?php
// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ("../includes/conn.php");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $conn->real_escape_string($_POST['email']);

    // Check if email already exists
    $check_email = $conn->query("SELECT * FROM `newsletter` WHERE `email` = '$email'");

    if ($check_email->num_rows > 0) {
        echo 'exists';
    } else {
        // Insert email into newsletter table
        $stmt = $conn->prepare("INSERT INTO `newsletter`(`email`) VALUES (?)");
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'error';
        }
        $stmt->close();
    }

    $conn->close();
}