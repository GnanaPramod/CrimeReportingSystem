<!DOCTYPE HTML>  
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Report</title>  

    <link rel="stylesheet" href="report.css">
      <!-- CSS only -->
    <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        integrity=
"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous" rel="stylesheet">

    <!-- Html2Pdf  -->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" 
        integrity=
"sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" 
        crossorigin="anonymous">
    </script>
<!--
<style>
.error {color: #FF0000;}
</style>
-->

</head>

<body>  
            <!--Navigation Bar-->
    <nav>

    <div class="logo">
		<p> Online Crime Reporting System </p>

            <!--Menus-->
        <div class="categories">

        <li><a href="userhome.php">HOME</a></li>
        <li><a class="active" href="report.php">REPORT</a></li>
        <li><a href="review.php">REVIEW</a></li>
        <li><a href="useraboutus.php">ABOUT US</a></li>
        <li><a href="logout.php">LOG OUT</a></li>

        </div>

    </div>

    </nav>
    <br><br><br><br>


<?php

// define variables and set to empty values
$locationErr = $infoErr = "";
$crime = $county = $location = $date = $time = $info = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["crime"])) {
        $crime = "";
    } else {
        $crime = test_input($_POST["crime"]);
    }
        
    if (empty($_POST["county"])) {
        $county = "";
    } else {
        $county = test_input($_POST["county"]);
    }

    if (empty($_POST["location"])) {
        $locationErr = "Location is required";
    } else {
        $location = test_input($_POST["location"]);
        // check if the location only contains letters.
        if (!preg_match("/^[a-zA-Z-' ]*$/",$location)) {
          $locationErr = "Only letters are allowed";
        }
    }

    if (empty($_POST["date"])) {
        $date = "";
    } else {
        $date = test_input($_POST["date"]);
    }
        
    if (empty($_POST["time"])) {
        $time = "";
    } else {
        $time = test_input($_POST["time"]);
    }

    if (empty($_POST["info"])) {
        $infoErr = "Please provide more information on the incident";
      } else {
        $info = test_input($_POST["info"]);
      }
}
                    //Validation for security purposes and to remove unwanted content.
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


                    <!--Form-->
<div class="wrapper">  

                    <!--Heading--> 
    <div class = "title">
        REPORT A CRIME 
    </div>


<!-- <p><span class="error">* required field</span></p> -->
 <form id ="form-print" enctype="text/plain" 
          class="form-control">


<form method="post" action = "conreport.php">  

    <label>Crime</label>
    <select id="crime" name="crime">

        <option value="Vandalism">Vandalism</option>
        <option value="Theft">Theft</option>
        <option value="Kidnapping">Kidnapping</option>
        <option value="Possession of Drugs">Possession of Drugs</option>
        <option value="Trespassing">Trespassing</option>
        <option value="Other">Other</option>

    </select> <br></br>

    <label for="county">County</label>
    <select id="county" name="county">

        <option value="Nairobi">Nairobi</option>
        <option value="Mombasa">Mombasa</option>
        <option value="Nakuru">Nakuru</option>
        <option value="Kiambu">Kiambu</option>
        <option value="Kisumu">Kisumu</option>

    </select> <br></br>

  <label>Where did the Crime Happen?</label><span class="error">* <?php echo $locationErr;?></span>
  <input type="text" name="location" placeholder="Please specify the location..." value="<?php echo $location;?>">
  <br><br>

  <label>Date of crime</label> 
  <input type="date" name="date" value="<?php echo $date;?>">
  <br><br>

  <label>Time of crime</label>
  <input type="time" name="time" value="<?php echo $time;?>">
  <br><br>

  <label>More Information on the Crime</label>
  <textarea name="info" rows="5" cols="40"><?php echo $info;?></textarea>
  <br><br>

  <input type="submit" name="submit" value="Submit">  

<p>Would you like to generate a pdf of your report</p>

 <input type="button" class="btn btn-primary" 
          onclick="GeneratePdf();" value="GeneratePdf">
    </form>
                   
    <script>          
        // Function to GeneratePdf
        function GeneratePdf() {
            var element = document.getElementById('form-print');
            html2pdf(element);
        }
    </script>
  
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
        crossorigin="anonymous">
    </script>
</div>

</body>
</html>


<?php
/*           
   create the review page
   finish on home and about us pages.
   admin page
    */    
  ?>