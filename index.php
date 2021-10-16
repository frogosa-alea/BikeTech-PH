<?php
    define("TITLE", "BikeTech Philippines");
    define("NAME","BikeTechPH");
?>

<html>
<head>
    <meta charset="utf-8">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>
        <?php echo TITLE; ?>
    </title>
</head>
<body>
    <header>
        <div class="box">
            <ul>
                <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="equipment.php"><i class="fa fa-bars"></i>Equipment</a></li>
                <li><a href="contactUs.php"><i class="fa fa-phone"></i>Contacts</a></li>
                <li><a href="aboutUs.php"><i class="fa fa-globe"></i>About Us</a></li>
            </ul>
            <div class="logo"><img src="assets/btphlogo.png"></div>
        </div> 
        <!-- Responsive Nav -->
        <div class="topnav" id="myTopnav">
                <a class="active" href="index.php"><i class="fa fa-home"></i>&emsp;Home</a>
                <a href="equipment.php"><i class="fa fa-bars"></i>&emsp;Equipment</a>
                <a href="contactUs.php"><i class="fa fa-phone"></i>&emsp;Contacts</a>
                <a  href="aboutUs.php"><i class="fa fa-globe"></i>&emsp;About Us</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
    </header>

    
    <div class="main">
        <section class="banner">
                <div class="bannertext">
                    <h2>Welcome to <br><span> BikeTech PH</span></h2>
                    <h3>We offer high quality and innovative products</h3>
                    <a href="aboutUs.php" class="btn">Know More</a>
                </div>
        </section>
        
        <section class="about">
            <div class="heading">
                <h2>ABOUT US</h2>
            </div>
            <div class="content">
                <div class="contentbx w50">
                    <h3>We offer high quality and innovative products.</h3>
                    <br>
                    <p>BikeTech PH is a bicycle shop that offers high-quality and innovative bike parts and accessories. BikeTech is established on the year 2021 and envisions to serve its customers for a longer run. We, at BikeTech PH, provides variety of accessories from frames to rimsets, and more. With our profound passion with cycling, we are delighted to help our customers in finding the finest bike parts and accessories that matches their needs</p>
                </div>
                <div class="w50">
                    <img src="assets/abouthpimgh.jpg" class="abtimg">
                </div>
            </div>
        </section>
      
        <section class="history">
            <div class="heading">
                <h2>HISTORY</h2>
            </div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/history.jpg" alt="History1" width="1000" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/history2.jpg" alt="History2" width="1000" height="500">
                        <div class="carousel-caption">
                            <h3 style="color: #d4af37; background: black; padding: 5px; opacity: 0.7;">The Bicycle's Bumpy History</h3>
                            <p style="color: black; background: #d4af37; padding: 15px; opacity: 0.8;">Two men ride on early bicycles known as the Hobby Horse and ‘boneshaker’. The Hobby Horse was invented by Karl Von Drais in 1818 and was operated by kicking against the street. By 1863, cranks and pedals were added to to create the ‘boneshaker’. Known by many names, including the “velocipede,” “hobby-horse,” “draisine” and “running machine,” this early invention has made Drais widely acknowledged as the father of the bicycle.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/history3.jpg" alt="History3" width="1000" height="500">
                           <div class="carousel-caption">
                            <h3 style="color: #d4af37; background: black; padding: 5px; opacity: 0.7;">The Evolution of Bicycle</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/history4.jpg" alt="History4" width="1000" height="500">
                        <div class="carousel-caption">
                            <h3 style="color: #d4af37; background: black; padding: 5px; opacity: 0.7;">Women on Bicycle during 19th Century</h3>
                            <p style="color: black; background: #d4af37; padding: 15px; opacity: 0.8;">During their time, female cyclist did not have it easy. Their role in society as well as their dress code at that time made riding bikes very difficult. They either had to transgress the dress code and thus the ethical code - exposed their legs were not proper and trousers were rather inappropriate - or they could opt for women’s bicycles, which were extremely unstable.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        
        <section class="equipment">
            <div class="heading">
                <h2>OUR EQUIPMENT</h2>
            </div>
            <div class="content">
                <div class="equipmentbx">
                    <img src="assets/product1.jpg">
                </div>
                 <div class="equipmentbx">
                    <img src="assets/product8.jpg">
                </div>
                 <div class="equipmentbx">
                    <img src="assets/product3.jpg">
                </div>
                <div class="equipmentbx">
                    <img src="assets/product5.jpg">
                </div>
            </div>
            <div class="heading">
                <a href="equipment.php" class="btn">View More</a>
            </div>
        </section>
        
        <section class="health">
            <div class="heading white">
                <h2>HEALTH INFORMATION</h2>
                <h4>Benefits of Cycling</h4>
            </div>
            <div class="content">
                <div class="healthbx">
                    <img src="assets/heart.png">
                    <h2>FOR THE HEART</h2>
                    <p>Regular cycling has multiple benefits, from a healthy heart to fit muscles to a better metabolism. It can cut heart disease and cancer risk. This raises your heart rate and gets the blood pumping around your body, so as a result, it was found that getting a hard workout can lower blood pressure.</p>
                </div>
                <div class="healthbx">
                    <img src="assets/mind.png">
                    <h2>FOR THE MIND</h2>
                    <p>Cycling can improve your mood and can promote positive mental health. Life can be tough sometimes, but through this type of exercise, it helps you to reduce the stress you are experiencing. Not only has it been proven that cardiovascular exercise helps to reduce stress and ease anxiety, but cycling, in particular, has been said to benefit the rider’s overall state of mind.</p>
                </div>
                <div class="healthbx">
                    <img src="assets/body.png">
                    <h2>FOR THE BODY</h2>
                    <p>One of the physical benefits of cycling is the improvement of posture and coordination. Cycling is a healthy routine that we should consider to our workouts. Our body needs physical exercise once in a while and cycling is one of the exercises that can help your cardiovascular endurance.</p>
                </div>
            </div>
        </section>
        
        
    </div>
    
    <div class="footer">
        <?php 
            echo '&copy; ', date('Y'), ' ', NAME, '. All Rights Reserved.'; 
        ?>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>