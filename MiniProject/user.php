<?php
include "connectdb.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
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
                    <li><a href="admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a></li>
                    <li><a href="crimereports.php"> <i class="menu-icon fa fa-folder"></i>Crime Reports</a></li>
                    <li class="active"><a href="user.php"> <i class="menu-icon fa fa-users"></i>User Information </a></li>
                   
                </ul>
            </div>
        </nav>
    </aside>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Information</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>&nbsp; Add</button>
                            </div>
                            <div class="card-body">
                       
                    <!-- fetch data-->
            <?php
                $query = "SELECT * FROM registration";
                $query_run = mysqli_query($data, $query);
            ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background-color: #a5a5a5;">
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Gender</th>
                                            <th>Email Address</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Edit</th>
                                            <th>Delete</th>  
                                        </tr>
                                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                    ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['firstname']; ?></td>
                                <td><?php  echo $row['lastname']; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                                <td><?php  echo $row['password']; ?></td>
                                <td><?php  echo $row['gender']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phonenumber']; ?></td>
                                <td><?php  echo $row['address']; ?></td>

                                <td><a href="edituser.php?id=<?php echo $row["id"]; ?>"> <button type="button" name="editbtn" class="btn btn-success"><i class="fa fa-edit"></i> EDIT</button></a></td>

                                <td><a href="deluser.php?id=<?php echo $row["id"]; ?>"> <button type="button" name="deletebtn" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button></a></td>
                            </tr>

                     <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                    ?>
                    </tbody>      
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        
                <!--form for adding data-->
                    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="meduimmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <form action="" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Add User Information : </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                          </div>
                      <div class="modal-body">
                     <div class="card-body card-block">

        <div class="form-group">
        <label for="company" class=" form-control-label">First Name : </label>
        <input type="text" name= "firstname" id="company" class="form-control">
        </div> <br>
                    
        <div class="form-group">
        <label for="company" class=" form-control-label">Last Name : </label>
        <input type="text" name= "lastname" id="company" class="form-control">
        </div> <br>

        <div class="form-group">
        <label for="company" class=" form-control-label">User Name : </label>
        <input type="text" name= "username" id="company" class="form-control">
        </div> <br>

        <div class="form-group">
        <label for="company" class=" form-control-label">Password : </label>
        <input type="text" name= "password" id="company" class="form-control">
        </div> <br>


        <div class="form-group">
          <label for="company"class="form-control-label">Gender  </label>
           <label for="male" style="color:grey;">Male :</label>
	       <input type="radio" id ="male" name="gender" value="Male">
	       <label for="female" style="color:grey;"> Female :</label>
	       <input type="radio" id ="female" name="gender" value="Female">
       </div> 


        <div class="form-group">
        <label for="company" class=" form-control-label">Email : </label>
        <input type="text" name= "email" id="company" class="form-control">
        </div> <br>

        <div class="form-group">
        <label for="company" class=" form-control-label">Phone Number : </label>
        <input type="text" name= "phonenumber" id="company" class="form-control">
        </div> <br>

        <div class="form-group">
        <label for="company" class=" form-control-label">Address : </label>
        <textarea name="address" id="textarea-input" rows="5" class="form-control"></textarea>
        </div>

        </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 66%">Cancel</button>
                <button type="submit" name="addbtn" class="btn btn-primary">Confirm</button>
            </div>
    </form>
    
    </div>
    </div>
    </div>
    </div>
    
<?php
    if(isset($_POST['addbtn'])){

    mysqli_query($data,"insert into registration values (NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[gender]','$_POST[email]','$_POST[phonenumber]','$_POST[address]')");
?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
<?php
}
?>

    <!-- Right Panel -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>
</html>
