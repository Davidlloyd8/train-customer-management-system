<?php
if (isset($_POST['btns'])){
    $name = mysqli_real_escape_string($mycon, $_POST['name']);
    $phone = mysqli_real_escape_string($mycon, $_POST['phone']);
    $email = mysqli_real_escape_string($mycon, $_POST['email']);
    $type = mysqli_real_escape_string($mycon, $_POST['subject']);
    $msg = mysqli_real_escape_string($mycon, $_POST['message']);


$to = 'tcms@gmail.com';
$subject = "$type";
$from = "$email";
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">TRAIN CUSTOMER MANAGEMENT SYSTEM</h1>';
$message .= "<p style='color:#080;font-size:18px;'>Thank You For Contacting Us <br> Below is what you submitted</p>";
$message .= "<p style='color:#080;font-size:18px;'>Name: $name</p>";
$message .= "<p style='color:#080;font-size:18px;'>Email: $email</p>";
$message .= "<p style='color:#080;font-size:18px;'>Phone: $phone</p>";
$message .= "<p style='color:#080;font-size:18px;'>Message Title: $type</p>";
$message .= "<p style='color:#080;font-size:18px;'>Message Body: $msg</p>";
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo "<script language=javascript>window.open('index.php', '_parent')</script>";
} else{
    echo "<script language=javascript>window.open('error404.php', '_parent')</script>";
}
}
?>