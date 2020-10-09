<?php
require 'common.php';
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
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <?php include 'header.php';?>
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Login</h2>
            </div>
            <div class="panel-body">
                <p>Login to make purchase</p>
                <form method="post" action="login_submit.php">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" id="password">
               
                    <button type="text" class="btn btn-primary">Login</button></form>
            </div>
            <div class="panel-footer">
                <a href="signup.php">Don't have an account? Register</a>
            </div>
                
        </div>
            </div>
            </div>
        </div>
         <?php include 'footer.php';?>
    </body>
</html>

