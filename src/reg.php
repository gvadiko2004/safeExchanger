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
        
        // Отправка письма
$to = $login;
$subject = "🎉 Успешная регистрация";
$message = "
<html>
<head>
    <style>
        /* Общие стили */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: rgb(95, 207, 229);
            font-size: 32px;
            margin: 20px 0;
            text-align: center;
        }
        p {
            color: #1f1f1f;
            font-size: 18px;
            margin-bottom: 12px;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 14px 28px;
            background-color: rgb(95, 207, 229);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
            margin: 20px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        .btn:hover {
            background-color: rgb(95, 207, 229);
        }
        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 30px;
        }
        .footer a {
            color: rgb(95, 207, 229);
            text-decoration: none;
        }

        img {
            max-width: 120px;
            margin: 0 auto;
            display: block;
            width: max-content;
        }

        /* Адаптивность */
        @media (max-width: 600px) {
            h2 {
                font-size: 20px; /* Уменьшаем размер заголовка на мобильных */
            }
            p {
                font-size: 12px; /* Уменьшаем шрифт параграфов на мобильных */
            }
            .btn {
                padding: 12px 24px;
                font-size: 14px; /* Уменьшаем шрифт кнопки */
                font-weight: 600;
                margin: 15px 0 0 0;
            }
            .footer {
                font-size: 12px;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class='container'>
    <img src='https://i.postimg.cc/kGyny36Y/logo.png' alt='EliteRubex'>
    <h2>Поздравляем с успешной регистрацией!</h2>
    <p>Вы успешно зарегистрировались на нашем сайте! Чтобы завершить процесс регистрации и начать использовать все возможности нашего сервиса, пожалуйста, подтвердите свою учетную запись.</p>

    <p style='font-weight: bold;'>Для этого нажмите на кнопку ниже:</p>

    <p>
        <a href='https://eliterubex.com/login.html' class='btn'>Перейти к входу</a>
    </p>

    <p class='footer'>Если у вас возникли вопросы, пожалуйста, не стесняйтесь <a href='https://eliterubex.com'>обратиться в нашу службу поддержки</a>.</p>
</div>

</body>
</html>";

// Заголовки письма
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: eliterubex@eliterubex.com" . "\r\n";

// Отправка письма
mail($to, $subject, $message, $headers);



        // Отправляем JSON-ответ
        echo json_encode([
            "success" => true, 
            "message" => "На вашу почту $login отправлено письмо для подтверждения регистрации!", 
            "type" => "success",
            "redirect" => "#!"
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
