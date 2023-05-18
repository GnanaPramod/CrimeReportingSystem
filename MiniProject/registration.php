<!DOCTYPE html>
<html >
<head>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Registration Form</title>
	<link rel="stylesheet" href="bstyles.css">
</head>
<body>

<nav>
		<div class="logo">
			<p> Online Crime Reporting System </p>
			
			<div class="categories">
			
			<li><a href="newhome.php">Home</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="about.html">About</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="report.php">Report a Crime</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="NewLogin.php">LOGIN/REGISTER</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<li><a href="admin.html">admin</a></li>
			
			</div>
			
		</div>
		
	</nav>
	<br><br><br><br>
	
<div class="wrapper">
        
    <div class="title">
      Registration Form
    </div>
    <div class="form">
	<form id="register" class="input" action="connect.php" method="post">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input"  name="firstname" required>
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input"  name="lastname" required>
       </div>  
	   <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input"  name="username" required>
       </div> 
       


       ...
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <div class="inputfield">
        <label>password</label>
        <input name="password" id="password" type="password" class="input" />
</div>
<br>
<div class="inputfield">
<label>Confirm password</label>
  <input type="password" name="confirm_password" id="confirm_password" class="input" />
  <span id='message'></span>

</div>





      


        <div class="inputfield">
          <label>Gender</label>
           <label for="male" style="color:grey;">Male:</label>
	       <input type="radio" id ="male" name="gender" value="Male">
	       <label for="female" style="color:grey;"> Female:</label>
	       <input type="radio"id ="female" name="gender" value="Female">
       </div> 
	   
	   
	   <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input"  name="email" required>
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input"  name="phonenumber" required>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea"  name="address" required></textarea>
       </div> 
      
      <div class="inputfield terms">
          
          <p>  Have an account already?&nbsp&nbsp&nbsp <a href="NewLogin.php "  style="color:yellow;">LOGIN </a></p>
       </div> 
	  
	  
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>	
<script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});

</script>
	
</body>
</html>