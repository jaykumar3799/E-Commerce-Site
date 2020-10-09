<?php

require 'common.php';
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$e=$_SESSION['email'];
$query="SELECT * FROM users WHERE password='$oldpassword'";
$query_result=  mysqli_query($con, $query) or die(mysqli_error($con));
$row1=  mysqli_fetch_array($query_result);
if (mysqli_num_rows($query_result)>0){
    $update_query="UPDATE users SET password='$newpassword' WHERE password='$oldpassword'";
    $update_query_result=  mysqli_query($con, $update_query);
    header('location:settings.php');
}
 else {
    header('location:settings.php'); 
}
