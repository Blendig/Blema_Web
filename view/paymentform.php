<?php
	session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY</title>
    <link href="../CSS/paymentform.css" rel="stylesheet">
    <link rel="icon" href="../Project/Logo.JPG">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap');
    </style>
</head>
<body>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->

          <input id="column-left" type="text" name="Name" placeholder="First Name"/>
          <input id="column-right" type="text" name="Surname" placeholder="Surname"/>
          <input id="input-field" type="text" name="CardNo" placeholder="Card Number"/>
          <input id="column-left" type="text" name="Expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="CCV" placeholder="CCV"/>  
         
          <div class="card-wrapper"></div>
          <input id="input-field" type="text" name="Address" required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/>
          <input id="column-left" type="text" name="City" required="required" autocomplete="on" maxlength="20" placeholder="City"/>
          <input id="column-right" type="text" name="ZipCode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
          <input id="input-field" type="email" name="Email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
          <input list="merch" type="text" id="clothes" name="Product" placeholder="Choose your Product" required="required" />


          <datalist id="merch">
              <option value="White Poster T-Shirt">
                <option value="Yellow Movie Tape">
              <option value="80s Movies">
                <option value="Arcade">
              <option value="Gaming">
                <option value="Error Hoodie">
                  <option value="VHS">
                <option value="Pepsi Drink">
                  <option value="Fast Car">
                <option value="Rolling Skates">
                  <option value="AC DC Socks">
                    <option value="Nirvana Socks">
                  <option value="Madonna Socks">
                    <option value="Michael Jackson Socks">
                  <option value="Freddie Mercury Socks">
                    <option value="Metallica Socks">
                      <option value="Aries">
                    <option value="Taurus">
                      <option value="Gemini">
                    <option value="Scorpio">
                      <option value="Leo">
                        <option value="Cancer">
                      <option value="Red Heart Hoodie">
                        <option value="I Got Butterflies">
                      <option value="Give Me Space Hoodie">
                        <option value="Shark Attack Hoodie">
                          <option value="Cube Hoodie">
                        <option value="Astronaut Hoodie">
                          <option value="Squid Game Socks">
                        <option value="ELITƎ Socks">
                          <option value="Euphoria Socks">
                            <option value="La Casa De Papel Sockst">
                              <option value="Game Of Thrones Socks">
                            <option value="Riverdale Socks">
                              <option value="Friends Socks">
                            <option value="13 Reasons Why Socks">
                              <option value="Stranger Things Socks">
                                <option value="Queen's Gambit Socks">
                                  <option value="Teen Wolf Socks">
                                    <option value="Peaky Blinders">
                                    <option value="Red Blema T-Shirt Blema">
                                <option value="Grey Blema T-Shirt">
                                  <option value="Orange Blema T-Shirt">
                                    <option value="White Blema T-Shirt">
                                  <option value="Baby Pink Blema T-Shirt">
                                <option value="Baby Blue Blema T-Shirt">
                                  <option value="Yellow Blema T-Shirt">
                                    <option value="Light Grey Blema T-Shirt">
                                      <option value="Baby Pink Blema T-Shirt">
                                <option value="Baby Blue Blema T-Shirt">
                                  <option value="Yellow Blema T-Shirt">
                                    <option value="Light Grey Blema T-Shirt">        
                                      <option value="Blema Phone Case">
                                        <option value="Blema Handbag">
                                      <option value="Blema Key Holder">
                                        <option value="Blema Gym Plastic Bottle">
                                        <option value="Blema Stickers">        
                                      <option value="Blema Lamp">
                                        <option value="Blema Headphones">
                                      <option value="Blema Glasses Box">
                                        <option value="Blema Wallet">                
                              </datalist>
                <input list="Size" type="text" id="clothes" name="Size" placeholder="Choose your Size" required="required" />
                                          <datalist id="Size">
                                          <option value="XS">
                                            <option value="S">
                                          <option value="M">
                                            <option value="L">
                                          <option value="XL">
                                            <option value="XXL">
                                        </datalist>

          <input id="input-button" type="submit" name="paymentButton" value="Submit"/>
    </form>
    <?php include_once '../controllers/paymentController.php';?>
  </div>
  <img class="payment" src="../Project/cardblema.jpg">
  <script src="../JS/paymentform.js"></script>
  <script src="../JS/Popup.js"></script>

</body>
</html>
