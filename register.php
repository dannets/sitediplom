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
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">

		<?include"vendor/header.php";?>

                        <?include"vendor/navigation.php";?>

                        <div class="content-register">

							<!-- Форма регистрации -->
							<form class="form-register">
								<label>ФИО</label>
								<input type="text" name="full_name" placeholder="Введите свое полное имя">
								<label>Логин</label>
								<input type="text" name="login" placeholder="Введите свой логин">
								<label>Почта</label>
								<input type="email" name="email" placeholder="Введите адрес своей почты">
								<!--
								<label>Изображение профиля</label>
								<input type="file" name="avatar">
								-->
								<label>Пароль</label>
								<input type="password" name="password" placeholder="Введите пароль">
								<label>Подтверждение пароля</label>
								<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
								<button type="submit" class="register-btn">Зарегистрироваться</button>
								<p>
								У вас уже есть аккаунт? - <a href="/login.php">авторизируйтесь!</a>
								</p>
								<p class="msg none">Lorem ipsum.</p>
							</form>
							<!-- Форма регистрации -->

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
