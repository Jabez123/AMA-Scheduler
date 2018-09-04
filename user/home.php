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
                  		<li class="nav-item active">
                      		<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                  		</li>

                  		<li class="nav-item">
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
     
		<!--Main container-->
		<div class="container" style="margin-top: 80px;">

        <h1 class="h1-responsive">Class Overview</h1>

          <div class="records_content mt-5">
            
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

    <script type="text/javascript" src="../dist/js/display.js"></script>
</body>
</html>