<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

if(!empty($email)){
	


$query = "INSERT INTO user(name, email, gender)VALUES('$name', '$email', '$gender')";
$exe = mysqli_query($conn, $query);
}
header('location:read.php');



?>