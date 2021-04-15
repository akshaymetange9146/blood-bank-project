<?php
session_start();
$username=$_SESSION['username'];
if(session_destroy()){
header("location:index.php");
}

?>
