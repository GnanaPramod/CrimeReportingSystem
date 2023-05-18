<?php

//session_start();
require("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
    
	<title>Online Crime Reporting System</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
  <style>
    body {
   
	  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("crime.PNG");
 
 
}

body,
html {
    width: 100%;
    height: 100%;
    font-family: "Lato";
    color: white;
}

h1 {
  font-weight: 700;
  font-size: 5em;
}

h2 {
  font-weight: 400;
  font-size: 3em;
}


.content{
  padding-top: 22%;
  text-align: center;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                 0px 8px 13px rgba(0,0,0,0.1),
                 0px 18px 23px rgba(0,0,0,0.1);
}

hr {
    width: 250px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}
</style>
    
</head>
    
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Online Crime Reporting System</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="newhome.php">Home</a></li>
        <li class="      "><a href="review.php">VIEW REPORTS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="uhome.php">User details <i class="fa fa-user"></i></a></li>
        <li><a href="logout.php">Log out  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>





 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1>Welcome <?php echo $_SESSION["username"] ?></h1>
				<h2>Have a Complaint?</h2>
 				<h3>Report it here &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
 				<hr>
          <a href="report.php" class="btn btn-default btn-lg" role="button" aria-pressed="true">Report Crime!</a>
 			</div>
			
 		</div>
 	</div>
 </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>
</html>