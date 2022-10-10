<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$com = $_POST['com'];

require "sql.php";

$mysq1->query("INSERT INTO `send` (`name`, `mail`, `com`) VALUES('$name', '$mail','$com')");

$mysq1->close();

header('Location: /');
