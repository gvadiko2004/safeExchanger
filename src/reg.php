<?php
require_once __DIR__ . '/helpers.php';
session_start();

// Получаем данные из формы
$login = isset($_POST['email']) ? trim($_POST['email']) : null;
$password = isset($_POST['password']) ? trim($_POST['password']) : null;
$passwordRepeat = isset($_POST['password-repeat']) ? trim($_POST['password-repeat']) : null;

// Проверка наличия email и паролей
if (!$login || !$password || !$passwordRepeat) {
    echo json_encode([
        "success" => false, 
        "message" => "Заполните все поля!", 
        "type" => "error"
    ]);
    exit;
}

// Проверка на совпадение паролей
if ($password !== $passwordRepeat) {
    echo json_encode([
        "success" => false, 
        "message" => "Пароли не совпадают!", 
        "type" => "error"
    ]);
    exit;
}

// Подключение к базе данных
$connect = getDB();
if (!$connect) {
    echo json_encode([
        "success" => false, 
        "message" => "Ошибка подключения к БД!", 
        "type" => "error"
    ]);
    exit;
}

// Проверяем, существует ли пользователь с таким email
$stmt = $connect->prepare("SELECT * FROM `users` WHERE `email` = ?");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode([
        "success" => false, 
        "message" => "Этот email уже зарегистрирован!", 
        "type" => "error"
    ]);
} else {
    // Хешируем пароль
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Добавляем пользователя
    $stmt = $connect->prepare("INSERT INTO `users` (`email`, `password`) VALUES (?, ?)");
    $stmt->bind_param("ss", $login, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['email'] = $login;

        // Отправляем JSON-ответ
        echo json_encode([
            "success" => true, 
            "message" => "Регистрация прошла успешно!", 
            "type" => "success",
            "redirect" => "../login.html"
        ]);
        exit;
    } else {
        echo json_encode([
            "success" => false, 
            "message" => "Ошибка регистрации!", 
            "type" => "error"
        ]);
    }
}
?>
