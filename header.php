<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if(isset($_SESSION['email'])){?>
                    <a href="products.php" class="navbar-brand">E-Store</a> <?php } 
                    else {?>
                    <a href="index.php" class="navbar-brand">E-Store</a>
                   <?php }?>                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['email'])){?>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li><?php }
                     else { ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-book"></span>About Us</a></li>
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li><?php }?>
                </ul>
                    </div> 
            </div>
        </nav>
            <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

