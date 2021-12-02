<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">

		<?include"vendor/header.php";?>

                        <?include"vendor/navigation.php";?>

                        <div class="content-cart">

							<!-- Профиль -->
							<form class="form-profile-info">
								<h2><?= $_SESSION['user']['login'] ?></h2>
								<h2><?= $_SESSION['user']['full_name'] ?></h2>
								<a href="#"><?= $_SESSION['user']['email'] ?></a><br>
								<a href="vendor/logout.php" class="logout">Выход</a>
							</form>
							<!-- Профиль -->

                        </div>

                        <div class="clear">
                        </div>

                        <div class="footer">
							<a class="logo-navig-main" href="/"><img src="files/img/logo-footer.svg" width="120" height="60"></a>
                        </div>
            </div>

</body>
</html>
