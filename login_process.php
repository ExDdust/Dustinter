<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $captchaResponse = $_POST['g-recaptcha-response'];

  // Проверка капчи на сервере
  $secretKey = '6LerufMmAAAAAPTV9hyH-0CVqm8wRL5j_dJq93aw';
  $captchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

  $data = array(
    'secret' => $secretKey,
    'response' => $captchaResponse
  );

  // Остальной код проверки капчи и обработки авторизации
  // ...
}
?>
