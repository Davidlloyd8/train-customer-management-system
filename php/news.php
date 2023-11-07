<?php
session_start();

require_once('connection.php');

$alert='';

if (isset($_POST['btnn'])) {
    $title = mysqli_real_escape_string($mycon, $_POST['title']);
    $news = mysqli_real_escape_string($mycon, $_POST['news']);
    $date_created = mysqli_real_escape_string($mycon, $_POST['date_created']);
    $author = mysqli_real_escape_string($mycon, $_POST['author']);
    if (isset($_FILES['image'])) {
        $allowed = array('image/jpeg', 'image/JPG', 'image/x-PNG', 'image/PNG', 'image/png', 'image/x-png');
        if (in_array($_FILES['image']['type'], $allowed)) {
            $fd = 'newsimages/';
            $nf = 'tcms/news/' . time();
            $pic = $fd . $nf . $_FILES['image']['name'];
            if (move_uploaded_file($_FILES['image']['tmp_name'], $fd . $nf . $_FILES['image']['name'])) {
                $str2 = "insert into newstb(title,news,image,author,date_created) values('$title', '$news', '$pic', '$author' ,'$date_created')";
                $cmd2 = mysqli_query($mycon, $str2) or die('Unable to Save News');
                $alert ="News created successfully";
            }
        } else {
            $alert = "Please Upload a valid JPEG or PNG file";
        }

        if (file_exists($_FILES['image']['tmp_name']) && ($_FILES['image']['tmp_name'])) {
            unlink($_FILES['image']['tmp_name']);
        }
    }
}

?>