<?php

session_start();
require_once 'connect.php';

$name_item = $_POST['name_item'];
$price = $_POST['price'];
$catt = $_POST['catt'];
$catt2 = $_POST['catt2'];
$info_item = $_POST['info_item'];

$error_fields = [];

if ($name_item === '') {
    $error_fields[] = 'name_item';
}

if ($price === '') {
    $error_fields[] = 'price';
}

if ($catt === '') {
    $error_fields[] = 'catt';
}

if ($catt2 === '') {
    $error_fields[] = 'catt2';
}

if ($info_item === '') {
    $error_fields[] = 'info_item';
}

if (!$_FILES['image_item']['name']) {
    $error_fields[] = 'image_item';
} else {
	$path = 'files/img/' . time() . $_FILES['image_item']['name'];
    if (!move_uploaded_file($_FILES['image_item']['tmp_name'], '../' . $path)) {
        $response = [
            "status" => false,
            "type" => 2,
            "message" => "Ошибка при загрузке изображения",
        ];
        echo json_encode($response);
    }
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
	mysqli_query($connect, "INSERT INTO `items` (`name_item`, `price`, `catt`, `pod_catt`, `info`, `image`) VALUES ('$name_item', '$price', '$catt', '$catt2', '$info_item', '$path')");

	$response = [
		"status" => true,
		"message" => "Товар успешно добавлен",
	];

	echo json_encode($response);
}



?>
