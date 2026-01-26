<?php
// Include database connection
include "../db/db_connect.php";
include "../authentication/auth.php";
// Check if POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $title = isset($_POST['app_title']) ? trim($_POST['app_title']) : '';
    $status = isset($_POST['app_status']) ? 1 : 0;

    // Validate title
    if (empty($title)) {
        echo "Title is required";
        exit;
    }

    // Handle file upload
    if (isset($_FILES['app_image']) && $_FILES['app_image']['error'] === 0) {
        $fileTmpPath = $_FILES['app_image']['tmp_name'];
        $fileName = time() . '_' . $_FILES['app_image']['name']; // Unique filename
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedExts = array('jpg','jpeg','png','gif');

        if (in_array($fileExtension, $allowedExts)) {
            // **Upload directly to main uploads folder**
            $uploadFileDir = '../uploads/'; // no separate appreciation folder
            if(!is_dir($uploadFileDir)){
                mkdir($uploadFileDir, 0777, true);
            }
            $dest_path = $uploadFileDir . $fileName;

            if(move_uploaded_file($fileTmpPath, $dest_path)) {
                // Insert into database
                $stmt = $con->prepare("INSERT INTO appreciation_board (title, image, status) VALUES (?, ?, ?)");
                $stmt->bind_param("ssi", $title, $fileName, $status);

                if($stmt->execute()){
                    echo "success";
                } else {
                    echo "Database insert failed: " . $stmt->error;
                }
            } else {
                echo "Error moving uploaded file.";
            }

        } else {
            echo "Only JPG, JPEG, PNG, GIF files are allowed.";
        }

    } else {
        echo "Image is required.";
    }

}
?>
