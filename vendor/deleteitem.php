<?php

session_start();
require_once 'connect.php';

$name_citem = $_POST['name_citem'];

$error_fields = [];

if ($name_citem === '') {
    $error_fields[] = 'name_citem';
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
	
	mysqli_query($connect, "DELETE FROM `items` WHERE `ID` = $name_citem;");

$response = [
		"status" => true,
		"message" => "Товар успешно удален",
];
	
echo json_encode($response);
}






?>
