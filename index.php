<?php 
require 'common.php';
if (isset($_SESSION['email'])){
header('location:products.php');
}?>
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
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container-fluid" style="margin-top: 60px">
           
            <div class="row text-center"><div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="phone1.jpg" alt='Camera'>
                        <div class="caption">
                            
                            <p>Rs. 36000, 4GB RAM, 64GB Internal, 12MP Front and Rear camera</p>
                            <button type="text" class="btn btn-primary btn-block">Order Now!</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="phone2.jpg" alt='Watch'>
                        <div class="caption">
                            
                            <p>Rs. 10000, 4GB RAM, 16GB Internal, 12MP Front and 8MP Rear camera</p>
                            <button type="text" class="btn btn-primary btn-block">Order Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="phone3.jpg" alt='Shirt'>
                        <div class="caption">
                            
                            <p>Rs. 20000, 4GB RAM, 128GB Internal, 12MP Front</p>
                            <button type="text" class="btn btn-primary btn-block">Order Now!</button>
                        </div>
                    </div>
                </div></div><div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="phone4.png" alt='Shirt'>
                        <div class="caption">
                            
                            <p>Rs. 36000, 4GB RAM, 32GB Internal, 12MP Front and Rear camera, AMOLED Screen</p>
                            <button type="text" class="btn btn-primary btn-block">Order Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="phone5.jpg" alt='Shirt'>
                        <div class="caption">
                            
                            <p>Rs. 3000, 3GB RAM, 64GB Internal, 10MP Front and Rear camera</p>
                            <button type="text" class="btn btn-primary btn-block">Order Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="phone6.jpg" alt='Shirt'>
                        <div class="caption">
                           
                            <p>Rs. 6000, 4GB RAM, 64GB Internal, 12MP Front and Rear camera</p>
                            <button type="text" class="btn btn-primary btn-block">Order Now!</button>
                        </div>
                    </div>
                </div></div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
