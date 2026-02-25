<?php
header('Content-Type: application/json; charset=utf-8');

include "../authentication/auth.php";
include "../db/db_connect.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  echo json_encode(["status" => "error", "message" => "Invalid request"]);
  exit;
}

$id = (int)($_POST['id'] ?? 0);
if ($id <= 0) {
  echo json_encode(["status" => "error", "message" => "Invalid ID"]);
  exit;
}

if (!isset($con) || !$con) {
  echo json_encode(["status" => "error", "message" => "Database connection error"]);
  exit;
}

$stmt = $con->prepare("DELETE FROM subscribers WHERE id = ?");
if (!$stmt) {
  echo json_encode(["status" => "error", "message" => "Database error"]);
  exit;
}

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
  if ($stmt->affected_rows > 0) {
    echo json_encode(["status" => "success", "message" => "Subscriber deleted"]);
  } else {
    echo json_encode(["status" => "error", "message" => "Subscriber not found"]);
  }
} else {
  echo json_encode(["status" => "error", "message" => "Delete failed"]);
}

$stmt->close();
$con->close();
exit;