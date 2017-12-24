<?php
session_start();
include "dbconnect.php";

if(isset($_POST['username']) && isset($_POST['password'])){

$sql = "SELECT * FROM users WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
$result = $conn->query($sql);

if (mysqli_num_rows($result)>0){
    $data = $result->fetch_assoc();
    $_SESSION['logged_user'] = array('id' => $data['id'], 'firstname' => $data['firstname'], 'lastname' => $data['lastname'], 'role' => $data['role']);
    //redirect to homepage if username and password are correct 
 


    header("Location: index.php");
}



else {
    echo "YOURE NOT AUTHROIZED";
}
}


?>