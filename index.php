<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
<a href=""></a>
<form action="api1/get_text.php" method="GET">
Введи любой слово с заглавными буквами и получишь их нижним регистром<br>
    СЛОВО: <input type="text" name="text"><br><br>
    
    <input type="submit">
</form>

<form class="adduser" action="" method="GET">
    Добавить пользователя<br>
    Логин: <input type="text" name="login"><br><br>
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>

<form class="all_user" action="" method="POST">
    Посмотреть всех пользователей<br>
    <!-- Логин: <input type="text" name="login"><br><br> -->
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>
<div class="otvet"></div>

<form class="show_user" action="" method="POST">
    Показать логин пользователя по id<br>
    ID: <input type="text" name="showbyid"><br><br>
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>
<div class="otvet2"></div>
<form class="update_user" action="" method="POST">
    Изменить логин пользователя<br>
    Старый Логин: <input type="text" name="findbylogin"><br><br>
    Новый Логин: <input type="text" name="newlogin"><br><br>
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>
<div class="otvet3"></div>

    
    <script  src="jquery-3.3.1.min.js"></script>
    <script  src="main.js"></script>
</body>
</html>