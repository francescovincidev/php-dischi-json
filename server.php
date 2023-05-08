<?php

$dischi_string = file_get_contents("dischi.json");

$dischi_array = json_decode($dischi_string, true);


// Preparazione della risposta
$response = [
    "results" => $dischi_array,
    "success" => true
];
header('Content-Type: application/json');
echo json_encode($response);
