<?php

require_once __DIR__ . '/helpers.php';

$login = $_POST['login'];
$password = $_POST['password'];

// Подключаемся к базе данных
$connect = getDB();

// Проверка данных в БД
$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";

$result = $connect->query($sql);

// Проверка наличия результатов
if ($result->num_rows > 0) {
    // Если пользователь найден
    echo 'Пользователь найден!';
} else {
    // Если пользователя с таким логином и паролем нет
    echo 'Неверный логин или пароль!';
}

// Выводим результаты (для отладки)
while ($row = $result->fetch_assoc()) {
    print_r($row); // Печатает данные пользователя
}
?>
