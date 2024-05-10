<?php
include ('../includes/connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['MarkRead'])) {

    $mailId = mysqli_real_escape_string($conn, $_POST['mailId']);

    $sql = mysqli_query($conn, "UPDATE `contact_form` SET `status`= 1 WHERE `id` = '$mailId'");

    if ($sql) {
        $response = array(
            'success' => true
        );
        // Convert the response array to JSON
        $json_response = json_encode($response);

        // Return the JSON response
        echo $json_response;
    }
} else {
    // Handle invalid request or no mailId provided
    http_response_code(400);
    echo "Invalid request";
}