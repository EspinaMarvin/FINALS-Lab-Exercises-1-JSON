<?php
header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

$username = $data['fullname'] ?? 'Guest';

$response = [
    "status" => "SUCCESS!",
    "message" => "Welcome, " . $username . "!"
];

echo json_encode($response);
?>
