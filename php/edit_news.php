<?php
session_start();

// Проверка, авторизован ли пользователь
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}

// Проверка, является ли пользователь администратором
$is_admin = $_SESSION['is_admin'];
if ($is_admin != 1) {
  echo 'У вас нет доступа к этой странице!';
  exit;
}

// Подключение к базе данных
$dbHost = 'localhost';     // Хост базы данных
$dbUsername = 'root'; // Имя пользователя базы данных
$dbPassword = ''; // Пароль базы данных
$dbName = 'gamecompany'; // Имя базы данных

$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Получение списка новостей
$newsQuery = "SELECT * FROM news";
$newsResult = $connection->query($newsQuery);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- head-секция с вашими стилями и скриптами -->
</head>

<body>
    <!-- код вашей страницы -->

    <section>
        <div class="admin_container">
            <div class="admin-section">
                <h2>Управление новостями</h2>
                <hr>

                <?php
                // Проверка наличия новостей
                if ($newsResult->num_rows > 0) {
                    // Вывод списка новостей с возможностью удаления и изменения
                    while ($row = $newsResult->fetch_assoc()) {
                        echo '<div>';
                        echo '<h3>' . $row['title'] . '</h3>';
                        echo '<p>' . $row['date'] . '</p>';
                        echo '<p>' . $row['content'] . '</p>';
                        echo '<img src="' . $row['image'] . '" alt="Изображение новости">';
                        echo '<a href="edit_news.php?action=edit&id=' . $row['id'] . '">Изменить</a>';
                        echo '<a href="edit_news.php?action=delete&id=' . $row['id'] . '">Удалить</a>';
                        echo '</div>';
                        echo '<hr>';
                    }

                    // Обработка действий изменения и удаления
                    if (isset($_GET['action']) && isset($_GET['id'])) {
                        $action = $_GET['action'];
                        $newsId = $_GET['id'];

                        if ($action === 'edit') {
                            // Здесь реализуйте код для изменения новости
                            // Получите данные о новости по идентификатору $newsId
                            // Отобразите форму для изменения данных новости с предзаполненными значениями
                            // Обработайте отправку формы и выполните запрос на обновление данных новости в базе данных
                        } elseif ($action === 'delete') {
                            // Здесь реализуйте код для удаления новости
                            // Выполните запрос DELETE для удаления новости с идентификатором $newsId из базы данных
                        }
                    }
                } else {
                    echo 'Нет доступных новостей.';
                }

                $connection->close();
                ?>

            </div>
        </div>
    </section>

    <?php include('styles/footer.php'); ?>
    
</body>

</html>