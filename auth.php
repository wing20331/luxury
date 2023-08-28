<?php

$login = $_POST['auth_login'];
$password = $_POST['auth_password'];

$mysql = new mysqli('localhost', 'root', '', 'luxuryrent');

$result = $mysql->query("SELECT * FROM `user` WHERE `email` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();

$mysql->close();

setcookie("id", $user["id"], time() + 300, "/");


if (count($user) == 0) {
    echo ("<script type='text/javascript'> alert('Пользователь не найден'); </script>");
} else {
    header("Location: pages/profile.php");
}
