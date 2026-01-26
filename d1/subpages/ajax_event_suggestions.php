<?php
include "../../admin/db/db_connect.php";

$suggestions = [];

if (!empty($_POST['query'])) {
    $query = trim($_POST['query']);
    $stmt = $con->prepare(
        "SELECT event_name FROM events WHERE event_name LIKE ? LIMIT 5"
    );
    $param = "%{$query}%";
    $stmt->bind_param("s", $param);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['event_name'];
    }
}

echo json_encode($suggestions);
