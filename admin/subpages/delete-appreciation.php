<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']);

        // Get the image name first
        $stmt = $con->prepare("SELECT image FROM appreciation_board WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $image = $row['image'];

            // Delete database record
            $delStmt = $con->prepare("DELETE FROM appreciation_board WHERE id = ?");
            $delStmt->bind_param("i", $id);
            if($delStmt->execute()){
                // Delete the image file
                $filePath = "../uploads/" . $image;
                if(file_exists($filePath)){
                    unlink($filePath);
                }
                echo "success";
            } else {
                echo "Database delete failed: " . $delStmt->error;
            }

        } else {
            echo "Record not found.";
        }

    } else {
        echo "ID is required.";
    }
} else {
    echo "Invalid request.";
}
?>
