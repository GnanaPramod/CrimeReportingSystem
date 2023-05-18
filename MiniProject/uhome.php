<?php

//session_start();
require("functions.php");

?>

<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Userhome</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
								<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>.profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(img2cs.PNG);
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh;
    overflow-x: hidden
}</style>

                                </head>
								<a href="logout.php" class="btn btn-outline-dark btn-sm btn-block"><b><span style="font-size:15px;color:red">Logout</span></b></a>
								<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-hover-opacity-off" id="myNavbar">
    <a href="newhome.php" class="w3-bar-item w3-button">HOME</a>
    <a href="repoprt.php" class="w3-bar-item w3-button">REPORT CRIME</a>
    <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
    <!-- <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a> -->
 
     <span style="margin-left:370px;top: 40px;font-size: 20px;"><span class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp <?php echo $_SESSION["username"] ?></span><a href="logout.php" class="btn btn-outline-dark "><b><span style="font-size:25px;color:white">Logout</span></b></a>
  </div>
</div>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"><?php echo $_SESSION["username"] ?></h4>
                      
                    </div>
                </div>
            </div>
			
            
            <div class="px-4 py-3">
                <h5 class="mb-0">Profile details</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                   <?php 
include "config.php";

//write the query to get data from users table

//$sql = "SELECT username, email FROM registration";
$sql = "SELECT id,gender, firstname,lastname, email, username, address FROM registration WHERE `username` = '".$_SESSION['username']."'";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>

<head><style>

</style>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>


	
<table class="table">
	<thead>
		<tr>
		
		<th>First name</th>
		<th>Last name</th>
		<th>Email</th>
        <th>username</th>
		<th>Gender</th>
		<th>Action</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['username']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp</td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
</div>

              	
</div>
   <!DOCTYPE html>

<head><style>

</style>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>


	


</body>

</html>
</div>


</div>



</body>

</html>
	

	<div class="px-4 py-3">
                <h5 class="mb-0"></h5>
                <div class="p-4 rounded shadow-sm bg-light">
                  



      </div>

</body>
</html>

                          