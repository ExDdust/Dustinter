<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получение значения email из формы
  $email = $_POST['email'];

  // Отправка письма на указанный email
  $to = $email;
  $subject = 'Благодарим за подписку!';
  $message = 'Спасибо, что подписались на нашу рассылку! Мы будем информировать вас о наших предложениях о работе.';
  $headers = 'From: baroyan045@mail.ru' . "\r\n" .
    'Reply-To: baroyan045@mail.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    // Письмо успешно отправлено
    echo 'Письмо успешно отправлено!';
  } else {
    // Ошибка при отправке письма
    echo 'Ошибка при отправке письма.';
  }
}
?>
