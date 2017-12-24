<?php

include "dbconnect.php";

$userID = $_POST["userID"];
$role = $_POST["role"];


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$address = $_POST["address"];
$birthdate = $_POST["birthdate"];
$personalhomepage = $_POST["personalhomepage"];
$mobile = $_POST["mobile"];
$officePhone = $_POST["officephone"];
$city = $_POST["city"];
$country = $_POST["country"];
$email = $_POST["email"];

$sql = "UPDATE users
SET firstname = '$firstname', lastname= '$lastname', username='$username', address='$address', personalhomepage='$personalhomepage', mobile='$mobile', officephone='$officePhone', 
city='$city', country='$country', email='$email', role='$role', birthdate='$birthdate'
WHERE Id =".$userID;


if ($conn->query($sql)  === TRUE) {
	$response_message = "Success";
	$response_code = "1";

	header('location: user-detail.php?userID='.$userID);
	//header('Location: http://www.example.com/');
} else {
	$response_message = "Error";
	$response_code = "0";
	echo 'error';
}



?>