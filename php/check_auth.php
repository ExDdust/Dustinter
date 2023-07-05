<?php
session_start();
// После проверки логина и пароля и успешной аутентификации пользователя
$_SESSION['user_id'] = $user_id; // Здесь user_id - идентификатор пользователя
echo 'authenticated';
?>