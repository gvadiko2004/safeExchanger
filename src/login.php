<?php
require_once __DIR__ . '/helpers.php';
session_start();

header('Content-Type: application/json'); // Указываем JSON-ответ

// Получаем данные из формы
$login = isset($_POST['email']) ? trim($_POST['email']) : null;
$password = isset($_POST['password']) ? trim($_POST['password']) : null;

// Проверка, что email и пароль введены
if (!$login || !$password) {
    echo json_encode(["success" => false, "message" => "Введите email и пароль!"]);
    exit;
}

// Подключаемся к базе данных
$connect = getDB();
if (!$connect) {
    echo json_encode(["success" => false, "message" => "Ошибка подключения к базе данных!"]);
    exit;
}

// Проверяем, существует ли пользователь
$stmt = $connect->prepare("SELECT * FROM `users` WHERE `email` = ?");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['email'] = $login;

        echo json_encode(["success" => true, "redirect" => "../user-panel.php"]);
        exit;
    } else {
        echo json_encode(["success" => false, "message" => "Неверный логин или пароль!"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Неверный логин или пароль!"]);
}
?>
