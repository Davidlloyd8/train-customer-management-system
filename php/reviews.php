<?php
session_start();

require_once('connection.php');

$alert = '';

if (isset($_POST['btnr'])) {
    $name = mysqli_real_escape_string($mycon, $_POST['name']);
    $email = mysqli_real_escape_string($mycon, $_POST['email']);
    $review = mysqli_real_escape_string($mycon, $_POST['review']);
    $stars = mysqli_real_escape_string($mycon, $_POST['stars']);
    $date_created = mysqli_real_escape_string($mycon, $_POST['date_created']);
    $str2 = "insert into reviewstb(name,email,review,stars,date_created) values('$name', '$email', '$review', '$stars', '$date_created')";
    $cmd2 = mysqli_query($mycon, $str2) or die('Unable to Submit Customer Reviews');
    $alert = "Customer Review submitted Successfully";
}


?>