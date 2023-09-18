<?php

session_start();
if ($_SESSION['email'] == ""){
    echo '<script language=javascript>window.open("../index.php","_parent")</script>';
}

if (isset($_REQUEST['btnlt'])) {
	session_destroy();
	header("location: ../index.php");
}
?>