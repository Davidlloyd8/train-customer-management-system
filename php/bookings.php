<?php
session_start();

require_once('connection.php');

$alert = '';

if (isset($_POST['btnb'])) {
    $name = mysqli_real_escape_string($mycon, $_POST['name']);
    $email = mysqli_real_escape_string($mycon, $_POST['email']);
    $train = mysqli_real_escape_string($mycon, $_POST['train']);
    $location = mysqli_real_escape_string($mycon, $_POST['location']);
    $price = mysqli_real_escape_string($mycon, $_POST['price']);
    $date_created = mysqli_real_escape_string($mycon, $_POST['date_created']);
    $str2 = "insert into bookingstb(name,email,train,location,price,date_created) values('$name', '$email', '$train', '$location', '$price', '$date_created')";
    $cmd2 = mysqli_query($mycon, $str2) or die('Unable to Create a Booking');
    $alert = "Train Booked Successfully";
}


?>