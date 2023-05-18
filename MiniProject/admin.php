<?php

session_start();

if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

// echo $_SESSION["username"] 
 
 ?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>


    <!-- Left Panel -->

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
           <i class="fa fa-bars"></i>
        </button>
                <a class="navbar-brand" href="#">OCRS</a>
                <a class="navbar-brand hidden" href="./">O</a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a></li>
          <li><a href="crimereports.php"> <i class="menu-icon fa fa-folder"></i>Crime Reports </a></li>
          <li><a href="user.php"> <i class="menu-icon fa fa-users"></i>User Information </a></li>       
        </ul>
      </div>
    </nav>
  </aside>


    <!-- Right Panel -->
  <div id="right-panel" class="right-panel"> 

     <!-- Header-->
    <header id="header" class="header">

    <div class="header-menu" >

      <div class="col-sm-7" >
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
      </div>

      <div class="col-sm-5">
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p>ADMIN</p>
            </a>

          <div class="user-menu dropdown-menu">
              <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> LOG OUT</a>
          </div>
        </div>
      </div>
    </div>

    </header>
        

      <!-- Header-->
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Dashboard</h1>
              </div>
          </div>
      </div>
  </div>

  <div class="content mt-3">
      <div class="col-sm-2 col-lg-3">
          <div class="card text-white bg-flat-color-1">
              <div class="card-body pb-0">
                  <h4 class="mb-0">
                      <span class="count"><i class="fa fa-file"></i>123</span>
                  </h4>
                      <p class="text-light">Total Crimes Reported</p>

                  <div class="chart-wrapper px-0" style="height:70px;" height="70"></div>
              </div>
          </div>
      </div>
            
      <div class="col-md-12">
          <div class="card" style="background-color:white">
              <div class="x_content">
                  <canvas id="myChart"></canvas>
              </div>
          </div>
      </div>
    </div> 
  </div>


    <!-- for the right panel -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</script>

    <script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Crimes Reported ',
            backgroundColor: '#0060b3',
            data: [4, 10, 5, 2, 20, 10, 45, 10,30,50,30,60]
        }]
    },

    // Configuration options go here
    options: {}
});
    </script>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>

</body>
</html>