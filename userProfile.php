<?php

$mysql = new mysqli('localhost', 'root', '', 'luxuryrent');

$cookie = $_COOKIE["id"];

$result = $mysql->query("SELECT * FROM `user` WHERE `id` = '$cookie'");

$user = $result->fetch_assoc();

$rent = mysqli_query($mysql, "SELECT * FROM `rent` WHERE `userId` = '$cookie'");

$mysql->close();

function countDaysBetweenDates($d1, $d2)
{
    $d1_ts = strtotime($d1);
    $d2_ts = strtotime($d2);

    $seconds = abs($d1_ts - $d2_ts);
    
    return floor($seconds / 86400);
}
