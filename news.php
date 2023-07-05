<?php
session_start();
$dbHost = 'localhost';     // Хост базы данных
$dbUsername = 'root'; // Имя пользователя базы данных
$dbPassword = ''; // Пароль базы данных
$dbName = 'gamecompany'; // Имя базы данных

// Устанавливаем соединение с базой данных
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Проверяем, удалось ли установить соединение
if ($connection->connect_errno) {
  die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Получение списка новостей из базы данных
$selectQuery = "SELECT * FROM news ORDER BY date DESC";
$result = $connection->query($selectQuery);

// Проверяем, удалось ли выполнить запрос
if (!$result) {
  die("Ошибка выполнения запроса: " . $connection->error);
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./image/mainpage/Logos/LogoIcon.svg">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/style.css">

  <title>DUST INTERACTIVE</title>
</head>

<body>
  <?php include('styles/header.php'); ?>
  <?php include('styles/form.php'); ?>

  <div class="container">
    <div class="breadcrumbs">
      <ul class="breadcrumb">
        <li><a href="main.php">Главная</a></li>
        <li>Новости и анонсы</li>
      </ul>
    </div>
  </div>
  <section class="new">
    <div class="container">
      <div class="newscontainer">
        <p>ПОСЛЕДНИЕ НОВОСТИ</p>
        <hr>
        <nav class="news">
          <ul>
            <li><a href="">ВСЕ</a></li>
            <li><a href="">OVER DRIVE</a></li>
            <li><a href="">GHOSTWIRE</a></li>
            <li><a href="">LOST MEMORY</a></li>
            <li><a href="">PHANTOM DREAM</a></li>
            <li><a href="">ELDEN RING</a></li>
          </ul>
        </nav>
      </div>

      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $newsImage = $row['image'];
          $newsDate = $row['date'];
          $newsTitle = $row['title'];
          $newsContent = $row['content'];

          echo '
          <div class="newblock">
              <img src="upload_images' . $newsImage . '" alt="Новость">
              <div class="textstyle">
                  <p class="analogdate">' . $newsDate . '</p>
                  <h1 class="montserat"><span>' . $newsTitle . '</span></h1>
                  <ul>
                      <li class="montserratstyle">' . $newsContent . '</li>
                  </ul>
              </div>
          </div>
          ';

          // Добавьте следующий код для проверки пути к изображению
        }
      } else {
        echo 'Нет доступных новостей.';
      }

      // Освобождаем ресурсы результата
      $result->free_result();

      // Закрываем соединение с базой данных
      $connection->close();
      ?>
    </div>
  </section>

  <?php include('styles/footer.php'); ?>

</body>

</html>