<?php
    define("TITLE", "BikeTech Philippines");
    define("NAME","BikeTechPH");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="script.js"></script>
        <link rel="stylesheet" href="stylesheet/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        <?php echo TITLE; ?>
    </title>
    </head>
    <body>
        <header>
            <div class="box">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="equipment.php"><i class="fa fa-bars"></i>Equipment</a></li>
                    <li><a href="contactUs.php"><i class="fa fa-phone"></i>Contacts</a></li>
                    <li class="active"><a href="aboutUs.php"><i class="fa fa-globe"></i>About Us</a></li>
                </ul>
                <div class="logo"><img src="assets/btphlogo.png"></div>
                
            </div> 
            <!-- Responsive Nav -->
            <div class="topnav" id="myTopnav">
                <a href="index.php"><i class="fa fa-home"></i>&emsp;Home</a>
                <a href="equipment.php"><i class="fa fa-bars"></i>&emsp;Equipment</a>
                <a href="contactUs.php"><i class="fa fa-phone"></i>&emsp;Contacts</a>
                <a class="active" href="aboutUs.php"><i class="fa fa-globe"></i>&emsp;About Us</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </header>
        <section class="home-hero">
            <div class="container">
                <img class="main-hero-logo" src="assets/aboutUsLogo.png" alt="hero-logo">
                <h1 class="title"> Our Mission </h1>
                <span>BikeTech PH is fully committed in promoting healthy lifestyle for its customers. We, at BikeTech PH, dedicates our passion and expertise in developing a sustainable community through cycling products and services that will work for you.</span>
            </div>
        </section>
        
        <section class="about-us-section">
            <div class="container">
                <h1 class="about-us-text">About Us <br> BikeTech PH</h1>
                <p class="about-us-content">BikeTech PH is a bicycle shop that offers high-quality and innovative bike parts and accessories. BikeTech is established on the year 2021 and envisions to serve its customers for a longer run. We, at BikeTech PH, provides variety of accessories from frames to rimsets, and more. With our profound passion with cycling, we are delighted to help our customers in finding the finest bike parts and accessories that matches their needs. </p>
            </div>
        </section>
        
        <section class="values-section">
            <div class="container ">
                <img class="values-img" src="assets/values-img.jpg" alt="values-img">
                <h1 class="values-title">BikeTech PH Values</h1>
                <ul class="values-list">
                   <li class="values-list-item">We aim to continuously meet or exceed our customer expectations.</li>
                    <li class="values-list-item">We will operate using sustainable and quality products.</li>
                    <li class="values-list-item">We will create a safe space for cycling enthusiasts in improving their   cycling journey. </li>
                    <li class="values-list-item">We are devoted in sharing our passion and expertise in cycling life.</li>
                    <li class="values-list-item">We will relentlessly improve on our environmental ventures.</li>
                </ul>
            </div>
        </section>
        <div class="footer">
        <?php 
            echo '&copy; ', date('Y'), ' ', NAME, '. All Rights Reserved.'; 
        ?>
        </div>
    </body>
</html>