<?php session_start(); ?>
<!DOCTYPE html> 
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>ACTIVITY</title>
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
            <p class="titulli2">ADMIN PAGE (activity)</p>
            <pre class="pershkrimi2" >Here you can manage all the data</pre> <br> <br>
            <center>
          
            <img src = '../Project/Dashboardd.png'>


            <main>
	      <div> 
	        <table>
		<tr>
			<th>ID</th>
			<th>Admin</th>
			<th>Activity</th>
			<th>User</th>
			<th>Product</th>
			<th>Date_Time</th>
		</tr>
             <?php 
             include_once '../repository/activityRepo.php';
             $activityRepository = new activityRepo();

             $activities = $activityRepository->readActivities();

             foreach($activities as $activity){
                echo 
                "
                <tr>
                     <td>$activity[ID]</td>
                     <td>$activity[Admin]</td>
                     <td>$activity[Activity]</td>
                     <td>$activity[User]</td>
                     <td>$activity[Product] </td>
                     <td>$activity[Date_Time] </td>
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

