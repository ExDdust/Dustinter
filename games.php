<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/mainpage/Logos/LogoIcon.svg">
    <link rel="stylesheet" href="css/style.css">

    <title>Игра</title>
</head>
<!-- https://store.epicgames.com/ru/p/ghostwire-tokyo -->

<body>
    <?php include('styles/header.php'); ?>

    <?php include('styles/form.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
  <?=$_SESSION['email']?>
    <div class="container">
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="main.php">Главная</a></li>
                <li>Ghostwire: Tokyo</li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="gamecardzone">
                <div class="gamecard">
                    <img src="image/game/GhostwireCard.png" alt="">
                    <p>Платформы:</p>
                </div>
                <div class="buyzone">
                    <div class="buy">
                        <p>КУПИТЬ OVER DRIVE</p>
                        <div class="buttonstyle">
                            <button type="submit">Купить</button>
                            <h1>1499 руб.</h1>
                        </div>
                    </div>
                    <p class="rate">Рейтинг: 4.5/5 <span>★</span></p>

                    <h1 class="language">Поддержка языков
                        Русский(только интерфейс)</h1>
                    <h2 class="aboutproduct">Дата выпуска: 15 февраля 2023 г.
                        Разработчик: DUST INTERACTIVE
                        Жанры: RPG, Шутер, Киберпанк</h2>
                </div>
            </div>
            <div class="platformstyle">
                <ul>
                    <li><img src="image/game/pc.png" alt="" id="PC"></li>
                    <li><img src="image/game/xbox.png" alt="" id="Xbox"></li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <?php include('styles/gamepageslider.php'); ?>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="aboutgame_block">
                <p>Подробнее об игре</p>
                <div class="aboutgame">
                    <p class="bob"><span>Киберпанк в полном разгаре</span>
                        <br>
                        <br>

                        Погрузитесь в захватывающий мир будущего, где технологии сливаются с человеческим сознанием, а уличные преступники и корпоративные гиганты борются за власть.
                        <br>
                        <br>

                        <span>Неоновый стиль, который ослепляет</span>
                        <br>
                        <br>

                        Откройте для себя впечатляющую визуальную атмосферу игры, где яркие неоновые огни переплетаются с мрачными уличными переходами и высокотехнологичными небоскребами.
                        <br>
                        <br>
                        <span>Ваша история, ваш путь</span>
                        <br>
                        <br>

                        В Over Drive вы создаете своего уникального персонажа и отправляетесь в захватывающее путешествие, принимая решения, которые определят вашу судьбу и влияют на ход сюжета.
                        <br>
                        <br>

                        <span>Свобода выбора и гибкость</span>
                        <br>
                        <br>

                        Благодаря сочетанию элементов РПГ и шутера вам предоставляется свобода выбирать свой стиль игры: станьте бесстрашным воином, мастером хакерства или искусным стрелком.
                        <br>
                        <br>

                        <span>Уникальные кибернетические возможности</span>
                        <br>
                        <br>

                        Прокачивайте своего персонажа, усиливая его тело кибернетическими имплантантами, чтобы обрести новые способности и преимущества в сражениях.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="requirements">
                <p>Системные требования</p>
                <div class="requirement_bgstyle">
                    <div class="requirement_min">
                        <p>Минимальные:</p>
                        <h1>Операционная система: Windows 10 <br>
                            Процессор: Intel Core i5-4460 или AMD Ryzen 3 1200<br>
                            Оперативная память: 8 ГБ<br>
                            HDD: 110 ГБ на жестком диске<br>
                            Видеокарта: NVIDIA GeForce GTX 970 или AMD Radeon RX 470<br>
                            Версия DirectX: 12<br>
                            Сеть: Широкополосное подключение к интернету</h1>
                    </div>
                    <hr class="separator">
                    <div class="requirement_recomended">
                        <p>Рекомендуемые:</p>
                        <h1>Операционная система: Windows 10<br>
                            Процессор: Intel Core i5-8400 или AMD Ryzen 5 1500X<br>
                            Оперативная память: 16 ГБ<br>
                            HDD: 110 ГБ на жестком диске<br>
                            Видеокарта: NVIDIA GeForce GTX 1070 или AMD Radeon RX 590<br>
                            Версия DirectX: 12<br>
                            Сеть: Широкополосное подключение к интернету</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="feedback_block">
                <p></p>
                <textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
                <input type="button" value="Отправить">
            </div>
        </div>
    </section>
</body>

</html>