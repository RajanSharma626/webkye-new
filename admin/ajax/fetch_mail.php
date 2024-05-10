<?php
include ('../includes/connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mailId'])) {


    $mailId = mysqli_real_escape_string($conn, $_POST['mailId']);

    $sql = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `contact_form` WHERE `id` = '$mailId'"));

    $id = $sql['id'];
    $message = $sql['message'];
    $name = $sql['name'];

    $response = array(
        'id' => $id,
        'message' => $message,
        'name' => $name
    );

    // Convert the response array to JSON
    $json_response = json_encode($response);

    // Return the JSON response
    echo $json_response;
} else {
    // Handle invalid request or no mailId provided
    http_response_code(400);
    echo "Invalid request";
}
