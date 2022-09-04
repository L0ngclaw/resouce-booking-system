<?php 

require('config.php');

if (isset($_POST['physics-btn'])) {
    global $conn;

    $teacherId = $_POST['teacherId'];
    $date = $_POST['date'];
    $startTime = $_POST['stime'];
    $endTime = $_POST['etime'];
    $type = 'physics';

    $sql = "INSERT INTO lab_booking(teacherId, date, start, end, type) VALUES ('$teacherId', '$date', '$startTime', '$endTime', '$type')";


    mysqli_query($conn, $sql);
}

if (isset($_POST['bio-btn'])) {
    global $conn;

    $teacherId = $_POST['teacherId'];
    $date = $_POST['date'];
    $startTime = $_POST['stime'];
    $endTime = $_POST['etime'];
    $type = 'bio';

    $sql = "INSERT INTO lab_booking(teacherId, date, start, end, type) VALUES ('$teacherId', '$date', '$startTime', '$endTime', '$type')";


    mysqli_query($conn, $sql);
}

if (isset($_POST['chemistry-btn'])) {
    global $conn;

    $teacherId = $_POST['teacherId'];
    $date = $_POST['date'];
    $startTime = $_POST['stime'];
    $endTime = $_POST['etime'];
    $type = 'chemistry';

    $sql = "INSERT INTO lab_booking(teacherId, date, start, end, type) VALUES ('$teacherId', '$date', '$startTime', '$endTime', '$type')";


    mysqli_query($conn, $sql);
}

?>