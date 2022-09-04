<?php

require 'config.php';

$date = $_POST["Date"];
$spool = $_POST["SwimmingPool"];
$mobile = $_POST["Mnumber"];
$email = $_POST["email"];
$qty = $_POST["NoOfPeople"];

$sql = "INSERT INTO poolbooking (	bDate,	poolType, 	contactNo, email, 	noOfpeople) VALUES ('$date','$spool',$mobile, '$email',$qty)";

if($conn->query($sql)){
	echo "<script> alert('Record added succesfully!!!')</script>";
}
else{
	echo "<script> alert('Error: Could not be able to excute the query. ')</script>";
	// echo $sql;
}


?>