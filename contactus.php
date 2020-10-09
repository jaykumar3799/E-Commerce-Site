<?php
include 'header.php';
session_start();?>

<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container" style="padding-top: 60px">
            <div class="row">
                <div class="col-md-9">
                    <h3>LIVE SUPPORT</h3>
                    <h4>24 Hours|7 Days a Week|365 Days a Year Live Technical Support</h4>
                    <p>The links on the left should direct you to how to contact us or resolve problems.
                        If you cannot find your issue listed there, 
                        please email us at info-en@wikimedia.org. Please refrain from emailing
                        about disagreements with content; they will not be resolved via email.</p>
                </div>
                <div class="col-md-3">
                    <img src="contacts.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <h3>CONTACT US</h3>
                    <div class="panel panel-default">
           
            <div class="panel-body">
                
                <form method="post" action="contactus_script.php">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                    <label for="message">Message</label>
                    <input type="text" name="message" class="form-control input-lg" id="message" >
               
                    <button type="text" class="btn btn-primary">Submit</button></form>
            </div>
            
                
        </div>
                </div>
                <div class="col-md-5">
                    <h3>Company Information:</h3>
                    <ul style="list-style-type: none">
                        <li>8th floor Block 'B' Devarabeesanahalli </li>
                        <li>Village,Varthur Hobli, Bengaluru East Taluk,</li>
                        <li>Bengaluru</li><br><br>
                        <li>Phone:0000 000 00</li><br><br>
                        <li>Fax:000 222 666</li><br><br>
                        <li>Email:info@mycompany.com</li><br><br>
                        <li>Follow on:Twitter, Facebook</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
        
</html>
<?php
include 'footer.php';?>

