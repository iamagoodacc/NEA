<?php

// set the content type to JSON
header('Content-Type: application/json');

// Get the raw POST data
$rawData = file_get_contents('php://input');

// Decode the JSON data
$data = json_decode($rawData, true);

// Check if the JSON data is properly decoded
if (json_last_error() === JSON_ERROR_NONE) {
    $email = $data['email'];
    $password = $data['password'];

    // process the data (e.g., check credentials, authenticate user)
    $response = [
        'status' => 'success',
        'message' => 'Data received and processed successfully',
    ];

    $responseType = 'text';

    // send the response back to the client
    if ($responseType === 'json') {
        // Set header to return JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } elseif ($responseType === 'text') {
        // Set header to return plain text response
        header('Content-Type: text/plain');
        echo "Status: success\n";
        echo "Message: Data received and processed successfully\n";
    } else {
        // Default to JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} else {
    // handle JSON decoding errors
    $response = array('status' => 'error', 'message' => 'Invalid JSON data.');
    echo json_encode($response);
}
