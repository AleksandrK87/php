<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Регистрация</title>
</head>
<body>
   <h2>Форма регистрации</h2>
   <form action="register_process.php" method="post">
      <label for="username">Имя пользователя:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <button type="submit">Зарегистрироваться</button>
   </form>
</body>
</html>