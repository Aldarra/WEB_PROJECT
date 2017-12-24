<?php
include "dbconnect.php"
$name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "insert into users values (null, null, '$password', '$name', null, null, null, null, null, null, null, null, null, '$email', null)";

header ("Location: index.php");


?>