<?php

$host = 'localhost'; // адрес сервера
$database = 'searchajax'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$link = mysqli_connect($host, $user, $password, $database)
                    or die("Ошибка " . mysqli_error($link));
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>
