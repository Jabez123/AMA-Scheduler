<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("../config/connection/conn_db.php");
 $xml = simplexml_load_file("data.xml"); //This line will load the XML file.
        $sxe = new SimpleXMLElement($xml->asXML());
    // get user id
    $user_id = $_POST['id'];
 	
    $rows = count($sxe);
    for($i = 0, $length = $rows; $i < $length; $i++){
        if($sxe->tbl_class[$i]->class_id == $user_id){
            unset($sxe->tbl_class[$i]);
            break;
        }
        }
    $sxe->asXML("data.xml");

    // delete User
    $query = "DELETE FROM tbl_class WHERE class_id = '$user_id'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
}
?>