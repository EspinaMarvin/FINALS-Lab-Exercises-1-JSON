<?php
header('Content-Type: application/json');

    $profile = [
        "id" => 1,
        "name" => "Marvin Espina",
        "email" => "marvinespina@gmail.com",
        "status" => "active"
    ];

    echo json_encode($profile);
?>
