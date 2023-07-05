<?php
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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Проверка, что пользователь ввел все необходимые данные
    if (empty($username) || empty($email) || empty($password)) {
        echo 'Пожалуйста, заполните все поля формы регистрации.';
        exit;
    }

    // Проверка корректности введенного email'а
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Пожалуйста, введите корректный адрес электронной почты.';
        exit;
    }

    // Защита от SQL-инъекций с использованием подготовленных выражений
    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Пользователь с таким именем пользователя или email'ом уже существует
        echo 'Пользователь с таким именем пользователя или адресом электронной почты уже существует.';
        exit;
    }

    // Вставка нового пользователя в базу данных
    $stmt = $connection->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    // Регистрация успешна
    echo 'Регистрация успешна!';

    $stmt->close();

    // Перенаправление на страницу profile.php
    header("Location: /main.php");
    exit();
}

$connection->close();
?>
