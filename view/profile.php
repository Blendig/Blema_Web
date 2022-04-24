<?php
	$hide="";
	session_start();
	if(!isset($_SESSION['username'])){
	  header("location:login.php");
	}else{
		if($_SESSION["role"] == "admin"){
	    	 $hide = "";
	    }else{
	    $hide = "hide";
		}
	}
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>PROFILE</title>
        <link rel="icon" href="../Project/Logo.JPG">
        <link rel="stylesheet" href="../CSS/additionalitems.css"/>
		<link rel="stylesheet" href="../CSS/Profile.css"/>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
			.hide{
            display:none;
        }
        </style>
    </head>
	<center> 
    <body class="body8">
        <div class="header2"></div>
        <div class="nav-div2"> 
        <ul class="nav-list2">
            <list> <a class="active" href="Index.php"><b>GO BACK</b></list></a>
        </ul>
            <div class="items">
            <p class="titulli2">BLEMA MEMBER</p>
			<main>
				
				<h1 class='profileText'>Welcome back, <?php echo $_SESSION['username']; ?>!</h1>

				<?php 

					include_once '../repository/usersRepo.php';
					$userRepository = new usersRepo();
					$user = $userRepository->getUserByUsername($_SESSION['username']);
					echo "<h4 class='profileText'>Emri: $user[Emri]</h4>
						<h4 class='profileText'>Mbiemri: $user[Mbiemri]</h4>
						<h4 class='profileText'>Email: $user[Email]</h4>";
					?>

		<div>
		<a href="manageUsers.php" class="<?php echo $hide ?>" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="Manage Users">
		</a> <br> <br>
		<a href="readMessages.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Read Messages">
		</a> <br> <br>
		<a href="manageProducts.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Manage Products">
		</a> <br> <br>
		<a href="activityLog.php" class="<?php echo $hide ?>"style="text-decoration: none;" >
			<input class="profileButton" type="button" name="logoutButton" value="Activity Log">
		</a> <br> <br>
		<a href="readPayment.php" class="<?php echo $hide ?>" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="Read Payment">
		</a> <br> <br>
		<a href="logout.php" style="text-decoration: none;">
			<input class="profileButton" type="button" name="logoutButton" value="LOG OUT">
		</a>

		</div>
	</main>
    </body>
	</center> 
</html>
