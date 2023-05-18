<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];

//database connection
$conn = new mysqli("localhost","root","","ocrs" );
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into Registration(firstname,lastname,username,password,gender,email,phonenumber,address) values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss",$firstname,$lastname,$username,$password,$gender,$email,$phonenumber,$address);
	$stmt->execute();
	
	$stmt->close();
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Crime Reporting System Login</title>
    <link rel="stylesheet" href="zstyles.css">		
    <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>

</head>
<body>
	<!-- <img src="image/admin.jpeg" class="image" alt="background image"> -->
	<nav>
		<div class="logo">
			<p> Online Crime Reporting System </p>
			
			<div class="categories">
			
			<li><a href="newhome.php">Home</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="about.html">About</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="report.php">Report a Crime</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="registration.php">LOGIN/REGISTER</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="admin.html">admin</a></li>
			
			</div>
			
		</div>
		
	</nav>
	<br><br><br><br>
	
	
	<section>
		<div class="imgBx">
			<img src="img2cs.PNG">
		</div>
		
		<div class="contentBx">
			<div class="formBx">

			<div class="alert info">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> You have successfully been registered, proceed to login.
</div>

			<form id="login" class="inputBx" action="login.php" method="POST">
				<h2>Login</h2>
				<form action="login.php" method="POST">
					<div class="inputBx">
						<span>Username</span>
						<input type="text" name="username" required>
					</div>
					<div class="inputBx">
						<span>Password</span>
						<input type="password" name="password" required>
					</div>
					<div class="inputBx">
						<input type="submit" value="Login" >
					</div>
					<div class="signup_link">
	                Don't have an account? <a href="registration.php">Sign_up</a>
	                </div>
				</form>
			</div>
		</div>
		
	</section>
		<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
	
</body>
</head>