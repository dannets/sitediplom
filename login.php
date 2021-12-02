<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">


	<?include"vendor/header.php";?>

                        <?include"vendor/navigation.php";?>

                        <div class="content-cart">

							<!-- Форма авторизации -->
							<form class="form-login">
							<label>Логин</label>
							<input type="text" name="login" placeholder="Введите свой логин">
							<label>Пароль</label>
							<input type="password" name="password" placeholder="Введите пароль">
							<button type="submit" class="login-btn">Войти</button>
							<p>
							У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь!</a>
							</p>
							<p class="msg none">Lorem ipsum.</p>
							<!-- Форма авторизации -->

                        </div>

                        <div class="clear">
                        </div>

                        <div class="footer">
							<a class="logo-navig-main" href="/"><img src="files/img/logo-footer.svg" width="120" height="60"></a>
                        </div>
            </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/auths.js"></script>

</body>
</html>
