<?php

// Путь к файлу JSON с логинами и паролями
$json_file = './requests/users-auth-login.json';

// Получаем данные из POST-запроса
$login = $_POST['login'];
$password = $_POST['password'];

// Читаем данные из JSON файла
$json_data = file_get_contents($json_file);

// Декодируем данные из JSON формата в ассоциативный массив PHP
$users = json_decode($json_data, true);

// Проверяем, есть ли пользователь с таким логином и паролем
if (isset($users[$login]) && $users[$login] == $password) {
    echo http_response_code(200);
} else {
    echo "error";
}

?>
