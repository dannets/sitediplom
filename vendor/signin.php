<?php

session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
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
}

$password = md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "email" => $user['email'],
		"login" => $user['login'],
		"typep" => $user['typep']
    ];

    if ($_SESSION['itemcart']) {
      $curr_id = $_SESSION['itemcart'];

      $black_list = array();
      for ($i6 = 0; $i6 < count($curr_id); $i6++) {
        $black_list[count($black_list)] = $curr_id[$i6]['id_prod'];
      }
      $ress = array_count_values($black_list);
      $ress2 = array_unique($black_list);

      for ($i22 = 0; $i22 < count($ress2); $i22++) {

        $curr_id2 = $ress2[$i22];
        $value_cur = $ress[$ress2[$i22]];

        $id_usercurr = $user['id'];

        mysqli_query($connect, "INSERT INTO `cart`(`id_item`, `id_user`, `value`) VALUES ('$curr_id2','$id_usercurr','$value_cur');");

        unset($_SESSION['itemcart']);
      }
    }

    $response = [
        "status" => true
    ];

    echo json_encode($response);

} else {

    $response = [
        "status" => false,
        "message" => 'Не верный логин или пароль'
    ];

    echo json_encode($response);
}
?>
