<?php
include "../../admin/db/db_connect.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = trim($_POST['id'] ?? '');

    if (empty($id)) {
        echo json_encode(['error' => 'Certificate ID is required']);
        exit;
    }

    $stmt = $con->prepare("SELECT certificate_type, presented_to, achievement_date FROM certificates WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo json_encode([
            'certificate_type' => $row['certificate_type'],
            'presented_to' => $row['presented_to'],
            'achievement_date' => $row['achievement_date']
        ]);
    } else {
        echo json_encode(['error' => 'No record found']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
