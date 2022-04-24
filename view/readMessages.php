<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>READ MESSAGES</title>
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
            <p class="titulli2">ADMIN PAGE (messages)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
            <center>
          
            <img src = '../Project/Dashboardd.png'>


            <main>
	            <div> 
	             <table>
		          <tr>
		          	<th>ID</th>
			        <th>Message</th>
			          <th>Email</th>
		            </tr>
             <?php 
             include_once '../repository/contactRepo.php';
             $contactRepository = new contactRepo();

             $messages = $contactRepository->getAllMessages();

             foreach($messages as $message){
                echo 
                "
                <tr>
                     <td>$message[ID]</td>
                     <td>$message[Message]</td>
                     <td>$message[Email] </td>
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
