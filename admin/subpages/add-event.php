<?php
// backend/add-event.php

// 1. Include DB connection
include "../db/db_connect.php";
include "../authentication/auth.php";
// 2. Get form data
$event_name   = isset($_POST['event_name']) ? $con->real_escape_string($_POST['event_name']) : '';
$event_date   = isset($_POST['event_date']) ? $_POST['event_date'] : '';
$event_time   = isset($_POST['event_time']) ? $_POST['event_time'] : '';
$event_venue  = isset($_POST['event_venue']) ? $con->real_escape_string($_POST['event_venue']) : '';
$event_status = isset($_POST['event_status']) ? 1 : 0; // checkbox

// 3. Validate required fields
if(empty($event_name) || empty($event_date) || empty($event_time) || empty($event_venue)){
    echo "Please fill all required fields.";
    exit;
}

// 4. Insert into database
$sql = "INSERT INTO events (event_name, event_date, event_time, event_venue, event_status) 
        VALUES ('$event_name', '$event_date', '$event_time', '$event_venue', '$event_status')";

if($con->query($sql)){
    echo "success";
}else{
    echo "Error: " . $con->error;
}

$con->close();
?>
