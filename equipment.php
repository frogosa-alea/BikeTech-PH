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
                <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li class="active"><a href="equipment.php"><i class="fa fa-bars"></i>Equipment</a></li>
                <li><a href="contactUs.php"><i class="fa fa-phone"></i>Contacts</a></li>
                <li><a href="aboutUs.php"><i class="fa fa-globe"></i>About Us</a></li>
            </ul>
            <div class="logo"><img src="assets/btphlogo.png"></div>
        </div> 
        <!-- Responsive Nav -->
        <div class="topnav" id="myTopnav">
                <a href="index.php"><i class="fa fa-home"></i>&emsp;Home</a>
                <a class="active" href="equipment.php"><i class="fa fa-bars"></i>&emsp;Equipment</a>
                <a href="contactUs.php"><i class="fa fa-phone"></i>&emsp;Contacts</a>
                <a href="aboutUs.php"><i class="fa fa-globe"></i>&emsp;About Us</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
    </header>

 
    <div class="main">
        <section class="productlist">
            <h1>BikeTech PH Equipment</h1>
            <br>
            <div class="productcontainer">
                <div class="card">
                    <div class="title">MADDUX RIMSET</div>
                    <br>
                    <div class="image"><img src="assets/product1.jpg"></div>
                    <br>
                    <div class="text">Maddux 2.0 Disc with a use of aluminum clincher material and having its size of 700C. This type of wheel is a front wheel.</div>
                </div>
                <div class="card">
                    <div class="title">VAXA FORK</div>
                    <br>
                    <div class="image"><img src="assets/product2.jpg"></div>
                    <br>
                    <div class="text">New Zoom Vaxa 30 Mountain Bike Bicycle Hydraulic Suspension 26" Fork 120mm with a weight of 2.2kg. The color options are black/gold and white/gold.</div>
                </div>
                <div class="card">
                    <div class="title">SHIMANO HYDRAULIC BRAKES</div>
                    <br>
                    <div class="image"><img src="assets/product3.jpg"></div>
                    <br>
                    <div class="text">Hydraulic disc brake set consisting of BL-MT201 3-finger brake lever, SM-BH59 hose and BR-MT200 2-piston brake caliper, filled and bleed. The brake system offers an excellent brake force modulation and the proven One-Way-Bleeding system which allows easy maintenance.</div>
                </div>
                <div class="card">
                    <div class="title">SPEEDONE TORPEDO HUBS</div>
                    <br>
                    <div class="image"><img src="assets/product4.jfif"></div>
                    <br>
                    <div class="text">Speedone Torpedo Hubs uses a material AL T6 ALLOY and has a spoke hole of 32H. The color options are red, gold, blue and black.</div>
                </div>
                <div class="card">
                    <div class="title">LA BICI CYCLING HELMETS</div>
                    <br>
                    <div class="image"><img src="assets/product5.jpg"></div>
                    <br>
                    <div class="text">LA BICI Helmet can keep your head safe when cycling. This type of helmet comes with bright LED lights for high-visibility and its aerodynamic style brings good ventilation that is perfect for short or even in long rides.</div>
                </div>
                <div class="card">
                    <div class="title">CST JACK RABBIT SKINWALL TIRES</div>
                    <br>
                    <div class="image"><img src="assets/product6.png"></div>
                    <br>
                    <div class="text">This CST Jack Rabbit Skinwall Tires is an affordable and durable product. It is tubeless ready foldable bicycle tires. Its EPS puncture protection is incorporated into the casing  to help prevent flats.</div>
                </div>
                 <div class="card">
                    <div class="title">SHIMANO CLARIS R200 WITH BB</div>
                     <br>
                    <div class="image"><img src="assets/product7.jpg"></div>
                     <br>
                    <div class="text">Shimano Claris groupset is one of the lower-priced gearing options in the brand's hierarchy. It is an eight-speed system, with the capacity for up to 32T cassette at the back and double and triple options at the front.</div>
                </div>
                 <div class="card">
                    <div class="title">PRO STEM</div>
                     <br>
                    <div class="image"><img src="assets/product8.jpg"></div>
                     <br>
                    <div class="text">The PRO stem is made out of a 3D-forged aluminum stem with a 4-bolt clamp (31, 8mm) and a discreet optic. This stem is equipped with headloc and suitable for mounting both ways, positive and negative angle.</div>
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