<?php

session_start();
require_once 'connect.php';

$name_itemdel = $_POST['name_itemdel'];
$user_id = $_SESSION['user']['id'];

$error_fields = [];

if ($name_itemdel === '') {
    $error_fields[] = 'name_itemdel';
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

//unset($_SESSION['itemcart']['id']);


$dell = array();
$one = true;
$cart = $_SESSION['itemcart'];
for ($i = 0; $i < count($cart); $i++){
  $id_prod = $cart[$i]['id_prod'];
  if (($id_prod == $name_itemdel) && ($one == true)) {
    $one = false;
  } else {
    $dell[count($dell)] = $cart[$i];
  }
}
$_SESSION['itemcart'] = $dell;

$response = [
		"status" => true,
		"message" => "Товар успешно удален из корзины",
];

echo json_encode($response);
}






?>
