<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
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
        <title>Setttings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container signupform">
            <div class="col-sm-offset-3 col-sm-6">
                <h1>Change Password</h1>
                <form method="post" action="settings_script.php">
                    <div class="form-group">
                        <input type='text' placeholder="Old Password" name="oldpassword" class="form-control" id="oldpassword">
                    </div>
                    <div class="form-group">
                        <input type='text' placeholder="New Password" name="newpassword" class="form-control" id="newpassword">
                    </div>
                    <div class="form-group">
                        <input type='text' placeholder="Re-Type New Password" name="retypenewpassword" class="form-control" id="retypenewpassword">
                    </div>
                    
                    <button type='text' class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
         <?php include 'footer.php';?>
    </body>
</html>