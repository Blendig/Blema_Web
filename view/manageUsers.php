<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>MANAGE USERS</title>
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
            <p class="titulli2">ADMIN PAGE (all users)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
       
            <main>
	<div style="overflow-x: auto;"> 
	<center>
    <table>
		<tr>
			<th>ID</th> 
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Role</th>
		</tr>
             <img src = '../Project/Dashboardd.png'>
             <?php 
             include_once '../repository/usersRepo.php';
             $userRepository = new usersRepo();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[ID]</td>
                     <td>$user[Emri]</td>
                     <td>$user[Mbiemri] </td>
                     <td>$user[Username] </td>
                     <td>$user[Email] </td>
                     <td>$user[Password] </td>
                     <td>$user[Role] </td>
                     <td> <a href='editUser.php?id=$user[ID]' style='text-decoration: none;'>
						<input class='editButton' type='submit' value='EDIT'>
					 </a></td>
                    <td> <a href='../controllers/deleteUser.php?id=$user[ID]' style='text-decoration: none;'>
						<input class='deleteButton' type='submit' value='DELETE'>
					</a></td>
                </tr>
                ";
             }
          
             ?>
	</table> <br>
    <a href='insertUser.php' style='text-decoration: none;'>
			<input class='insertButton' type='submit' value='Insert User'>
		</a>
            </center>
            
	</div>

</main>

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
