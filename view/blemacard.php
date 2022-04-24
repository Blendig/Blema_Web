<!DOCTYPE html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
</style>  
  <title>OUR CARD</title>
  <link rel="icon" href="../Project/Logo.JPG">
  <link rel="stylesheet" href="../CSS/Blemacard.css">
</head>
<body class="body9">
  <section class="banner">
    <header>
      <a href="Index.php" class="logo">BLEMA</a>
      <div class="toggle" onclick="toggle();"></div>
    </header>
    <div class="content">
      <div class="contentBx">
        <h2>Introducing<br>Blema Card</h2>
        <p>Now that you are part of the BLEMA family, you will have your own BLEMA Card. For every product that you buy, you can use this card to receive a 10% discount on that product.
           You can get the BLEMA Card after 3 business days in any of our stores.</p>
        <a href="ourcollection.php">Shop Now</a>
      </div>
      <div class="imgBx">
        <img src="../Project/karta.png"> 
      </div>
    </div>
    <ul class="sci">
    <li><a href="https://www.facebook.com/BLEMA-online-shop-103995715490962" target="_self"><img src="../Project/facebook.png"></a></li>  
      <li><a href="https://twitter.com/BlemaOnline" target="_self"><img src="../Project/twitter.png"></a></li>  
      <li><a href="https://www.instagram.com/blemashop_online/" target="_self"><img src="../Project/instagram.png"></a></li>  
    </ul>
    <ul class="menu">
      <li><a href="Index.php">Home</a>   
      <li><a href="ourcollection.php">Store</a>
      <li><a href="Loacations.php">Locations</a>
      <li><a href="team.php">Our Team</a> 
    </ul>
  </section>
  <script type="text/javascript">
      function toggle(){
          var banner = document.querySelector('.banner');
          var toggle = document.querySelector('.toggle');
          banner.classList.toggle('active');
          toggle.classList.toggle('active');
      }
  </script>
</body>
</html>
