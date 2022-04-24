<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>INSERT PRODUCT</title>
        <link rel="icon" href="../Project/Logo.JPG">
        <link rel="stylesheet" href="../CSS/Additionalitems.css"/>
        <link rel="stylesheet" href="../CSS/dashboards.css"/>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
        </style>
    </head>
    <body class="body8">
        <div class="header2"></div>
        <div class="nav-div2"> 
        <ul class="nav-list2">
            <list> <a class="active" href="manageProducts.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br> 
        <center>
        <img id='img' src = '../Project/Dashboardd.png'>

        <main>
		
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 
    <div class ='inputet'>

     <h2 class="profileText">Insert Product: </h2>

      <h2 class="profileText">ProductName:</h2> 
      <input type="text" id="productName" name="productName" class="profileText"> <br>
      <h2 class="profileText">ProductText:</h2> 
      <input type="text" id="productText" name="productText" class="profileText"> <br>
      <h2 class="profileText">Price:</h2>
      <input type="text" min="1" id="price" name="price" class="profileText"> <br> <br>

      <input class="lbtn" type="submit" name="insertProductButton" value="INSERT PRODUCT">

   </form> 
    <?php include_once '../controllers/productController.php';?>
</div>
</div>
</main>
</center>
          <footer class="footer1">
            <div class="icons1">
              <a href="https://www.facebook.com/BLEMA-online-shop-103995715490962" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/blemashop_online/" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://twitter.com/BlemaOnline" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://youtube.com/channel/UCzNIeuOqhnT6MOGhtTFVeHA" target="_blank"><i
                      class="fa fa-youtube"></i></a>
          
            </div>
            <br>
            <address id="address1">B L E M A brand, Copyright &copy; 2021</address>
          </footer>
    </body>
</html>
