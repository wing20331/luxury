<?php

$cookie = $_COOKIE["id"];

$name = $_POST['name'];
$surname = $_POST['surname'];
$secondName = $_POST['secondName'];
$dateOfBirth = $_POST['dateOfBirth'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$driversLicense = $_POST['driversLicense'];
$country = $_POST['country'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

if ($password != $passwordRepeat) {
    header("Location: pages/profile.php");
} else {
    $mysql = new mysqli('localhost', 'root', '', 'luxuryrent');

    $mysql->query("UPDATE `user` SET `name`='$name', `surname`='$surname', `secondName`='$secondName', `dateOfBirth`='$dateOfBirth', `phoneNumber`='$phoneNumber', `email`='$email', `driversLicense`='$driversLicense', `country`='$country', `password`='$password' WHERE `id`='$cookie'");

    $mysql->close();

    header("Location: pages/profile.php");
}
