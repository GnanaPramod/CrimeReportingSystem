<?php

$crime=$_POST['crime'];
$county=$_POST['county'];
$location=$_POST['location'];
$date=$_POST['date'];
$time=$_POST['time'];
$info=$_POST['info'];

        //database connection
$conn = new mysqli("localhost","root","","ocrs");

if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into report(crime,county,location,date,time,info) values(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$crime,$county,$location,$date,$time,$info);
	$stmt->execute();
	$stmt->close();
}

?>
<!DOCTYPE HTML>  
<html>
<head>

<meta charset="utf-8">
      <title>Report</title>  

    <link rel="stylesheet" href="conreport.css">

</head>

<body>  
            <!--Navigation Bar-->
    <nav>
    <div class="logo">
		<p> Online Crime Reporting System </p>

            <!--Menus-->
        <div class="categories">

            <!--Menus-->
        <li><a href="home.php">HOME</a></li>
        <li><a class="active" href="report.php">REPORT</a></li>
        <!-- <li><a href="review.php">REVIEW</a></li> -->
        <!-- <li><a href="aboutus.php">ABOUT US</a></li> -->
        <!-- <li><a href="signout.php">SIGN OUT</a></li> -->
        </div>
    </div>

    </nav>
    <br><br><br><br>

                <!--Heading--> 
<div class="wrapper">  

	<div class = "title">
        REPORT A CRIME
  </div>

		Thank You<br></br>
		Your report has been successfully received.
</div>

</body> 
</html>