<?php
include('../db/db_connect.php');
include "../authentication/auth.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $status = isset($_POST['status']) ? 1 : 0;

    if(isset($_FILES['new_year_image'])){
        $file = $_FILES['new_year_image'];
        $filename = time().'_'.$file['name'];
        // Save directly in uploads folder
        $target = '../uploads/'.$filename;

        if(move_uploaded_file($file['tmp_name'], $target)){
            $stmt = $con->prepare("INSERT INTO new_year (image, status) VALUES (?, ?)");
            $stmt->bind_param("si", $filename, $status);
            if($stmt->execute()){
                echo "success";
            } else {
                echo "DB Error!";
            }
        } else {
            echo "File upload error!";
        }
    } else {
        echo "No file selected!";
    }
}
?>
