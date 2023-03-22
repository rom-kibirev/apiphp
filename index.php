<?php
header('Access-Control-Allow-Origin: http://localhost:3000');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $path = $_SERVER['REQUEST_URI'];
    $slug = str_replace('/api/?', '', $path);
    $jsonFile = "./requests/" . $slug . ".json";

    $data = file_get_contents($jsonFile);
    header('Content-Type: application/json');
    $json = json_encode($data, true);
    echo json_decode($json);
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $filename = "./requests/". $_POST['place'];
    $content = $_POST['data'];
    if (file_exists($filename)) file_put_contents($filename, $content);
    else file_put_contents($filename, $content);

    http_response_code(200);
}
