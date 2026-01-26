<?php
include "../../admin/db/db_connect.php";

$response = [];

if (!empty($_POST['search'])) {
    $search = trim($_POST['search']);
    $stmt = $con->prepare(
        "SELECT event_name, event_date, event_time, event_venue 
         FROM events 
         WHERE event_name LIKE ? 
         LIMIT 1"
    );
    $param = "%{$search}%";
    $stmt->bind_param("s", $param);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $response = $row;
    } else {
        $response['error'] = "No record found";
    }
}

echo json_encode($response);
