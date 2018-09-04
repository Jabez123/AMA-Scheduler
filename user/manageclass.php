<?php 
session_start();
 $professor_id = $_SESSION['professor_id'];

 include("../config/connection/conn_db.php");

 $sql = "SELECT * FROM tbl_professor WHERE professor_id='$professor_id'";

 $query = mysqli_query($conn, $sql);

 while ($row = mysqli_fetch_assoc($query)) {
     $first_name = $row['first_name'];
     $last_name = $row['last_name'];
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>AMA Scheduler</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="../dist/css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../dist/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<!-- Start your project here-->
    
	<!--Main Navigation-->
  <header>
    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark danger-color-dark fixed-top scrolling-navbar">
          <div class="container-fluid">

              <!-- Navbar brand -->
              <a class="navbar-brand" href="home.php">AMA Class Scheduler</a>

              <!-- Collapse button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

              <!-- Collapsible content -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <!-- Links -->
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item ">
                          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item active">
                          <a class="nav-link" href="classes.php">Classes</a>
                      </li>
                  </ul>
                  <!-- End Links -->
                  <ul class="navbar-nav">

                    <span class="navbar-text white-text">
                      Hello! <?php echo $first_name; ?>
                    </span>

                    <li class="nav-item">
                      <button type="button" class="btn btn-sm btn-indigo" onclick="window.location='../index.php'">
                        Log Out
                      </button>
                    </li>
                  </ul>
              </div>
              <!-- End Collapsible content -->
          </div>
      </nav>
      <!-- End Navbar-->           
  </header>
  <!-- End Main Navigation-->

	<!--Main layout-->
	<main class="mt-5">
     
    <div class="container" style="margin-top: 80px;">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="classes.php">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="manageclass.php">Manage Classes</a>
        </li>
      </ul>
      <ul>
        <button type="button" data-toggle="modal" data-target="#addModal" class="pull-right btn btn-success">Add a Class</button>
      </ul>
      
    </div>


		<!--Main container-->
		<div class="container mt-5">
        
        <h1 class="h1-responsive mb-5">Class Overview</h1>

    	 
         <div class="records_content">
          
        </div>
    		
    	   
		</div>
		<!--/Main container-->
	</main>
	<!--/Main layout-->
	<!--Footer-->
	<footer class="page-footer danger-color-dark center-on-small-only mt-5 footer">
		<!--Footer Links-->
		<div class="container">
                                
        	<div class="row">

            	<!--First column-->
            	<div class="col-md-6">
                	<h5 class="title">AMA Class Scheduler</h5>
            	</div>
            	<!--/.First column-->

            	<!--Second column-->
            	<div class="col-md-6">
                	<h5 class="title">Links</h5>
                	<ul>
                    	<li><a href="home.php">Home</a></li>
                    	<li><a href="classes.php">Classes</a></li>
                	</ul>
            	</div>
            	<!--/.Second column-->
        	</div>
    	</div>
    	<!--/.Footer Links-->

    	<!--Copyright-->
    	<div class="footer-copyright">
        	<div class="container-fluid">
            	© 2017 Copyright
        	</div>
    	</div>
    	<!--/.Copyright-->

	</footer>
	<!--/.Footer-->   

  <!-- Modal Add Class -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add a Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

              	<div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="subject" name="subject" class="form-control">
                  <label for="orangeForm-name">Subject</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="section" name="section" class="form-control">
                  <label for="orangeForm-name">Section</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="day" name="day" class="form-control">
                  <label for="orangeForm-name">Day of the Week</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="time" id="start" name="start" class="form-control">
                  <label class="active" for="orangeForm-name">Start</label>
                </div>

				<div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="time" id="end" name="end" class="form-control">
                  <label class="active" for="orangeForm-name">End</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="room" name="room" class="form-control">
                  <label for="orangeForm-name">Room</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="professor" name="professor" class="form-control">
                  <label for="orangeForm-name">Professor</label>
                </div>

                <div class="text-center">
                  <button type="button" onclick="addRecord()" class="btn btn-success">Add</button>
                  <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                </div>
              <!-- Form Add Class -->
            </div>
        </div>
    </div>
</div>
<!-- /Modal Add Class -->

  <!-- Modal Edit Class -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="update_subject" name="update_subject" class="form-control">
                  <label for="orangeForm-name">Subject</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="update_section" name="update_section" class="form-control">
                  <label for="orangeForm-name">Section</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="update_day" name="update_day" class="form-control">
                  <label for="orangeForm-name">Day of the Week</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="time" id="update_start" name="update_start" class="form-control">
                  <label class="active" for="orangeForm-name">Start</label>
                </div>

        <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="time" id="update_end" name="update_end" class="form-control">
                  <label class="active" for="orangeForm-name">End</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="update_room" name="update_room" class="form-control">
                  <label for="orangeForm-name">Room</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" placeholder=" " id="update_professor" name="update_professor" class="form-control">
                  <label for="orangeForm-name">Professor</label>
                </div>
                <input type="hidden" id="hidden_user_id">
                <div class="text-center">
                  <button type="button" onclick="UpdateUserDetails()" class="btn btn-success">Save</button>
                  <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Edit Class -->

    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../dist/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../dist/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../dist/js/mdb.min.js"></script>
    <!-- Functions JavaScript -->
    <script type="text/javascript" src="../dist/js/function.js"></script>
</body>
</html>