<?php
session_start();


// Проверка, авторизован ли пользователь
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}
// var_dump($is_admin);

$is_admin = $_SESSION['is_admin'];


// Проверка, является ли пользователь администратором
if ($is_admin == 1) {
  echo 'У вас нет доступа к этой странице!';
  exit;
}


// Подключение к базе данных
$dbHost = 'localhost';     // Хост базы данных
$dbUsername = 'root'; // Имя пользователя базы данных
$dbPassword = ''; // Пароль базы данных
$dbName = 'gamecompany'; // Имя базы данных

$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($connection->connect_error) {
  die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $newsTitle = $_POST['newsTitle'];
  $newsDate = date_format(date_create($_POST['newsDate']), 'Y-m-d');
  $newsContent = $_POST['newsContent'];

  // Обработка загрузки изображения новости
  if (isset($_FILES['newsImage']) && $_FILES['newsImage']['error'] === UPLOAD_ERR_OK) {
    $tempPath = $_FILES['newsImage']['tmp_name'];
    $newPath = '../upload_images';
    // Укажите путь для сохранения изображения новости


    if (copy($tempPath, $newPath . '/' . $_FILES['newsImage']['name'])) {
      // Успешно сохранено
      // Здесь вы можете добавить код для сохранения пути к изображению новости в базе данных

      $insertQuery = "INSERT INTO news (title, date, content, image) VALUES (?, ?, ?, ?)";

      $imagePath = '/' . $_FILES['newsImage']['name'];

      $statement = $connection->prepare($insertQuery);
      $statement->bind_param("ssss", $newsTitle, $newsDate, $newsContent, $imagePath);

      if ($statement->execute()) {
        // Новость успешно добавлена
        echo 'Новость успешно добавлена!';
      } else {
        echo 'Ошибка при добавлении новости в базу данных: ' . $statement->error;
      }

      $statement->close();
    } else {
      echo 'Ошибка при сохранении изображения новости!';
    }
  }

  $connection->close();
}
