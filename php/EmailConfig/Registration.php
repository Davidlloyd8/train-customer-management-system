<?php
if (isset($_POST['btns'])){
    $fname = mysqli_real_escape_string($mycon, $_POST['fname']);
    $lname = mysqli_real_escape_string($mycon, $_POST['lname']);
    $email = mysqli_real_escape_string($mycon, $_POST['email']);


$to = "$email";
$subject = 'Welcome Onboard';
$from = "tcms@gmail.com";
 
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
$message .= "<p style='color:#080;font-size:18px;'>Thank you for signing up, $fname $lname</p>";
$message .= "<p style='color:#080;font-size:18px;'>We built TCMS to help you streamline customer interactions and improve customer service for a train transportation company. This system allows customers to lodge complaints, book train travel, and enables administrators to review customer complaints and create sub-administrator accounts for managing</p>";
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo "<script language=javascript>window.open('index.php', '_parent')</script>";
} else{
    echo "<script language=javascript>window.open('error404.php', '_parent')</script>";
}
}
?>