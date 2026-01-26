<?php
error_reporting(0);
include"../../admin/db/db_connect.php";

if(!isset($_POST['search'])) {
    echo json_encode(['error' => 'No search value']);
    exit;
}

$search = $_POST['search'];

// Prepare SQL safely
$stmt = $con->prepare("SELECT event_name, event_date, event_time, event_venue FROM events WHERE event_name LIKE ?");
$search_param = "%{$search}%";
$stmt->bind_param("s", $search_param);
$stmt->execute();
$result = $stmt->get_result();

if($row = $result->fetch_assoc()) {
    echo json_encode([
        'event_name' => $row['event_name'],
        'event_date' => $row['event_date'],
        'event_time' => $row['event_time'],
        'event_venue' => $row['event_venue']
    ]);
} else {
    echo json_encode(['error' => 'No record found']);
}
?>
