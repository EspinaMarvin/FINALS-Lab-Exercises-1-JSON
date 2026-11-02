<?php
    $input_data = file_get_contents('php://input');

    $received = json_decode($input_data, true);

    echo "Username: " . $received['username'] . "<br>";
    echo "Password: " . $received['password'];
?>
