<?php

session_start();

require_once('connection.php');

$alert = '';

if (isset($_POST['btnf'])) {
    $title = mysqli_real_escape_string($mycon, $_POST['title']);
    $message = mysqli_real_escape_string($mycon, $_POST['message']);
    $date_created = mysqli_real_escape_string($mycon, $_POST['date_created']);
    $str2 = "insert into faqtb(title,message,date_created) values('$title', '$message', '$date_created')";
    $cmd2 = mysqli_query($mycon, $str2) or die('Unable to Save FAQ');
    $alert = "FAQ Added Successfully";
}
?>