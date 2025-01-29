<?php
require_once __DIR__ . '/helpers.php';

header('Content-Type: application/json'); // JSON-ответ

$login = isset($_POST['email']) ? trim($_POST['email']) : null;
$password = isset($_POST['password']) ? trim($_POST['password']) : null;

if (!$login || !$password) {
    echo json_encode(["success" => false, "message" => "Заполните все поля!"]);
    exit;
}

$connect = getDB();
if (!$connect) {
    echo json_encode(["success" => false, "message" => "Ошибка подключения к БД!"]);
    exit;
}

// Проверяем, существует ли уже пользователь
$stmt = $connect->prepare("SELECT * FROM `users` WHERE `email` = ?");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(["success" => false, "message" => "Этот email уже зарегистрирован!"]);
} else {
    // Хешируем пароль
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Добавляем пользователя
    $stmt = $connect->prepare("INSERT INTO `users` (`email`, `password`) VALUES (?, ?)");
    $stmt->bind_param("ss", $login, $hashedPassword);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Регистрация успешна! Перенаправляем..."]);
    } else {
        echo json_encode(["success" => false, "message" => "Ошибка регистрации!"]);
    }
}
?>
