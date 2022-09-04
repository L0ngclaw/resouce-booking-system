<?php

require 'config.php';

$date = $_POST["Date"];
$atype = $_POST["auditorium"];
$mobile = $_POST["Mnumber"];
$email = $_POST["email"];
$qty = $_POST["NoOfPeople"];

$sql = "INSERT INTO auditoriumbooking (	bDate, auditoriumType, contactNo, email, noOfpeople) VALUES ('$date','$atype',$mobile, '$email',$qty)";

if($conn->query($sql)){
	echo "<script> alert('Record added succesfully!!!')</script>";
}
else{
	echo "<script> alert('Error: Could not be able to excute the query. ')</script>";
	// echo $sql;
}


?>