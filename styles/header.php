<?php
session_start();
$email = $_SESSION['email'];
$user = $_SESSION['username'];
?>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<header id="siteHeader">
  <div class="heaven">
    <div class="heavenlogo">
      <a href="../main.php" class="heavenimg"><img src="../image/mainpage/Logos/LogoIcon.svg" alt="DUST INTERACTIVE logo">
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
      echo '<a href="/Cite/php/profile.php" class="email__login">' . $user . '</a>';
    } else {
      echo '<div class="heavenimgright">
      <img src="image/mainpage/profileicon.png" alt="Иконка профиля" id="profileIcon">
    </div>';
    }
    ?>

  </div>

</header>
<script src="/Cite/js/script.js"></script>

<script>
  $(document).ready(function() {
    // Проверяем статус авторизации при загрузке страницы
    checkAuthStatus();

    // Функция для проверки статуса авторизации
    function checkAuthStatus() {
      $.ajax({
        url: '/Cite/check_auth.php',
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
      var profileIcon = '<a href="/Cite/account.php"><img src="image/mainpage/profileicon.png" alt="Иконка профиля" id="profileIcon"></a>';
      $('.heavenimgright').html(profileIcon);
    }

    // Функция для отображения контента для гостей
    function showGuestContent() {
      var profileIcon = '<img src="image/mainpage/profileicon.png" alt="Иконка профиля" id="profileIcon">';
      $('.heavenimgright').html(profileIcon);
    }
  });
</script>