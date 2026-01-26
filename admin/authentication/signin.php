<?php
include('db/db_connect.php');
$message = "";

if (isset($_POST['register'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $message = "<div class='alert alert-danger'>All fields required</div>";
    } else {

        // Check duplicate email
        $check = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $check->execute(['email' => $email]);

        if ($check->rowCount() > 0) {
            $message = "<div class='alert alert-danger'>Email already exists</div>";
        } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // USER role fixed
            $insert = $conn->prepare("
                INSERT INTO users (email, password, role)
                VALUES (:email, :password, 'user')
            ");

            if ($insert->execute([
                'email' => $email,
                'password' => $hashedPassword
            ])) {
                $message = "<div class='alert alert-success'>User registered successfully</div>";
            }
        }
    }
}
?>
