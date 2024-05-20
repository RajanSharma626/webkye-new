<?php
// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ("../includes/conn.php");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO contact_form (name, phone, email, subject, message) VALUES ('$name', '$phone', '$email', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "success";

        // Send email
        // $to = "info.webkye@gmail.com"; // Replace with your email address
        // $email_subject = "New Contact Form Submission: " . $subject;
        // $email_body = "You have received a new message from the contact form on Webkye.\n\n" .
        //     "Here are the details:\n" .
        //     "Name: $name\n" .
        //     "Phone: $phone\n" .
        //     "Email: $email\n" .
        //     "Subject: $subject\n" .
        //     "Message:\n$message";
        // $headers = "From: no-reply@example.com\n"; // Replace with a valid email address
        // $headers .= "Reply-To: $email";

        // mail($to, $email_subject, $email_body, $headers);

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
