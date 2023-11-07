<?php
session_start();

require_once('connection.php');

$alert = '';

if (isset($_POST['btncc'])) {
    $name = mysqli_real_escape_string($mycon, $_POST['name']);
    $model = mysqli_real_escape_string($mycon, $_POST['model']);
    $bio = mysqli_real_escape_string($mycon, $_POST['bio']);
    $availability = mysqli_real_escape_string($mycon, $_POST['availability']);
    $date_created = mysqli_real_escape_string($mycon, $_POST['date_created']);
    $str2 = "insert into reviewstb(name,model,bio,availability,date_created) values('$name', '$model', '$bio', '$availability', '$date_created')";
    $cmd2 = mysqli_query($mycon, $str2) or die('Unable to Submit Trains Availability');
    $alert = "Train Availability submitted Successfully";
}


?>