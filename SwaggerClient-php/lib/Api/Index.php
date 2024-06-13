<?php

header("Content-Type: application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];

switch($requestMethod) {
    case 'GET':
        $response = array(
            'status' => 'success',
            'data' => 'This is a GET request response'
        );
        break;
    case 'POST':
        $response = array(
            'status' => 'success',
            'data' => 'This is a POST request response'
        );
        break;
    default:
        $response = array(
            'status' => 'error',
            'data' => 'Invalid request method'
        );
        break;
}

echo json_encode($response);