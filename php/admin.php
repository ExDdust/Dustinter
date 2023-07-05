<?php
session_start();
?>






<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./image/mainpage/Logos/LogoIcon.svg">
  <link rel="stylesheet" href="/Cite/css/style.css">

  <title>Админ панель</title>
</head>
<body>
  <?php include('../styles/header.php'); ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <section>
    <div class="admin_container">
      <div class="admin-section">
        <h2>Добавить новость</h2>
        <hr>
        <form class="admin-form" method="POST" action="add_news.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="newsTitle">Заголовок новости:</label>
            <input type="text" id="newsTitle" name="newsTitle" required>
          </div>
          <div class="form-group">
            <label for="newsDate">Дата:</label>
            <input type="date" id="newsDate" name="newsDate" required>
          </div>
          <div class="form-group">
            <label for="newsImage">Изображение новости:</label>
            <input type="file" id="newsImage" name="newsImage" accept="image/*" required>
          </div>
          <div class="form-group">
            <label for="newsContent">Содержание новости:</label>
            <textarea id="newsContent" name="newsContent" rows="8" required></textarea>
          </div>
          <input type="submit" value="Добавить новость">
        </form>
      </div>
    </div>
  </section>
</body>
<?php include('../styles/footer.php'); ?>

</html>