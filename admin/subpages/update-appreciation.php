<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
header('Content-Type: application/json'); // Return JSON for AJAX

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = intval($_POST['id']);
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $status = isset($_POST['status']) ? 1 : 0;

    if(empty($title)){
        echo json_encode(['status' => 'error', 'message' => 'Title is required.']);
        exit;
    }

    // Get old image
    $stmt = $con->prepare("SELECT image FROM appreciation_board WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $oldImage = $row['image'];

    // Handle new image if uploaded
    if(isset($_FILES['image']) && $_FILES['image']['error'] === 0){
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = time() . '_' . $_FILES['image']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedExts = array('jpg','jpeg','png','gif');

        if(in_array($fileExtension, $allowedExts)){
            $uploadFileDir = '../uploads/';
            $dest_path = $uploadFileDir . $fileName;

            if(move_uploaded_file($fileTmpPath, $dest_path)){
                // Delete old image
                if($oldImage && file_exists($uploadFileDir . $oldImage)){
                    unlink($uploadFileDir . $oldImage);
                }
                $imageToSave = $fileName;
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error uploading new image.']);
                exit;
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid image format.']);
            exit;
        }
    } else {
        $imageToSave = $oldImage; // Keep old image if no new upload
    }

    // Update DB
    $updateStmt = $con->prepare("UPDATE appreciation_board SET title = ?, image = ?, status = ? WHERE id = ?");
    $updateStmt->bind_param("ssii", $title, $imageToSave, $status, $id);

    if($updateStmt->execute()){
        echo json_encode(['status' => 'success', 'message' => 'Appreciation updated successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Update failed: ' . $updateStmt->error]);
    }
    exit;
}
?>
