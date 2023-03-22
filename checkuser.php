<?php

$json_file = './requests/users-auth-login.json';
$login = $_POST['login'];
$json_data = file_get_contents($json_file);
$users = json_decode($json_data, true);

if (isset($users[$login])) {
    echo http_response_code(200);
} else {
    echo json_encode('error');
}
