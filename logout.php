<?php 

    session_start();
    session_unset();
    session_destroy();

header('Location: index.php');
exit();

// echo "<script>alert('Logged Out')</script>";
