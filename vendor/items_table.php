<?php

session_start();
require_once 'connect.php';

$check_user = mysqli_query($connect, "SELECT * FROM `items`");

while ($result = mysqli_fetch_array($check_user)) {
    echo '<div class="',"{$result['catt']}",'">
	<div class="item-card" id="block1_card">
			<div class="item-card-top">
				<img src="',"{$result['image']}",'" alt="Товар">
				<p class="price">',"{$result['price']}",' ₽</p>
			</div>
			<div class="item-card-bot">
				<h1>',"{$result['name_item']}",'</h1>
			</div>
			</div></div>';
  }


?>