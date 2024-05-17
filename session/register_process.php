<?php
session_start();

// Получаем данные из формы
$username = $_POST['username'];
$email = $_POST['email'];

// Устанавливаем переменные сессии
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

// Перенаправляем пользователя на страницу приветствия
header("Location: /php/session/welcome.php");
exit();

