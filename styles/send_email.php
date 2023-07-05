<!-- <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверка наличия данных в поле email
    if (isset($_POST['email'])) {
        $to = 'your-email@example.com'; // Замените на ваш адрес электронной почты
        $subject = 'Подписка на рассылку';
        $message = 'Спасибо за подписку на нашу рассылку! Мы будем держать вас в курсе наших предложений о работе.';

        // Отправка письма
        $headers = 'From: your-email@example.com' . "\r\n" .
            'Reply-To: your-email@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            echo 'Письмо успешно отправлено!';
        } else {
            echo 'Ошибка отправки письма.';
        }
    }
}
?> -->
