<?php
include('../db/db_connect.php');

header('Content-Type: application/json'); // AJAX ke liye JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'user';

    // Email check
    $checkQuery = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $checkQuery);
    if (mysqli_num_rows($result) > 0) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Email already exists! Please use another email.'
        ]);
        exit;
    }

    // Insert user
    $query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
    if (mysqli_query($con, $query)) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Registered successfully! Redirecting to login...'
        ]);
        exit;
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Registration failed. Try again later.'
        ]);
        exit;
    }

} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}
?>
