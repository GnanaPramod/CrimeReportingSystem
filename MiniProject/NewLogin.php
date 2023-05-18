<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Crime Reporting System Login</title>
    <link rel="stylesheet" href="zstyles.css">		

</head>
<body>
	<!-- <img src="image/admin.jpeg" class="image" alt="background image"> -->
	<nav>
		<div class="logo">
			<p> Online Crime Reporting System </p>
			
			<div class="categories">
			
			<li><a href="home.php">Home</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<!-- <li><a href="about.php">About</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp -->
			<li><a href="report.php">Report a Crime</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="registration.php">LOGIN/REGISTER</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<!-- <li><a href="admin.php">admin</a></li> -->
			
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
					<div>
						Attach id<input type="file">
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
		
	
</body>
</head>