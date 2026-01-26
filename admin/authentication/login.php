<?php
session_start();
header('Content-Type: application/json');

$response = ['status' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please enter both email and password.'
        ]);
        exit;
    }

    // 🔐 Fixed admin credentials
    $admins = [
        [
            'email' => 'admin@gmail.com',
            'password' => 'admin@123',
            'role' => 'admin'
        ],
        [
            'email' => 'hammad@gmail.com',
            'password' => 'hammad123@',
            'role' => 'admin'
        ]
    ];

    $isValid = false;

    foreach ($admins as $admin) {
        if ($email === $admin['email'] && $password === $admin['password']) {

            $_SESSION['user_id'] = 1;
            $_SESSION['user_email'] = $admin['email'];
            $_SESSION['user_role'] = $admin['role'];

            $isValid = true;
            break;
        }
    }

    if ($isValid) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Login successful'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid email or password.'
        ]);
    }

    exit;
}

// Invalid request
echo json_encode([
    'status' => 'error',
    'message' => 'Invalid request.'
]);
exit;
?>
