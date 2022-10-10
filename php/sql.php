<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "konkurs";
$mysq1 = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
    die("Data Base connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
} else {
    # echo "Connection = success!\n" . mysqli_get_host_info($connection) . "<br />";
}

mysqli_query($mysq1, "SET NAMES utf8");
