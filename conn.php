<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','sparks_sample');

// get the post records
$name = $_POST['name'];
$city = $_POST['city'];
$email = $_POST['email'];
$balance = $_POST['balance'];

// database insert SQL code
$sql = "INSERT INTO `sparks_sample` (`name`, `city`, `email`, `balance`) VALUES ('$name', '$city', '$email', '$balance')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>