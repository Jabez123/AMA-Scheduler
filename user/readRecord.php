<?php
    // include Database connection file 
    include("../config/connection/conn_db.php");
 
    $data = '<div class="row">';

    $query = "SELECT * FROM tbl_class";
 
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
 
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '
            <!-- Column -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <!--Panel-->
            <div class="card mb-5">
              <div class="card-header indigo lighten-1 white-text text-center">
                Subject: '.$row['subject'].'
              </div>
              <div class="card-body">          
                <h4 class="card-title">Time: '.date('h:i A', strtotime($row['start'])).' - '.date('h:i A', strtotime($row['end'])).'</h4>
                <h4 class="card-title">Section: '.$row['section'].'</h4>
                <h4 class="card-title">Professor: '.$row['professor'].'</h4>
                <h4 class="card-title">Room: '.$row['room'].'</h4>
                <h4 class="card-title">Day of the Week: '.$row['day'].'</h4>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-indigo" onclick="GetUserDetails('.$row['class_id'].')">Edit</button>
                <button class="btn btn-danger" onclick="DeleteUser('.$row['class_id'].')">Delete</button>
              </div>
            </div>
            <!--/.Panel-->
          </div>
          <!--/.Column-->
          ';
        }
    }
    else
    {
        // records not found 
        $data .= '<div class="col">
        <div class="jumbotron text-center">
  <div class="container">
    <h1 class="display-3">No Classes Added</h1>
    <p class="lead">You can add by clicking the add button at the top right</p>
  </div>
</div>
        </div>';
    }
 
    echo $data;
?>