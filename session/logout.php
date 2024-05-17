<?php
session_start();

// Удаляем все переменные сессии
session_unset();

// Уничтожаем сессию
session_destroy();

// Перенаправляем пользователя на страницу регистрации
header("Location: register.php");
exit();

