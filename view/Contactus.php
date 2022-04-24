<?php
	session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>
	<link rel="stylesheet" type="text/css" href="../CSS/contact.css">
	<link rel="icon" href="../Project/Logo.JPG">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
	</style>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<form class="container" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" name="Name" class="field" placeholder="Your Name">
				<input type="text" name="contactEmail" class="field" placeholder="Your Email">
				<input type="text" name="Phone" class="field" placeholder="Phone">
				<textarea name="message" placeholder="Message" class="field"></textarea>
				<input class="btn" type="submit" name="contactButton" value="SEND">
			</div>
		</div>
	</form>
	<?php include_once '../controllers/contactController.php';?>
</body>
</html>