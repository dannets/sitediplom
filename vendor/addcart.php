<?php

session_start();
require_once 'connect.php';

$name_itemcart = $_POST['name_itemcart'];
$user_id = $_SESSION['user']['id'];

$error_fields = [];

if ($name_itemcart === '') {
    $error_fields[] = 'name_itemcart';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
} else {

$check_item_items = mysqli_query($connect, "SELECT * FROM `cart` WHERE `id_item` = $name_itemcart AND `id_user` = $user_id");

if ($results22 = mysqli_fetch_array($check_item_items)) {
  $curr_val = $results22['value'];
  $curr_val++;
  mysqli_query($connect, "UPDATE `cart` SET `value`=$curr_val WHERE `id_item` = $name_itemcart AND `id_user` = $user_id");
} else {
  mysqli_query($connect, "INSERT INTO `cart`(`id_item`, `id_user`, `value`) VALUES ('$name_itemcart','$user_id','1')");
}


$response = [
		"status" => true,
		"message" => "Товар успешно добавлен к корзину",
];

echo json_encode($response);
}






?>
