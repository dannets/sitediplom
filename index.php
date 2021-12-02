<?php
session_start();


?>
<!doctype html>
<html>
	<head>
		<title>Главная</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="assets/js/load_block.js"></script>
	</head>
<body>
	<div class="container">

		<?include"vendor/header.php";?>
		<?include"vendor/navigation.php";?>

                        <div class="content">
													<!--блок товаров 1-->

													<div class="card-item-block">

														<?if( isset($_GET['catt']) ){
																$action_catt= $_GET['catt'];
																include"vendor/catt.php";
																} else {
																	if ( isset($_GET['pcatt']) ){
																		include"vendor/itemscatt.php";
																	} else {
																		include"vendor/items.php";
																	}
															}?>


													</div>
													<!--блок товаров 1-->



                        </div>

                        <div class="clear">
                        </div>

                        <div class="footer">
							<a class="logo-navig-main" href="/"><img src="files/img/logo-footer.svg" width="120" height="60"></a>
                        </div>
            </div>
</body>
</html>
