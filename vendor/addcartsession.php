<?php

session_start();
require_once 'connect.php';

$name_itemcart = $_POST['name_itemcart'];

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


//$cart = $_SESSION['itemcart'];
//$_SESSION['itemcart'][0]['id_prod']['value']

//$additem_new['id_prod'] = $name_itemcart;
//$cart[count($cart)] = $additem_new;
//$_SESSION['itemcart'] = $cart;

$cart = $_SESSION['itemcart'];

$additem_new['id_prod']  = $name_itemcart;
$cart[count($cart)] = $additem_new;
$_SESSION['itemcart'] = $cart;


$response = [
		"status" => true,
		"message" => "Товар успешно добавлен к корзину",
];

echo json_encode($response);
}






?>
