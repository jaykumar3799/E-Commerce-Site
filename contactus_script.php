<?php

require 'common.php';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$insert_query="INSERT INTO contactus (name,email,message) values('$name','$email','$message')";
$insert_query_result=  mysqli_query($con, $insert_query) or die(mysqli_error($con));
header('location:contactus.php')?>
