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
	
	mysqli_query($connect, "DELETE FROM `cart` WHERE `id_item` = $name_itemdel AND `id_user` = $user_id");

$response = [
		"status" => true,
		"message" => "Товар успешно удален из корзины",
];
	
echo json_encode($response);
}






?>
