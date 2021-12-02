<div class="header">

			<div class="text-header">
				<div class="link-header"><a href="/">Главная</a></div>
				<div class="link-header"><a href="#">Оплата</a></div>
				<div class="link-header"><a href="#">Контакты</a></div>
				<?php
				session_start();
					if ($_SESSION['user']) {
						echo '<div class="link-header-right"><a href="vendor/logout.php" class="logout-header">Выход</a></div>';
						}
					if ($_SESSION['user']['typep'] == "admin") {
						echo '<div class="link-header-right"><a href="panel.php" class="logout-header">Панель</a></div>';
						}
				?>

				<div class="link-header-right"><a class="auth-butt" href="login.php"><img src="files/img/user-icon.svg" width="12" height="12">
				<?php
					if ($_SESSION['user']) {
						echo $_SESSION['user']['login'];
						}
					else echo "Авторизоваться";
				?>
				</a></div>
				<div class="link-header-right"><a href="#">+7 (900) 000 00 00</a></div>

				</div>

			</div>

			<div class="header-mobile">

						<div class="text-header">
							<?php/*
							session_start();
								if ($_SESSION['user']) {
									echo '<div class="link-header-right"><a href="vendor/logout.php" class="logout-header">Выход</a></div>';
									}
								if ($_SESSION['user']['typep'] == "admin") {
									echo '<div class="link-header-right"><a href="panel.php" class="logout-header">Панель</a></div>';
								}*/
							?>
							<a class="menu-butt-mobile"><img src="files/img/menu-icon-mobile.svg" width="28" height="28"></a>
							<a class="auth-butt-mobile" href="cart.php"><img src="files/img/cart-icon-mobile.svg" width="28" height="28"></a>
							<a class="auth-butt-mobile" href="login.php"><img src="files/img/user-icon.svg" width="28" height="28"></a>
							<?php/*
								if ($_SESSION['user']) {
									echo $_SESSION['user']['login'];
									}
								else echo "Авторизоваться";*/
							?>

							</div>

						</div>
			<!-- <a href="vendor/logout.php" class="logout">Выход</a> -->
