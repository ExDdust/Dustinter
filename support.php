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
    <link rel="stylesheet" href="css/form.css">

    <title>Поддержка</title>
</head>

<body>
    <?php include('styles/form.php'); ?>

    <?php include('styles/header.php');

    ?>

    <div class="container">
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="main.php">Главная</a></li>
                <li>Поддержка и контакты</li>
            </ul>
        </div>
    </div>
    <section class="new">
        <div class="container">
            <div class="newscontainer">
                <p>Поддержка и контакты</p>
                <hr>
                <h1>По какому поводу вам нужна поддержка?</h1>
                <div class="askinput">
                    <input class="writetext" type="text" id="text" placeholder="Задать свой вопрос" name="text" required>
                    <input class="searchtext" type="submit" value="Отправить">
                </div>
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
        </div>
        <div class="quest_cards">
            <div class="overdrive_card">
                <div class="card_style">
                    <a href="">OVER DRIVE</a>
                </div>
            </div>
            <div class="buy_card">
                <div class="card_style">
                    <img src="image/support/cart-outline.png" alt="Корзина">
                    <a href="">Покупка и активация</a>
                    <p>Как купить и активировать игру?</p>
                </div>
            </div>
            <div class="phantom_card">
                <div class="card_style">
                    <a href="">PHANTOM DREAM</a>
                </div>
            </div>
            <div class="ghost_card">
                <div class="card_style">
                    <a href="">GHOSTWIRE: TOKYO</a>
                </div>
            </div>
            <div class="lost_card">
                <div class="card_style">
                    <a href="">LOST MEMORY </a>
                </div>
            </div>
            <div class="profile_card">
                <div class="card_style">
                    <img src="image/support/profile-outline.png" alt="Профиль">
                    <a href="">Учетная запись</a>
                    <p>Решение проблем и вопросов связанные с учетной записью</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contactNoffice">
                <div class="contactus">
                    <p class="contacttext">СВЯЗЬ С НАМИ</p>
                    <div class="email">
                        <p class="fontstyle">ПОЧТА</p>
                        <h1 class="h1style">examplequest@dust.com</h1>
                    </div>
                    <div class="telnum">
                        <p class="fontstyle">ТЕЛЕФОН</p>
                        <h1 class="h1style">+7(923) 423-12-63</h1>
                        <h1 class="h1style">+7(923) 423-12-72</h1>
                    </div>
                    <div class="investor">
                        <p class="fontstyle">ИНВЕСТОРАМ</p>
                        <h1 class="h1style">investors@dust.com</h1>
                    </div>
                    <div class="blogers">
                        <p class="fontstyle">СТРИМЕРАМ И БЛОГЕРАМ</p>
                        <h1 class="h1style">creators@dust.com</h1>
                    </div>
                </div>
                <div class="office">
                    <p class="contacttext">ОФИС</p>
                    <h1 class="officestyle">Последний переулок, 3, Москва, 107045</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.3411847787156!2d37.62339007729605!3d55.769945990670074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a693d7f37d1%3A0xa130aa301afbf78c!2z0J_QvtGB0LvQtdC00L3QuNC5INC_0LXRgC4sIDMsINCc0L7RgdC60LLQsCwgMTA3MDQ1!5e0!3m2!1sru!2sru!4v1687159525618!5m2!1sru!2sru" width="900" height="442" style="border-radius:20px;border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php include('styles/footer.php'); ?>

</body>

</html>