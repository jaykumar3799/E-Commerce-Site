<?php

require 'common.php';
$first_name=  mysqli_real_escape_string($con,$_POST['name']);
$email=  mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$phone=  mysqli_real_escape_string($con,$_POST['phone']);
$select_query="SELECT id FROM users WHERE email_id='$email'";
$select_query_result=  mysqli_query($con, $select_query) or die(mysqli_error($con));
if (mysqli_num_rows($select_query_result)>0){
    echo 'Already Loged in';
}
 else {
$insert_query="INSERT INTO users(email_id,first_name,phone,password) values('$email','$first_name','$phone','$password')";
$insert_query_result=  mysqli_query($con,$insert_query);
$_SESSION['email']=$email;
$_SESSION['user_id']=  mysqli_insert_id($con);
header('location:products.php');
}