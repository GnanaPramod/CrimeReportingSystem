<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM report";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head><style>
.container{
      //background-image:url("C:\Users\prabh\Pictures\Saved Pictures\pro.jpg");
}      
.pagination {
  display: inline-block;
  background-color: black;

}

li{
      display:inline-block;
      padding-top: 12px;
      padding-left: 80px;
      font-size: 20px;
      font-color: green;
}

#heading{
      font-size:20px;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 66px;
  text-decoration: none;
}

.pagination a.active {
  background-color: maroon;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>
      <title>View complaints Page</title>
       <!-- to make it looking good im using bootstrap -->
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="heading"  href="home.php"><b>Online Crime Reporting System</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul >
        <li><a class="active"><a href="home.php">Home</a></a></li>
        <li><a class="      "><a href="review.php">VIEW REPORTS</a></a></li>
        <li><a href="uhome.php">User details <i class="fa fa-user"></i></a></li>
        <li><a href="logout.php">Log out  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>

      <div class="container">
            <h2>Complaints made</h2>
            <h4>Names of individuals who registered complaints are not visible so as to protect them.</h4>

<table class="table">
  <thead class="thead-dark">
            <tr>
            <th>Crime</th>
            <th>County</th>
            <th>Location of crime</th>
            <th>Date of Crime</th>
            <th>Time of Crime</th>
            <th>More information about the crime</th>
            

      </tr>
      </thead>
      <tbody>     
            <?php
                  if ($result->num_rows > 0) {
                        //output data of each row
                        while ($row = $result->fetch_assoc()) {
            ?>

                              <tr>
                              <td><?php echo $row['crime']; ?></td>
                              <td><?php echo $row['county']; ?></td>
                              <td><?php echo $row['location']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['time']; ?></td>
                              <td><?php echo $row['info']; ?></td>
                              
                              
                              </tr> 
                              
            <?php       }
                  }
            ?>
                  
      </tbody>
</table>
      </div>

</body>
</html>