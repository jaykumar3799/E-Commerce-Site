<?php

require 'common.php';
$email=  mysqli_real_escape_string($con,$_POST['email']);
$password=  mysqli_real_escape_string($con,$_POST['password']);
$login_query="SELECT id,email_id FROM users WHERE email_id='$email' AND password='$password'";
$login_query_result=  mysqli_query($con, $login_query) or die(mysqli_error($con));
if(mysqli_num_rows($login_query_result)==1){
    $row=  mysqli_fetch_array($login_query_result);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$row['id'];
    header('location:products.php');
}
 else {
    header('location:login.php');    
}
        
?>



