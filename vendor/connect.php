<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'sitetest');

    if (!$connect) {
        die('Error connect to DataBase');
    }