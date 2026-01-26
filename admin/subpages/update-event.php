<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    // Get POST data and sanitize
    $id          = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $event_name  = isset($_POST['event_name']) ? mysqli_real_escape_string($con, $_POST['event_name']) : '';
    $event_date  = isset($_POST['event_date']) ? $_POST['event_date'] : '';
    $event_time  = isset($_POST['event_time']) ? $_POST['event_time'] : '';
    $event_venue = isset($_POST['event_venue']) ? mysqli_real_escape_string($con, $_POST['event_venue']) : '';
    $event_status= isset($_POST['event_status']) ? 1 : 0;

    if($id == 0){
        echo "Invalid ID";
        exit;
    }

    if(empty($event_name) || empty($event_date) || empty($event_time) || empty($event_venue)){
        echo "All fields are required";
        exit;
    }

    // Update query
    $sql = "UPDATE events SET 
                event_name = '$event_name',
                event_date = '$event_date',
                event_time = '$event_time',
                event_venue = '$event_venue',
                event_status = $event_status
            WHERE id = $id";

    if($con->query($sql)){
        echo "success";
    } else {
        echo "Database error: " . $con->error;
    }

} else {
    echo "Invalid request";
}

$con->close();
?>
