<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>AMA Scheduler</title>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="dist/css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="dist/css/mdb.min.css" rel="stylesheet">
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
                    <li class="nav-item">
                      <button type="button" class="btn btn-sm btn-indigo" data-toggle="modal" data-target="#signinModal">
                        Sign in
                      </button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="btn btn-sm btn-indigo" data-toggle="modal" data-target="#signupModal">
                        Sign Up
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

        <h1 class="h1-responsive mt-5">Class Overview</h1>

          <div class="records_content mt-5"></div>
        <!--/Grid row-->
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

  <!-- Modal Sign in -->
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signinModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

              <!-- Form Sign In -->
              <form class="form" method="post" action="#">
                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" id="professor_id1" name="professor_id1" class="form-control">
                  <label for="orangeForm-name">Your Professor ID</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-lock prefix grey-text"></i> <!-- Icon na lock -->
                  <input type="password" id="password" name="password" class="form-control">
                  <label for="orangeForm-pass">Your password</label>
                </div>

                <div class="text-center">
                  <button type="button" id="signin" name="signin" class="btn btn-indigo">Signin</button>
                </div>
              </form>
              <!-- Form Sign In -->
            </div>
        </div>
    </div>
</div>
<!-- /Modal Sign in -->

<!-- Modal Sign Up -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Sign Up -->
              <form class="form" method="post" action="#">

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" id="professor_id" name="professor_id" class="form-control">
                  <label for="orangeForm-name">Your Professor ID</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-user prefix grey-text"></i> <!-- Icon na tao -->
                  <input type="text" id="first_name" name="first_name" class="form-control">
                  <label for="orangeForm-name">Your First Name</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-lock prefix grey-text"></i> <!-- Icon na lock -->
                  <input type="text" id="last_name" name="last_name" class="form-control">
                  <label for="orangeForm-pass">Your Last Name</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-lock prefix grey-text"></i> <!-- Icon na lock -->
                  <input type="password" id="password2" name="password2" class="form-control">
                  <label for="orangeForm-pass">Your Password</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-lock prefix grey-text"></i> <!-- Icon na lock -->
                  <input type="password" id="cpassword" name="cpassword" class="form-control">
                  <label for="orangeForm-pass">Confirm password</label>
                </div>

                <div class="text-center">
                  <button type="button" id="signup" name="signup" class="btn btn-indigo">Sign up</button>
                </div>
              </form>
              <!-- /Form Sign Up -->
            </div>
        </div>
    </div>
</div>
<!-- /Modal Sign up -->

    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="dist/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="dist/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="dist/js/mdb.min.js"></script>
    <!-- Sign Up JQuery -->
    <script type="text/javascript" src="dist/js/signup.js"></script>
    <!-- Sign In JQuery -->
    <script type="text/javascript" src="dist/js/signin.js"></script>
    <!-- Functions JavaScript -->
    <script type="text/javascript" src="dist/js/function.js"></script>
</body>
</html>