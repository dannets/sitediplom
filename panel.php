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
    <title>Панель</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">

		<?include"vendor/header.php";?>

                        <?include"vendor/navigation.php";?>

						<div class="content-cart">

                        <div class="content-cart-panel-l">

							<!-- Панель -->
							<form class="form-panel-admin">

								<label>Название товара</label>
								<input type="text" name="name_item" placeholder="Название товара">
								<label>Цена</label><br>
								<input type="number" name="price" placeholder="0 Р"><br>
								<label>Категория</label>
								<input type="text" name="catt" placeholder="Категория">
								<label>Подкатегория</label>
								<input type="text" name="catt2" placeholder="Подкатегория">
								<label>Описание товара</label>
								<input type="text" name="info_item" placeholder="Описание товара">
								<label>Изображение товара</label><br>
								<input type="file" name="image_item"><br>
								<button type="submit" class="panel-btn">Добавить</button>
								<p class="msg-prov none">Lorem ipsum.</p>
							</form>
							<!-- Панель -->

                        </div>


						<div class="content-cart-panel-r">

						<table>
									<caption>Перечень товаров</caption>
									<tr><th>ID</th><th>Название товара</th><th>Цена</th><th>Категория</th><th>Подкатегория</th><th>Описание</th><th>Изображение</th><th>Выполнить</th></tr>
						<?php
							require_once 'vendor/connect.php';




							$check_item_val = mysqli_query($connect, "SELECT count(*) FROM items;");

							if($item_val = mysqli_fetch_array($check_item_val)){

								$str_table = $item_val[0];

								$str_table = ceil($str_table / 10);

								$hide_tab = '';

								$curr_table = 0;
								for ($i = 1; $i <= $str_table; $i++) {
									$curr_table = $i * 10 - 10;

									if ($i > 1) { $hide_tab = 'style="display:none;"';}

									$check_item = mysqli_query($connect, "SELECT * FROM `items` LIMIT $curr_table, 10;");

										while ($result_item = mysqli_fetch_array($check_item)) {
										echo '
										<tr class="list-table',$i,'" ',$hide_tab,'>
										<td>',"{$result_item['ID']}",'</td>
										<td>',"{$result_item['name_item']}",'</td>
										<td>',"{$result_item['price']}",'</td>
										<td>',"{$result_item['catt']}",'</td>
                    <td>',"{$result_item['pod_catt']}",'</td>
										<td>',"{$result_item['info']}",'</td>
										<td>',"{$result_item['image']}",'</td>
										<td><button type="submit" class="delete-item-tab" id="delete-item-tab" name="',$result_item['ID'],'">Удалить</button></td></tr>
											';
							}

								}


							}
						?>

						</table>

						<button type="submit" class="table-btn-back">Назад</button>
						<button type="submit" class="table-btn-next">Далее</button>

                        </div>

						</div>


                        <div class="clear">
                        </div>

                        <div class="footer">
							<a class="logo-navig-main" href="/"><img src="files/img/logo-footer.svg" width="120" height="60"></a>
                        </div>
            </div>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/panelitem.js"></script>
</body>
</html>
