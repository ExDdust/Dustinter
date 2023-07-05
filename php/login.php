<?php
session_start();

// Файл конфигурации базы данных
$dbHost = 'localhost';     // Хост базы данных
$dbUsername = 'root'; // Имя пользователя базы данных
$dbPassword = ''; // Пароль базы данных
$dbName = 'gamecompany'; // Имя базы данных

$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin = $_POST['is_admin'];
    $user = $_POST['username'];

    // Защита от SQL-инъекций с использованием подготовленных выражений
    $stmt = $connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Авторизация успешна

        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $user;
        // Перенаправление на страницу профиля
        header('Location: profile.php');
        exit;
    } else {
        // Ошибка авторизации
        echo 'Ошибка авторизации!';
    }
}

$connection->close();
?>
