<?php

session_start(); 
require_once 'config.php';
include_once 'loginFunctions.php';

    

//     if (isset($_POST["submitLogin"])) {

//         $username = $_POST["uname"];
//         $passw = $_POST["psword"];

//     // if(emptyInputLogin($username, $passw) !== false) {
//     //     echo"<script>alert('Error in submitLogin 14')</script>";
//     //     header("location: index.php");
//     //     exit();
//     // } 

//     loginUser($conn, $username, $passw);

// } else {
//     // echo"<script>alert('Error in submitLogin 22')</script>";
//     header("location: index.php");
//     exit();
// }


if (isset($_POST["submitLogin"])) {

    $username = $_POST["uname"];
    $passw = $_POST["psword"];

    $sql = "SELECT * FROM users WHERE uname = '$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['uname'] === $username && $row['pswd'] === $passw) {

            echo "Logged in!";

            $_SESSION['uname'] = $row['uname'];

            $_SESSION['name'] = $row['fname'];

            $_SESSION['id'] = $row['ID'];

            header("Location: index.php");

            exit();
    } else {

        header("Location: index.php?error=Incorect User name or password");

        exit();

    }
}
}
?>