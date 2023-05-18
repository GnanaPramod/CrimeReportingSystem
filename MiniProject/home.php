<!DOCTYPE html>
<html>
<title>ONLINE CRIME REPORTING SYSTEM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 { font-family:garamond;}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("img4cs.PNG");
  min-height: 90%;
}
.content{
  text-align: center;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                 0px 8px 13px rgba(0,0,0,0.1),
                 0px 18px 23px rgba(0,0,0,0.1);

               }
.footer-basic {
    padding:40px 0;
    background-color:white;
    color:#4b4c4d;
  }
  
  .footer-basic ul {
    padding:0;
    list-style:none;
    text-align:center;
    font-size:18px;
    line-height:1.6;
    margin-bottom:0;
  }
  
  .footer-basic li {
    padding:0 10px;
  }
  
  .footer-basic ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.8;
  }
  
  .footer-basic ul a:hover {
    opacity:1;
  }
  
  .footer-basic .social {
    text-align:center;
    padding-bottom:25px;
  }
  
  .footer-basic .social > a {
    font-size:24px;
    width:40px;
    height:40px;
    line-height:40px;
    display:inline-block;
    text-align:center;
    border-radius:50%;
    border:1px solid #ccc;
    margin:0 8px;
    color:inherit;
    opacity:0.75;
  }
  
  .footer-basic .social > a:hover {
    opacity:0.9;
  }
  
  .footer-basic .copyright {
    margin-top:15px;
    text-align:center;
    font-size:13px;
    color:#aaa;
    margin-bottom:0;
  }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
    <a href="report.php" class="w3-bar-item w3-button">REPORT A CRIME</a>
    <!-- <a href="review.php" class="w3-bar-item w3-button">VIEW COMPLAINTS</a> -->
     <a href="NewLogin.php" class="w3-bar-item w3-button">LOGIN/REGISTER</a>
     <a href="barchart.html" class="w3-bar-item w3-button">BARCHART</a>
     <a href="Districts.html" class="w3-bar-item w3-button">MAP</a>
     <!-- <a href="map.html" class="w3-bar-item w3-button">MAP</a> -->
     <a href="piechart.html" class="w3-bar-item w3-button">PIECHART</a>
     <a href="histogram.html"class ="w3-bar-item w3-button">HISTOGRAM</a>
 
    
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container " id="home">
  
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:71px; margin-top: 100px; text-shadow: 2px 2px 4px #000000;><br>ONLINE CRIME REPORTING SYSTEM</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>ONLINE CRIME REPORTING SYSTEM</b></span>
    
  </div>
</header>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-black w3-padding-64 w3-xxlarge" style="max-width:1600px;">


<div class="content">
    
 <p>Welcome to the Online Crime Reporting System</p>
 <h1>&nbsp&nbsp&nbspIncase you are having an emergency situation, kindly contact the nearest local police offices immediately.</h1><br>

 
        <h2>Would you like to report a crime anonymously?</h2>
        <h3>Report it here &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
        <a href="report.php" class="btn btn-info" role="button" aria-pressed="true">Report Crime!</a><br>

        <br><h2>Have an account with us or want to register?</h2>
        <h3>Click here to access your account &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
        <a href="NewLogin.php" class="btn btn-warning" role="button" aria-pressed="true">Login/Register</a>

 </div>
      
      
</div>


    

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-xlarge" id="about">
  <div class="w3-content">
    
    <p>This is a website that helps bridge the gap between the police department and the individuals in society, by using this website police officials are able to see complaints raised by different people from different places making it easier for them to apprehend criminals and bring them to justice</p><br>
<p>Our Mission
To serve as a trusted voice of the nation’s law enforcement community, providing informative, content on interesting and engaging topics affecting security today.

We are revolutionizing the way the law enforcement community view and find relevant news, by providing important information, and interacting online. We are aiming at providing the most comprehensive and trusted online destination for users nationwide.</p>


  </div>
</div>


<li><a href="about.html">About Us</a></li>

<!-- Footer -->


   <!--Footer-->
   
<!-- <div class="footer-basic">

        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="userhome.php">Home</a></li>
                <li class="list-inline-item"><a href="report.php">Report</a></li>
                <li class="list-inline-item"><a href="review.php">Review</a></li>
                <li class="list-inline-item"><a href="useraboutus.php">About</a></li>
                
            </ul>
            <p class="copyright">Online Crime Reporting System © 2021</p>
        </footer>
    </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>



</body>
</html>
