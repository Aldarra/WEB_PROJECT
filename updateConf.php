<?php

include "dbconnect.php";

$cid = $_POST["cid"];
echo  'the user id is = '. $cid;



$name = $_POST["name"];
$location = $_POST["location"];
$description = $_POST["description"];
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$rank = $_POST["rank"];
$location = $_POST["location"];

$sql = "UPDATE conference
SET name = '$name', location= '$location', startdate='$startdate', enddate='$enddate', rank='$rank', location='$location'
WHERE id =".$cid;
echo $sql;
echo $conn->query($sql);


if ($conn->query($sql)  === TRUE) {
	$response_message = "Success";
	$response_code = "1";

	header('location: user-detail.php?userID='.$cid);
	//header('Location: http://www.example.com/');
} else {
	$response_message = "Error";
	$response_code = "0";
	echo 'error';
}



?>