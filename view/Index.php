<?php
	session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap');
    </style>    

    <title>BLEMA</title>
    <link rel="icon" href="../Project/Logo.JPG">
    <link rel="stylesheet" href="../CSS/index.css">

    </head>
    <div class="body1">
        <body class="body">
            <div class="header"></div>
                <div class="nav-div"> 
                <ul class="nav-list">
                <?php if(isset($_SESSION['username'])){
                    echo "<list> <a class='active' href='Index.php'>HOME</list></a> 
                    <list> <a href='register.php' target='_self'>REGISTER</list></a>
                    <list> <a href='ourcollection.php' target='_self'>SHOP NOW</list></a>
                    <list> <a href='Login.php' target='_self'>LOG IN</list></a>
                    <list> <a href='Contactus.php' target='_self'>CONTACT US</list></a>";
                    }
                    else{
                    echo " <list> <a class='active' href='Index.php'>HOME</list></a>
                    <list> <a href='register.php' target='_self'>REGISTER</list></a>
                    <list> <a href='Login.php' target='_self'>LOG IN</list></a>
                    ";
                    }
                    ?>
                </ul>
            </div>
            <div class="registerhere">
            <h2>Become a member of &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; our Brand &#128640; </h2>
                <form target="_self" action="" method="POST">
                    <a href="register.php" target="_self">
                        <input id="input" type="button" name="action" value="REGISTER HERE!"> </input>
                    </a>
                <img id ="kursori" src="../Project/Cursor.PNG">
                </div>
    
                <div class="box2">
                    <list><?php if(isset($_SESSION['username'])){
					echo "<p class='nav-link'><a href='profile.php'>".$_SESSION['username']."'s Profile</a></p> 
                    <list id='linku1' ><a href='ourcollection.php' target='_self' id='linku1'>OUR COLLECTION</a> </list>
                    <list id='linku2' ><a href='collaborations.php' target='_self' id='linku2'>COLLABORATIONS</a> </list>
                    <list id='linku3' ><a href='Additionalitems.php' id='linku3'>ADDITIONAL ITEMS</a></list>
                    <list id='linku4' ><a href='blemacard.php' id='linku4'>GET BLEMA CARD</a></list>";
				}
				else{
					echo "<p class='nav-link'><a href='login.php' target='_self'>ACCOUNT</a></p>
                    <list id='linku2' ><a href='collaborations.php' target='_self' id='linku2'>COLLABORATIONS</a> </list>";
				}
					?>
                    </list>

                </div>
            </div>
            <div class="body2">
            <div class="container">
                <center>
                    <h1>Hover mouse to read more about  B L E M A</h1>
                </center>
            </div>
                <div class="image">
                    <img class="image_img" src="../Project/Logo.JPG">
                    <div class="image_overlay image_overlay--blur">
                        <div class="image_title">ABOUT US</div>
                       <p class= "image_description">
                           BLEMA is a clothing brand formed in 2021 by Ema Kutllovci & Blendi Gashi.
                       </p>
                    </div>
                    </div>
                    <br>
                    <div class="ourproducts">
                        <img class="image_img2" src="../Project/ourproducts.jpg">
                        <div class="image_overlay2 image_overlay--blur2">
                            <div class="image_title2">OUR PRODUCTS</div>
                           <p class= "image_description2">
                               We offer the most comfortable hoodies, socks and other daily used items.
                           </p>
                        </div>
                        </div>
                        <br>
                        <div class="ourshops">
                            <img class="image_img3" src="../Project/ourshops.jpg">
                            <div class="image_overlay3 image_overlay--blur3">
                                <div class="image_title3">OUR SHOPS</div>
                               <p class= "image_description3">
                                   We are located in Prishtina (Albi Mall), London (Oxford st) and LA California (Rodeo drive).
                               </p>
                            </div>
                        </div>
                 </div>

                 <footer class="footer">
                    <div class="icons">
                      <a href="https://www.facebook.com/BLEMA-online-shop-103995715490962" target="_self"><i class="fa fa-facebook"></i></a>
                      <a href="https://www.instagram.com/blemashop_online/" target="_self"><i class="fa fa-instagram"></i></a>
                      <a href="https://twitter.com/BlemaOnline" target="_self"><i class="fa fa-twitter"></i></a>
                      <a href="https://youtube.com/channel/UCzNIeuOqhnT6MOGhtTFVeHA" target="_self"><i
                              class="fa fa-youtube"></i></a>
                  
                    </div>
                    <br>
                    <address id="address">B L E M A brand, Copyright &copy; 2021</address>
                  </footer>
        </body>
    
</html>
