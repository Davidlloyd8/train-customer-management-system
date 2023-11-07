<?php
session_start();
$alert = ""; 

include('auth.php');

require_once('connection.php');

$date = date('d-M-Y', time());

if (isset($_POST['btnss'])) {
    $fname = mysqli_real_escape_string($mycon, $_POST['fname']);
    $lname = mysqli_real_escape_string($mycon, $_POST['lname']);
    $email = mysqli_real_escape_string($mycon, $_POST['email']);
    $acct_type = mysqli_real_escape_string($mycon, $_POST['acct_type']);
    $pnum = mysqli_real_escape_string($mycon, $_POST['pnum']);
    $pass = mysqli_real_escape_string($mycon, $_POST['pass']);
    $cpass = mysqli_real_escape_string($mycon, $_POST['cpass']);
    $address = mysqli_real_escape_string($mycon, $_POST['address']);
    $activation = mysqli_real_escape_string($mycon, $_POST['activation']);
    $name = $fname . " " . $lname;

    $_SESSION['name'] = $name;
    $_SESSION['acct_type'] = $acct_type;
    $_SESSION['pnum'] = $pnum;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;
    $_SESSION['activation'] = $activation;
    $_SESSION['pass'] = $pass;

    if ($pass != $cpass) {
        $alert = 'The Two passwords does not match!';
    } else {

        $date = date('d-M-Y', time());
        $sec = time();
        if (isset($_FILES['pic'])) {
            $allowed = array('image/jpeg', 'image/JPG', 'image/x-PNG', 'image/PNG', 'image/png', 'image/x-png');
            if (in_array($_FILES['pic']['type'], $allowed)) {
                $fd = 'profileimages/';
                $nf = 'tcms' . time();
                $pic = $fd . $nf . $_FILES['pic']['name'];
                if (move_uploaded_file($_FILES['pic']['tmp_name'], $fd . $nf . $_FILES['pic']['name'])) {

                    $str = "select * from usertb where email = '$email'";
                    $cmd = mysqli_query($mycon, $str) or die('No Connection');
                    $nr = mysqli_num_rows($cmd);
                    if ($nr > 0) {
                        $alert = $email . ' Has been used for another account!';
                    } else {

                        $str = "insert into admintb(name,email,phone,pics,address,password,acct_type,date_created,activation) values('$name', '$email', '$pnum', '$pic', 
                        '$address', '$pass', '$acct_type', '$date', '$activation')";
                        $cmd = mysqli_query($mycon, $str) or die ('Unable to Save');

                        $str = "insert into customertb(name,email,pics,password,acct_type,date_created) values('$name', '$email', '$pic', '$pass', '$acct_type', '$date')";
                        $cmd = mysqli_query($mycon, $str) or die('Unable to save');

                        $str2 = "insert into usertb(name,email,password,acct_type,activation) values('$name', '$email', '$pass', '$acct_type', '$activation')";

                        $cmd2 = mysqli_query($mycon, $str2) or die('Unable to Save');
                        $alert1 = 'Register Successfully';
                        echo "<script language=javascript>window.open('../index.php', '_parent')</script>";
                    }
                }
            } else {
                $alert = "Please Upload a valid JPEG or PNG file";
            }

            if (file_exists($_FILES['pic']['tmp_name']) && ($_FILES['pic']['tmp_name'])) {
                unlink($_FILES['pic']['tmp_name']);
            }
        }
    }
}
?>