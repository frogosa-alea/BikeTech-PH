<?php   
    define("TITLE", "BikeTech Philippines");
    define("NAME","BikeTechPH");

    //No input yet
    $message_sent = false;
    //Validation
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

        //Filter Email
        if(ctype_alpha($_POST['name']) !=false){
            //Form Variables
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $message = $_POST['message'];
            $subject = 'Contact Form';

            //Email Contents
            $to = "frogosaa.qcydob31@gmail.com";
            $body = "";

            //Email Content Concatenation
            $body.= "From: ".$userName. "\r\n";
            $body.= "Email: ".$userEmail. "\r\n";
            $body.= "Message: ".$message. "\r\n";

            //Send Email
            mail($to,$subject,$body);
            
            $message_sent = true;
            echo '<script type="text/javascript">alert("Email Has Been Sent!");</script>';
        }
        else{
            echo '<script type="text/javascript">alert("Email Failed! Please enter valid information.");</script>';
            $invalid_class_name = "Please enter a valid name.";
        }
    }
?>

<html>
<head>
    <meta charset="utf-8">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1f7074acbb.js" crossorigin="anonymous"></script>
    <title>
        <?php echo TITLE; ?>
    </title>
</head>
<body>
    <header>
        <div class="box">
            <ul>
                <li ><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="equipment.php"><i class="fa fa-bars"></i>Equipment</a></li>
                <li class="active"><a href="contactUs.php"><i class="fa fa-phone"></i>Contacts</a></li>
                <li><a href="aboutUs.php"><i class="fa fa-globe"></i>About Us</a></li>
            </ul>
            <div class="logo"><img src="assets/btphlogo.png"></div>
        </div> 
        <!-- Responsive Nav -->
        <div class="topnav" id="myTopnav">
                <a href="index.php"><i class="fa fa-home"></i>&emsp;Home</a>
                <a href="equipment.php"><i class="fa fa-bars"></i>&emsp;Equipment</a>
                <a class="active" href="contactUs.php"><i class="fa fa-phone"></i>&emsp;Contacts</a>
                <a href="aboutUs.php"><i class="fa fa-globe"></i>&emsp;About Us</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
    </header>

 
    <div class="main">
        <section class="contact-hero">
            <p class="contact-header">Get in touch</p>
        </section>
            <div class="contact-container">
                <div class="contact-column">
                    <div class="contacts">
                        <ul class="unordered-list">
                            <li class="contact-list"><span class="contact-icons"><i class="fas fa-map-marker-alt"></i></span>&emsp; Sampaloc, Manila</li>
                            <li class="contact-list"><span class="contact-icons"><i class="fas fa-phone-alt"></i></span>&emsp; 123-456-7891</li>
                            <li class="contact-list"><span class="contact-icons"><i class="fas fa-mobile-alt"></i></span>&emsp; +6391234567891</li>
                            <li class="contact-list"><span class="contact-icons"><i class="fas fa-envelope"></i></span>&emsp; biketech.ph@gmail.com&nbsp;</li>
                        </ul>
                    </div>
                </div>
                <div class="contact-column">
                    <form action="contactUs.php"  onsubmit="return validateContact" name="contactForm"  method="post" >
                        <p class="form-statement">Leave us a message</p>
                        <div class="wrap-input1">
                            <input  type="text" name="name" id="name" class="form-input " placeholder="Name" required>
                                <div class="error" id="nameErr"><?= $invalid_class_name ?? "" ?></div>
                                    </div>
                                <div class="wrap-input1" >
                                    <input  type="email" name="email" id="email" class="form-input" placeholder="Email" required>
                                    <div class="error" id="emailErr"></div>
                                </div>
                                <div class="wrap-input1">
                                    <textarea class="form-input" name="message" name="message" placeholder="Message" required></textarea>
                                    <span class="shadow-input1"></span>
                                    <div class="error" id="messageErr"></div>
                                </div>
                                <input type="submit" class="send-email-btn" value="SEND">
                    </form>
                </div>
            </div>
            <section class="sns-section">
                <h1 class="sns-title">Let's hangout</h1>
                <div class="sns-grid-container">
                    <div class="item"><a class ="icons" href="https://www.facebook.com/biketechph"><i class="fab fa-facebook-f fa-2x "></i><br><span class="sns-item">BikeTech PH</span></a></div>
                    <div class="item"><a class ="icons" href="https://www.instagram.com/biketechph/"><i class="fab fa-instagram fa-2x"></i><br><span class="sns-item">@biketechph</span></div>
                    <div class="item"><a class ="icons" href="https://twitter.com/biketechph1"><i class="fab fa-twitter fa-2x"></i><br><span class="sns-item">@biketech</span></a></div>
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