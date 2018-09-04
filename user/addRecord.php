<?php
    if(isset($_POST['subject']) && isset($_POST['section']) && isset($_POST['room']) && isset($_POST['start']) && isset($_POST['end']) && 
        isset($_POST['professor']) && isset($_POST['day']))
    {
        // include Database connection file 
        include("../config/connection/conn_db.php");
        $xml = simplexml_load_file("data.xml"); //This line will load the XML file.
        $sxe = new SimpleXMLElement($xml->asXML());
        // get values 
        $subject = $_POST['subject'];
        $section = $_POST['section'];
        $room = $_POST['room'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $professor = $_POST['professor'];
        $day = $_POST['day'];

        $sql = "SELECT * FROM tbl_class WHERE (CAST(`start` AS TIME) BETWEEN `start` AND `end`) AND 
    (CAST(`end` AS TIME) BETWEEN `start` AND `end`) AND room='$room' AND day='$day';";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_num_rows($result);

        if ($data == 0) {
            $query = "INSERT INTO tbl_class(subject, section, room, professor, day, start, end) VALUES('$subject', '$section', '$room',
            '$professor', '$day', '$start', '$end')";
            $no_rows = count($sxe);
        $query1 = $sxe->addChild("tbl_class");  
        $query1->addChild("class_id", $no_rows+1);
        $query1->addChild("subject", ($subject));
        $query1->addChild("section", ($section));
        $query1->addChild("room", ($room));
        $query1->addChild("start", ($start));
        $query1->addChild("end", ($end));
        $query1->addChild("professor", ($professor));
        $query1->addChild("day", ($day));

        $sxe->asXML("data.xml");
            if (!$result = mysqli_query($conn, $query)) {
            exit(mysqli_error($conn));
            }
            echo "1 Record Added!";
        }
        else {
            echo "Please add a different time and room";
        }
    }
?>