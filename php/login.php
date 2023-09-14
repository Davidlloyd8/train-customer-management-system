<?php
session_start();

require_once('connection.php');

if (isset($_POST['btnl'])) {
  $email = mysqli_real_escape_string($mycon,$_POST['email']);
  $pwd = mysqli_real_escape_string($mycon,$_POST['pass']);
  $email = stripslashes($email);
  $pwd = stripslashes($pwd);

    $str = "select * from tcms where email = '$email'";
    $cmd = mysqli_query($mycon, $str) or die ('No Connection 404');
    $nr = mysqli_num_rows($cmd);
    if ($nr > 0){
      $rd = mysqli_fetch_array($cmd);
      $name = $rd['name'];
      $acct_type = $rd['acct_type'];
      $email = $rd['email'];
      $pass = $rd['password'];
      $date_created = $rd['date_created'];

      if ($pwd==$pass){

        $_SESSION['name'] = $rd['name'];
        $_SESSION['acct_type'] = $rd['acct_type'];
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $rd['password'];
        $_SESSION['date'] = $rd['date_created'];

        $k ='admin'; $k1='customer';
        if ($act_type==$k){
         echo '<script language = javascript>window.open("admin.php","_parent")</script>';
        }
        elseif ($act_type==$k1){
         echo '<script language = javascript>window.open("customer.php","_parent")</script>';
        }
      }
      else{
        $alert = 'Incorrect Username/Password';
      }
    }
    else{
      $alert = 'Incorrect Username/Password';
    }
}

?>