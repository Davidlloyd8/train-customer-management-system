<?php

session_start();

require_once('connection.php');

$alert = '';

if (isset($_POST['btncc'])) {
    $name = mysqli_real_escape_string($mycon, $_POST['name']);
    $email = mysqli_real_escape_string($mycon, $_POST['email']);
    $type = mysqli_real_escape_string($mycon, $_POST['type']);
    $complaint = mysqli_real_escape_string($mycon, $_POST['complaint']);
    $review = mysqli_real_escape_string($mycon, $_POST['review']);
    $date_review = mysqli_real_escape_string($mycon, $_POST['date_review']);
    $feedback = mysqli_real_escape_string($mycon, $_POST['feedback']);
    $date_created = mysqli_real_escape_string($mycon, $_POST['date_created']);
    $str2 = "insert into complainttb(name,email,type,complaint,review,date_review,feedback,date_created) values('$name', '$email', '$type', '$complaint', '$review',
    '$date_review', '$feedback', '$date_created')";
    $cmd2 = mysqli_query($mycon, $str2) or die('Unable to Submit Customer Complaint');
    $alert = "Customer Complain submit Successfully";
}
?>