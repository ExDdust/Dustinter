<?php
session_start();

$user = $_SESSION['username'];


// Проверка, авторизован ли пользователь
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}

// Функция выхода из профиля
if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: ../main.php');
  exit;
}

// Остальной код остается без изменений

// Подключение к базе данных
$dbHost = 'localhost';     // Хост базы данных
$dbUsername = 'root'; // Имя пользователя базы данных
$dbPassword = ''; // Пароль базы данных
$dbName = 'gamecompany'; // Имя базы данных

$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($connection->connect_error) {
  die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Остальной код остается без изменений

// Запрос на получение данных пользователя
$email = $_SESSION['email'];
$selectQuery = "SELECT username, email, is_admin FROM users WHERE email = '$email'";
$result = $connection->query($selectQuery);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $username = $row['username'];
  $email = $row['email'];
  $is_admin = $row['is_admin'];
  $_SESSION['username'] = $username; // Добавьте эту строку для обновления значения в сессии
} else {
  echo 'Ошибка получения данных пользователя!';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Получение нового значения имени пользователя из формы
  $newUsername = $_POST['username'];

  // Получение нового значения электронной почты из формы
  $newEmail = $_POST['email'];

  // Обновление данных в базе данных
  $updateQuery = "UPDATE users SET username = '$newUsername', email = '$newEmail' WHERE email = '$email'";
  $updateResult = $connection->query($updateQuery);

  if ($updateResult === TRUE) {
    // Обновление значений в текущей сессии
    $_SESSION['username'] = $newUsername;
    $_SESSION['email'] = $newEmail;

    // Перенаправление на страницу профиля
    header('Location: profile.php');
    exit;
  } else {
    echo 'Ошибка при обновлении профиля: ' . $connection->error;
  }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../image/mainpage/Logos/LogoIcon.svg">
  <link rel="stylesheet" href="../css/style.css">
  <title>DUST INTERACTIVE</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
<header id="siteHeader">
  <div class="heaven">
    <div class="heavenlogo">
      <a href="../main.php" class="heavenimg"><img src="image/mainpage/Logos/LogoIcon.svg" alt="DUST INTERACTIVE logo">
        <div class="logotext">DUST <span class="anothercolor">INTERACTIVE</span></div>
      </a>
    </div>
    <nav class="heavennav">
      <ul>
        <li class="heavenli"><a href="../aboutus.php" class="heaventext">О нас</a></li>
        <li class="heavenli"><a href="../games.php" class="heaventext">Игры</a></li>
        <li class="heavenli"><a href="../news.php" class="heaventext">Новости и анонсы</a></li>
        <li class="heavenli"><a href="../support.php" class="heaventext">Поддержка и контакты</a></li>
      </ul>
    </nav>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo '<a href="/php/profile.php" class="email__login">' . $user . '</a>';
    } else {
      echo '<div class="heavenimgright">
      <img src="image/mainpage/profileicon.png" alt="Иконка профиля" id="profileIcon">
    </div>';
    }
    ?>

  </div>

</header>
<script src="/js/script.js"></script>

  <section>
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumb">
          <li><a href="main.php">Главная</a></li>
          <li>Профиль</li>
        </ul>
      </div>

      <div class="profile">
        <p>Профиль</p>
        <hr>
        <div class="profilecontainer">
          <div class="profileblock">
            <div class="iconNname">
              <label for="profileImageUpload">
                <input type="file" id="profileImageUpload" style="display: none;" accept="image/*">
                <div class="uploadstyle">
                  <img src="image/mainpage/profileicon.png" alt="" id="profileIcon">
                </div>
              </label>
              <div class="font">
                <p class="usnstyle"><?php echo $username; ?></p>
                <p class="emailstyle"> <?php echo $email; ?></p>
                <?php
                // Проверка значения is_admin
                if ($is_admin == 1) {
                  echo '<a href="admin.php" class="admin">Я админ?🤔</a>';
                }
                ?>

                <a href="?logout=true" class="logout">Выход</a>

              </div>
            </div>
          </div>
          <div class="changeprofile_block">
            <h3>Редактировать профиль</h3>
            <form class="formstyle" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="usn">
                <label for="username">Никнейм:</label>
                <input type="text" id="username" name="username" value=" <?php echo $username; ?>" maxlength="10">
              </div>
              <div class="email">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
              </div>
              <input type="submit" value="Сохранить изменения">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mocup">
    <div class="container">
      <div class="prefooter">
        <img src="/image/mainpage/mocup.png" alt="">
        <div class="prefootertext">
          <p>DUST INTERACTIVE</p>
          <h1>Мы доступны как на пк и ноутбуках, так и на смартфонах</h1>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="allline">
        <div class="navline">
          <nav>
            <ul>
              <li><a href="">О нас</a></li>
              <li><a href="">Игры</a></li>
              <li><a href="">Новости и анонсы</a></li>
              <li><a href="">Поддержка и контакты</a></li>
            </ul>
          </nav>
        </div>
        <div class="imgline">
          <nav>
            <ul>
              <li><a href=""><img src="/image/mainpage/twitch.png" alt=""></a></li>
              <li><a href=""><img src="/image/mainpage/tiktok.png" alt=""></a></li>
              <li><a href=""><img src="/image/mainpage/facebook.png" alt=""></a></li>
              <li><a href=""><img src="/image/mainpage/twitter.png" alt=""></a></li>
              <li><a href=""><img src="/image/mainpage/VK.png" alt=""></a></li>
            </ul>
          </nav>
        </div>
        <div class="footerlogo">
          <a href="" class="footerimg"><img src="/image/mainpage/Logos/LogoIcon.svg" alt="DUST INTERACTIVE logo">
            <div class="footerlogotext">DUST <span class="footeranothercolor">INTERACTIVE</span></div>
          </a>
          <p>КОМАНДА <br><span>СОВЕРШЕНСТВ</span></p>
        </div>
      </div>
      <div class="fall">
        <p>© 2023 All rights reserved.<span>Cookie</span></p>
      </div>
    </div>
  </footer>
</body>

</html>

<script>
  $(document).ready(function() {
    // Проверяем статус авторизации при загрузке страницы
    checkAuthStatus();

    // Функция для проверки статуса авторизации
    function checkAuthStatus() {
      $.ajax({
        url: '/check_auth.php',
        type: 'GET',
        success: function(response) {
          if (response === 'authenticated') {
            // Если пользователь авторизован, отображаем соответствующий контент
            showAuthenticatedContent();
          } else {
            // Если пользователь не авторизован, отображаем контент для гостей
            showGuestContent();
          }
        }
      });
    }

    // Функция для отображения контента для авторизованных пользователей
    function showAuthenticatedContent() {
      var profileIcon = '<a href="/account.php"><img src="image/mainpage/profileicon.png" alt="Иконка профиля" id="profileIcon"></a>';
      $('.heavenimgright').html(profileIcon);
    }

    // Функция для отображения контента для гостей
    function showGuestContent() {
      var profileIcon = '<img src="image/mainpage/profileicon.png" alt="Иконка профиля" id="profileIcon">';
      $('.heavenimgright').html(profileIcon);
    }
  });
</script>
