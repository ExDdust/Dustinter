<!-- <?php
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
    if (isset($_POST['login'])) {
        // Обработка авторизации
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Проверка наличия пользователя в базе данных
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            echo 'Успешная авторизация!';
        } else {
            echo 'Ошибка авторизации! Неверный email или пароль.';
        }
    } elseif (isset($_POST['register'])) {
        // Обработка регистрации
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Проверка, что пользователь с таким же email не существует
        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $checkResult = $connection->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            echo 'Пользователь с таким email уже существует!';
        } else {
            // Добавление нового пользователя в базу данных
            $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

            if ($connection->query($insertQuery) === TRUE) {
                echo 'Успешная регистрация!';
            } else {
                echo 'Ошибка регистрации: ' . $connection->error;
            }
        }
    }
}

$connection->close();
?> -->
