<?php
session_start();

if( isset($_GET['id']) ){
		$action_id= $_GET['id'];
		} else {
		header('Location: /');
		}

require_once 'vendor/connect.php';

$check_item = mysqli_query($connect, "SELECT * FROM `items` WHERE ID = $action_id");
if ($result = mysqli_fetch_array($check_item)) {
?>
<!doctype html>
<html>
	<head>
		<title>Товар <?echo "{$result['name_item']}";?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>
            <div class="container">

		<?include"vendor/header.php";?>

                        <?include"vendor/navigation.php";?>

                        <div class="content-cart">

						<div class="box-item-info">

							<div class="box-item-info-left">
							<?echo '<img src="',"{$result['image']}",'">'?>
							</div>
							<div class="box-item-info-right">

							<?
									echo '<h1>',"{$result['name_item']}",'</h1>
								<h3>Описание:</h3>
								<p class="item-info">',"{$result['info']}",'</p>
								<div class="box-price-info">
								<p class="price-info">',"{$result['price']}",' ₽</p>';

								if ($_SESSION['user']) {
									echo '<button type="submit" class="add-item-cart-btn" id="add-item-cart-btn" name="',"{$result['ID']}",'">Добавить в корзину</button>';
								} else {
									echo '<button type="submit" class="add-item-cart-btn" id="add-item-cart-btn-session" name="',"{$result['ID']}",'"">Добавить в корзину</button>';
								}

								}
							?>
							<a href="cart.php"><button type="submit" class="link-item-cart-btn" id="link-item-cart-btn">Перейти в корзину</button></a>

								</div>
							</div>

                        </div>
						</div>

                        <div class="clear">
                        </div>

                        <div class="footer">
							<a class="logo-navig-main" href="/"><img src="files/img/logo-footer.svg" width="120" height="60"></a>
                        </div>
            </div>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/cart.js"></script>
</body>
</html>
