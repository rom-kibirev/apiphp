<?php
header('Access-Control-Allow-Origin: http://localhost:3000');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $inn = $_POST["inn"];
    $jsonFile = "./requests/".$inn.".json";
    $data = file_get_contents($jsonFile);
    header('Content-Type: application/json');
    $json = json_encode($data, true);
    echo json_decode($json);
}