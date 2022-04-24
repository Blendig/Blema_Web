<?php
	session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>MANAGE PRODUCTS</title>
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
            <list> <a class="active" href="profile.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">ADMIN PAGE (all products)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>

            <center>
            
            <img id='img' src = '../Project/Dashboardd.png'>
            <main>
	  <div> 
	  <table>
		<tr>
			<th>ID</th>
			<th>ProductName</th>
			<th>ProductText</th>
			<th>Price</th>
			<th></th>
			<th></th>
		</tr>
             <?php 
               include_once '../repository/productsRepo.php';
             $productsRepository = new productsRepo();

             $products = $productsRepository->getAllProducts();

             foreach($products as $product){
                echo 
                "
                <tr>
                     <td>$product[ID]</td>
                     <td>$product[ProductName]</td>
                     <td>$product[ProductText]</td>
                     <td>$product[Price]</td>
                     <td> <a href='editProduct.php?id=$product[ID]' style='text-decoration: none;'>
						<input class='editButton' type='submit' value='EDIT'>
					 </a></td>
                     <td> <a href='../controllers/deleteProduct.php?id=$product[ID]' style='text-decoration: none;'>
						<input class='deleteButton' type='submit' value='DELETE'>
					</a></td>
                </tr>
                ";
             }
             
          //    ?>

</table>
	</div>
		<a href="insertProduct.php" style="text-decoration: none;" >
			<input type="button" class='insertButton' name="InsertProduct" value="Insert Product">
		</a>
</main>
            </center>
    </body>
</html>
