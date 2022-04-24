<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>SOLD ITEMS</title>
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
            <p class="titulli2">ADMIN PAGE (sales)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
            <center>
          
            <img src = '../Project/Dashboardd.png'>
            <main>
	<div style="overflow-x: auto;"> 
	<table>
		<tr style="background-color: transparent;">
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
			<th>CardNo</th>
			<th>Valid</th>
            <th>CCV</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip Code</th>
			<th>Email</th>
			<th>Product</th>
            <th>Size</th>
		</tr>
             <?php 
             include_once '../repository/paymentRepo.php';
             $paymentRepository = new paymentRepo();

             $messages = $paymentRepository->getAllMessages();

             foreach($messages as $message){
                echo 
                "
                <tr>
                     <td>$message[Id]</td>
                     <td>$message[fName]</td>
                     <td>$message[lName] </td>
                     <td>$message[cardNo]</td>
                     <td>$message[validThru]</td>
                     <td>$message[ccv] </td>
                     <td>$message[address]</td>
                     <td>$message[city]</td>
                     <td>$message[zipCode]</td>
                     <td>$message[email] </td>
                     <td>$message[product]</td>
                     <td>$message[size]</td>
                </tr>
                ";
             }
             
             ?>
	</table>
	</div>
</main>
            </center>
     </body>
 </html>
