<?php
require 'common.php';
if(isset($_SESSION['email'])){
header('location:products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container ">
            <div class="col-md-6" style="padding-top: 120px">
                <img src="signup.png">
            </div>
            <div class=" col-md-6 signupform">
                <h1>Sign Up</h1>
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type='text' placeholder="Name" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <input type='text' placeholder="E-mail" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <input type='text' placeholder="Password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <input type='text' placeholder="Phone" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <input type='text' placeholder="City" name="city" class="form-control" id="city">
                    </div>
                    <div class="form-group">
                        <input type='text' placeholder="Address" name="address" class="form-control" id="address">
                    </div>
                    <button type='text' class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>

