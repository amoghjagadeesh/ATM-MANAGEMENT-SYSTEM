<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php "ATM Management System"; ?> </title>
        <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <style>
 
 </style>
    </head>
    <body  style="background-color:black">
    <link href="style.css" rel="stylesheet" type="text/css"/> 
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <p>
                    Welcome to CoderBank ATM 
                </p>
            </div>
        </div>
    </div>
    
        <div class="content">
            <div class="banner-image" style="background-image:url(img1/atm1.jpg)">
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1><b>Please Insert Your Card</b></h1>
                        <br><br><br>
                        <a href="pin.php" class="button">Continue</a>
                    </div>
                    </div>
            </div>
        </div>
    <footer class="foot">
                    <div class="container">
                        <p align="center">
                            Copyright © CoderBank. All Rights Reserved | Contact Us: +91 90000 00000
                        </p>
                    </div>
                </footer>
    </body>
</html>
