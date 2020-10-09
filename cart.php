<?php
session_start();
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
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container cart">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs. 0</td>
                            <td><a href="success.php"><button type="text" class='btn btn-primary'>Confirm Order</button></a></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
