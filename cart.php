<?php
session_start();


?>
<!doctype html>
<html>
	<head>
		<title>Корзина</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>
            <div class="container">

		<?include"vendor/header.php";?>

                        <?include"vendor/navigation.php";?>

                        <div class="content-cart">


						<div class="box-cart-list">
						<?

							if ($_SESSION['user']) {

							$user_id = $_SESSION['user']['id'];

							require_once 'vendor/connect.php';
							$summ = 0;
							$check_item_cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE `id_user` = $user_id");
							while ($results = mysqli_fetch_array($check_item_cart)) {
								$curr_id = $results['id_item'];
								$check_item_items = mysqli_query($connect, "SELECT * FROM `items` WHERE `ID` = $curr_id");
								if ($results22 = mysqli_fetch_array($check_item_items)) {
									echo '<div class="box-item-cart">
									<img src="',$results22['image'],'">
									<h2>',$results22['name_item'],'</h2>
									<p>',$results22['price'],' ₽ x ',$results['value'],' = ',$results22['price']*$results['value'],'</p>
									<button type="submit" class="one-item-cart-btn-del" id="one-item-cart-btn-del" name="',$curr_id,'">-</button>
									<button type="submit" class="one-item-cart-btn-add" id="one-item-cart-btn-add" name="',$curr_id,'">+</button>
									<button type="submit" class="delete-item-cart-btn" id="delete-item-cart-btn" name="',$results22['ID'],'">Удалить</button>
								</div>';
								$summ = $summ + $results22['price']*$results['value'];
								}

							}

								echo '<div class="box-res-cart">
									<p>Итого: ',$summ,' ₽</p>
								</div>';
							} else {


								if ($_SESSION['itemcart']) {
									$curr_id = $_SESSION['itemcart'];
									$summ = 0;


									$black_list = array();


									for ($i6 = 0; $i6 < count($curr_id); $i6++) {
										$black_list[count($black_list)] = $curr_id[$i6]['id_prod'];
									}

									$ress = array_count_values($black_list);

									$ress2 = array_unique($black_list);

									for ($i22 = 0; $i22 < count($ress2); $i22++) {


										$curr_id2 = $ress2[$i22];
										$value_cur = $ress[$ress2[$i22]];

									require_once 'vendor/connect.php';
									$check_item_items = mysqli_query($connect, "SELECT * FROM `items` WHERE `ID` = $curr_id2");
									if ($results22 = mysqli_fetch_array($check_item_items)) {
										echo '<div class="box-item-cart">
										<img src="',$results22['image'],'">
										<h2>',$results22['name_item'],'</h2>
										<p>',$results22['price'],' ₽ x ',$value_cur,' = ',$results22['price']*$value_cur,'</p>
										<button type="submit" class="one-item-cart-btn-del" id="one-item-cart-btn-del-sess" name="',$curr_id2,'">-</button>
										<button type="submit" class="one-item-cart-btn-add" id="one-item-cart-btn-add-sess" name="',$curr_id2,'">+</button>
										<button type="submit" class="delete-item-cart-btn" id="delete-item-cart-btn-session" name="',$curr_id2,'">Удалить</button>

									</div>';

									$summ = $summ + $results22['price']*$value_cur;

								}
							}
									echo '<div class="box-res-cart">
										<p>Итого: ',$summ,' ₽</p>
									</div>';
								} else {
									echo'
									<div class="box-res-cart">
										<p>Итого: 0 ₽</p>
									</div>';
								}


							}
						?>

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
		<script src="assets/js/cartload.js"></script>
</body>
</html>
