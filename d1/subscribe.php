<?php
header('Content-Type: application/json; charset=utf-8');

include "../admin/db/db_connect.php"; // adjust path

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
    exit;
}

if (!isset($con) || !$con) {
    echo json_encode(["status" => "error", "message" => "Database connection error"]);
    exit;
}

$email = trim($_POST['email'] ?? '');

if ($email === '' || strlen($email) > 60) {
    echo json_encode(["status" => "error", "message" => "Email required (max 60 chars)"]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "message" => "Invalid email format"]);
    exit;
}

$email = strtolower($email);

$stmt = $con->prepare("INSERT INTO subscribers (email) VALUES (?)");
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Subscribed successfully!"]);
} else {
    if ($con->errno == 1062) {
        echo json_encode(["status" => "error", "message" => "Email already subscribed"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to save email"]);
    }
}

$stmt->close();
$con->close();
exit;