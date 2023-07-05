<link rel="stylesheet" href="/Cite/css/form.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php include('php/process.php'); ?>

<head>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>


<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.enterprise.ready(async () => {
            const token = await grecaptcha.enterprise.execute('6Ld0GPUmAAAAAJBEC4YhFDfWco1qfd-XYybAUsds', {
                action: 'LOGIN'
            });
            // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
            // reCAPTCHA Enterprise to the end user's browser.
            // This token must be validated by creating an assessment.
            // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
        });
    }
</script>
<div class="popup-overlay"></div>

<form id="loginForm" class="popup-form" method="POST" action="/Cite/php/login.php">
    <div class="popup">
        <div class="popuplefttxt">
            <p>Все еще не зарегистрированы?</p>
            <br>
            <span>Давайте пройдем процесс регистрации, чтобы вы могли совершать покупки у нас на сайте :)</span>
            <button type="button" id="registerButton" onclick="showRegisterForm()">Зарегистрироваться</button>
        </div>
        <div class="popupcube">
            <p>Вход</p>
            <div class="inputstyle">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Пароль" required>
                <div class="g-recaptcha" data-sitekey=""></div>
                <div class="downstyle">
                    <a href="">Забыли пароль?</a>
                    <button type="submit">Войти</button>
                    <div class="g-recaptcha" data-sitekey="6Lfbq_cmAAAAAATDGzFAJn0Bu_FZM3WEJHXZt9eI" class="login__captcha"></div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php

if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
    $secret = '6Lfbq_cmAAAAAKY4prLeGDew6YwhHZ753eE28_X3';
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
    $arr = json_decode($rsp, TRUE);
    if ($arr['success']) {
    }
}

?>
<form id="registerForm" class="popup-form1" method="POST" action="/Cite/php/register.php">
    <div class="popupreg">
        <div class="popupregcube">
            <p>Регистрация</p>
            <div class="inputstyle">
                <input type="text" name="username" id="username" placeholder="Ваш никнейм" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Пароль" required>
                <div class="downstylereg">
                    <button type="submit">Зарегистрироваться</button>
                    <div class="g-recaptcha" data-sitekey="6Lfbq_cmAAAAAATDGzFAJn0Bu_FZM3WEJHXZt9eI" class="login__captcha"></div>
                </div>
            </div>
        </div>
        <div class="popuprighttxt">
            <p>Есть аккаунт или вспомнили пароль?</p>
            <br>
            <span>Давайте войдем в ваш профиль чтобы вы дальше могли совершать покупки :)</span>
            <button type="button" id="loginButton" onclick="showLoginForm()">Войти</button>
        </div>
    </div>
</form>


<script src="/Cite/js/script.js"></script>