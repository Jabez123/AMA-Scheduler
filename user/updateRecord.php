<?php
// include Database connection file
include("../config/connection/conn_db.php");
 $xml = simplexml_load_file("data.xml"); //This line will load the XML file.
        $sxe = new SimpleXMLElement($xml->asXML());
// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $section = $_POST['section'];
    $room = $_POST['room'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $professor = $_POST['professor'];
    $day = $_POST['day'];

    $rows = count($sxe);
    for($i = 0, $length = $rows; $i < $length; $i++){
         if($sxe->tbl_class[$i]->class_id == $id){
            $sxe->tbl_class[$i]->subject =  ($subject);
            $sxe->tbl_class[$i]->section =  ($section);
            $sxe->tbl_class[$i]->room =  ($room);
            $sxe->tbl_class[$i]->start =  ($start);
            $sxe->tbl_class[$i]->end =  ($end);
            $sxe->tbl_class[$i]->professor =  ($professor);
            $sxe->tbl_class[$i]->day =  ($day);
          }
    }
    $sxe->asXML("data.xml");
    // Updaste User details
    $query = "UPDATE tbl_class SET subject = '$subject', section = '$section', room = '$room', start = '$start', end = '$end', professor = '$professor', day = '$day' WHERE class_id = '$id'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
}