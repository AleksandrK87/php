<?php
session_start();

// Проверяем, установлены ли переменные сессии
if(isset($_SESSION['username']) && isset($_SESSION['email'])) {
   $username = $_SESSION['username'];
   $email = $_SESSION['email'];
} else {
    // Перенаправляем пользователя на страницу регистрации, если переменные сессии не установлены
   header("Location: /php/session/register.php");
   exit();
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Добро пожаловать</title>
</head>
<body>
   <h2>Добро пожаловать, <?php echo htmlspecialchars($username); ?>!</h2>
   <p>Ваш email: <?php echo htmlspecialchars($email); ?></p>
   <a href="logout.php">Выйти</a>
</body>
</html>
