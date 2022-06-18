<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/leafnowStore.png" />
        <title>Leaf Now Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/style1.css" type="text/css">

    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We Sell Plants and Seeds.</h1>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
            <h3 class="prt">Products</h3>
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/air-purifier.jpg" alt="Air Purifying Plants Packs">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Air Purifying Plants Packs</p>
                                        <p>NASA's Clear Air Study has proved that air purifying plants can create a huge difference to the air inside your home. Further, it was also stated that . . . </p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/flower--seed.jpg" alt="Flower Seeds">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Flower Seeds</p>
                                    <p>Who doesn’t love beautiful colors blooming their gardens? Flowers are a thing of beauty and as we all know that a thing of beauty is a thing of joy</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/micro-microgreen-seeds.jpg" alt="microseeds">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Microgreen Seeds</p>
                                   <p>Do you believe in organic living? Are you looking to add some microgreen elements to your life? Want to be self-reliant? Then our microgreen seeds are all. . .</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Leaf Now | Contact Us: +91 90000 00000</p>
                  
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>