<?php

$start = $_POST["start"];
$end = $_POST["end"];

$userId = $_COOKIE["id"];
$carId = $_COOKIE["carId"];

$mysql = new mysqli('localhost', 'root', '', 'luxuryrent');

$mysql->query("INSERT INTO `rent` (`userId`, `carId`, `dateOfReceiving`, `returnDate`) VALUES ('$userId', '$carId','$start', '$end')");

$mysql->close();

header("Location: pages/profile.php");
