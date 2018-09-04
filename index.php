<?php 
    include("config/connection/conn_server.php");
    include("config/create_db.php");
    include("config/connection/conn_db.php");
    include("config/create_tbl.php");
?>
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
<div class="row">
	<div class="col">
		<!--Panel-->
            <div class="card text-center">
              <div class="card-header indigo lighten-1 white-text">
                Loading...
              </div>
              <div class="card-body">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="card-footer">
                  Please Wait
              </div>
            </div>
            <!--/.Panel-->
	</div>

<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="dist/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="dist/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="dist/js/mdb.min.js"></script>
    <script type="text/javascript">
	var progressBar = $('.progress-bar');
    var percentVal = 0;

window.setInterval(function(){
  	percentVal += 5;
    progressBar.css("width", percentVal+ '%').attr("aria-valuenow", percentVal+ '%').text(percentVal+ '%');
    
    if (percentVal >= 100)
    {
    	window.location.href = "home.php";      
    }
    else if (percentVal >= 25) {
        percentVal += 10;
    }

    else if (percentVal >= 60) {
        percentVal += 20;
    }
    
}, 500);

</script>
</body>
</html>