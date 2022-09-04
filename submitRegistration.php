<?php
include_once 'config.php';

    if(isset($_POST['btnSubmit']))
    {
        $usertype = $_POST['user'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $username = $_POST['uname'];
        $genders = $_POST['gender'];
        $dob = $_POST['birthDate'];
        $phone = $_POST['mobile'];
        $mail = $_POST['email'];
        $adress = $_POST['userAddress'];
        $passw = $_POST['pswd'];
        
        $sql = "INSERT INTO users(user, fname, lname, uname, gender, birthDate, mobile, email, userAddress, pswd) VALUES ('$usertype','$firstname', '$lastname', '$username', ' $genders', '$dob', ' $phone', '$mail','$adress', '$passw')";
    }

    if (mysqli_query($conn, $sql)){
		echo "<script>alert('Record inserted successfully!')</script>";
		header("Location:index.php");
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);

?>