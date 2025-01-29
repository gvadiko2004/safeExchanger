<?php

require_once __DIR__ . '/helpers.php';

// Вытаскиваем данные из input, внутри которого есть атрибуты "name"
$login = $_POST['login'];
$password = $_POST['password'];

// Подключаемся к базе данных
$connect = getDB();

// Проверяем, существует ли уже пользователь с таким логином
$sqlCheck = "SELECT * FROM `users` WHERE `login` = '$login'";
$result = $connect->query($sqlCheck);

if ($result->num_rows > 0) {
    // Если такой логин уже есть, выводим сообщение
    echo "Уже зарегистрирован!";
} else {
    // Если логин уникальный, добавляем нового пользователя
    $sqlInsert = "INSERT INTO `users` (login, password) VALUES ('$login', '$password')";
    if ($connect->query($sqlInsert) === TRUE) {
        // echo 'Регистрация прошла успешно!';

        header("Location: /login.html");
    } else {
        echo "Ошибка регистрации!";
    }
}

?>
