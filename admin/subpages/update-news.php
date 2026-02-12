<?php
include "../db/db_connect.php";
include "../authentication/auth.php";

if($_SERVER['REQUEST_METHOD'] !== "POST") {
    echo "Invalid request"; 
    exit; 
}

if(!isset($_POST['id'], $_POST['title'], $_POST['description'], $_POST['type'], $_POST['video_url'])){
    echo "Missing fields"; 
    exit;
}

$id = (int)$_POST['id'];
$title = mysqli_real_escape_string($con, $_POST['title']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$type = mysqli_real_escape_string($con, $_POST['type']);
$video_url = mysqli_real_escape_string($con, $_POST['video_url']);
$status = isset($_POST['status']) ? 1 : 0;

/* old image */
$oldData = mysqli_fetch_assoc(mysqli_query($con,"SELECT image FROM news WHERE id=$id"));
$imageName = $oldData['image'];

/* new image upload with fixed dimension check */
if(!empty($_FILES['image']['name'])){
    $tmpName = $_FILES['image']['tmp_name'];

    // Desired fixed dimensions
    $fixedWidth = 800;
    $fixedHeight = 400;

    // Check uploaded image dimensions
    $imageInfo = getimagesize($tmpName);
    if(!$imageInfo){
        echo "Invalid image file.";
        exit;
    }
    $width = $imageInfo[0];
    $height = $imageInfo[1];

    if($width != $fixedWidth || $height != $fixedHeight){
        echo "Error: Image must be exactly {$fixedWidth}px × {$fixedHeight}px.";
        exit;
    }

    // Delete old image
    if(!empty($imageName)){
        $oldPath="../uploads/".$imageName;
        if(file_exists($oldPath)) unlink($oldPath);
    }

    // Move new image
    $imageName = time()."_".$_FILES['image']['name'];
    if(!move_uploaded_file($tmpName, "../uploads/".$imageName)){
        echo "Failed to upload image.";
        exit;
    }
}

$query = "UPDATE news SET 
            title='$title',
            description='$description',
            type='$type',
            video_url='$video_url',
            image='$imageName',
            status=$status
          WHERE id=$id";

if(mysqli_query($con, $query)) echo "success";
else echo "Update failed: " . mysqli_error($con);
?>
