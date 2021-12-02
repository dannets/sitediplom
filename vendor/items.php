<?php

session_start();
require_once 'connect.php';

$check_user = mysqli_query($connect, "SELECT * FROM `items`");

while ($result = mysqli_fetch_array($check_user)) {
    echo '<div class="',"{$result['catt']}",'">
	<a href="item.php?id=',"{$result['ID']}",'">
	<div class="item-card" id="block1_card">
			<div class="item-card-top">
				<img src="',"{$result['image']}",'" alt="Товар">
				<p class="price">',"{$result['price']}",' ₽</p>
			</div>
			</a>
			<a href="item.php?id=',"{$result['ID']}",'">
			<div class="item-card-bot">
				<h1>',"{$result['name_item']}",'</h1>
			</div>
			</a>
			</div></div>';
  }


?>