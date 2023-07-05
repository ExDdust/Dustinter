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
  <link rel="stylesheet" href="css/style.css">
  <title>DUST INTERACTIVE</title>
</head>

<body>
  <?php include('styles/header.php'); ?>
  <?php include('styles/form.php'); ?>
  <?php include('styles/slider.php'); ?>


  <section class="info">
    <div class="container">
      <div class="infocontainer">
        <div class="ourteam">
          <div class="ourteamblockimg">
            <p>Наша команда</p>
            <a class="ourteambtn" href="/Cite/aboutus.php" title="Подробнее">Подробнее</a>
          </div>
          <div class="ourteamblocktext">
            <p>Мы сами решаем что делать <br><span>Мы не боимся иноваций</span>
            </p>
            <h1>Команда компании "DUST INTERACTIVE" - это энергичная и творческая группа профессионалов, страстно увлеченных
              игровой индустрией.
              <br>
              <br>
              Они объединяют свои навыки и таланты, чтобы создавать увлекательные и инновационные игровые продукты.
              <br>
              <br>
              Каждый член команды вносит свой вклад в различные аспекты разработки игр, от дизайна и программирования до
              графики и звукового оформления, с целью достичь высочайшего качества и удовлетворить потребности игроков.
            </h1>
          </div>
        </div>
        <div class="joinus">
          <div class="joinusblockimg">
            <p>Присоединяйтесь к нам</p>
            <a class="joinusbtn" href="" title="Подробнее">Подробнее</a>
          </div>
          <div class="joinusblocktext">
            <p>Возможность стать лучше<br><span>Возможность быть нужным</span>
            </p>
            <h1>Команда "DUST INTERACTIVE" приглашает вас присоединиться к нам! Мы ищем талантливых и страстных людей,
              которые разделяют нашу любовь к играм и интерактивному развлечению.
              <br>
              <br>
              У нас вы найдете динамичную и вдохновляющую рабочую среду, сможете реализовать свои идеи и принять участие в
              создании захватывающих игровых проектов.
              <br>
              <br>
              Присоединяйтесь к нам и станьте частью нашей команды, которая создает уникальные игровые впечатления для
              миллионов людей по всему миру.
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mail">
    <div class="container">
      <div class="mailingcontainer">
        <div class="mailing">
          <div class="mailingform">
            <p>РАССЫЛКА ВАКАНСИЙ</p>
            <h1>Будьте в курсе наших предложений о работе</h1>
            <hr>
            <form id="subscribeForm" class="mailinginput" method="post" action="subscribe.php">
              <input class="writemail" type="email" id="emailInput" placeholder="Введите ваш e-mail" name="email" required>
              <input class="sendmail" type="submit" value="Отправить">
            </form>
            <div id="message"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="games">
    <div class="container">
      <div class="gamescontainer">
        <p>НАШИ ИГРЫ</p>
        <hr>
        <div class="ourgames">
          <a href="#" class="game"><img class="ourgamesimg" src="image/mainpage/overdrive.png" alt=""></a>
          <a href="#" class="game"><img class="ourgamesimg" src="image/mainpage/eldenring.png" alt=""></a>
          <a href="#" class="game"><img class="ourgamesimg" src="image/mainpage/phantomdream.png" alt=""></a>
          <a href="#" class="game"><img class="ourgamesimg" src="image/mainpage/ghostwire.png" alt=""></a>
          <a href="#" class="game"><img class="ourgamesimg" src="image/mainpage/lostmemory.png" alt=""></a>
        </div>
        <input class="showmore" type="button" value="Показать еще">
      </div>
    </div>
  </section>

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
        <div class="countcontainer">
          <div class="newsection1">
            <div class="new-big">
              <img src="image/mainpage/overdriveNews.png" alt="">
              <p class="date">8 июня 2023</p>
              <h1>Обновление: Переработка механики стрельбы</h1>
            </div>
            <div class="newsmall">
              <img src="image/mainpage/phantomdreamNews.png" alt="">
              <div class="textnew">
                <p class="date">6 июня 2023</p>
                <h1>Сезон 4: Новые машины, новые пушки</h1>
              </div>
            </div>
          </div>
          <div class="newsection2">
            <div class="newsmall">
              <img src="image/mainpage/lostmemoryNews.png" alt="">
              <div class="textnew">
                <p class="date">3 июня 2023</p>
                <h1>Исправление ошибок: Изменение механики вождения </h1>
              </div>
            </div>
            <div class="newsmall">
              <img src="image/mainpage/overdriveNewsmin.png" alt="">
              <div class="textnew">
                <p class="date">27 мая 2023</p>
                <h1>Сезон 7: Карты, деньги, два ствола</h1>
              </div>
            </div>
            <div class="newsmall">
              <img src="image/mainpage/ghostwireNews.png" alt="">
              <div class="textnew">
                <p class="date">1 июня 2023</p>
                <h1>Исправление ошибок: Изменение боевки </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('styles/footer.php'); ?>

</body>

<script>
  document.getElementById("subscribeForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Предотвращение отправки формы по умолчанию
    var form = event.target;

    // Асинхронная отправка данных формы с использованием Fetch API
    fetch(form.action, {
        method: form.method,
        body: new FormData(form)
      })
      .then(function(response) {
        if (response.ok) {
          // Показ сообщения об успешной отправке
          document.getElementById("message").textContent = "Спасибо за подписку!";
          document.getElementById("message").style.color = "green";
          form.reset();
        } else {
          // Показ сообщения об ошибке
          document.getElementById("message").textContent = "Ошибка при отправке формы.";
          document.getElementById("message").style.color = "red";
        }
      })
      .catch(function(error) {
        console.log(error);
      });
  });
</script>


</html>