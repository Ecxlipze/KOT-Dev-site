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

/* new image upload */
if(!empty($_FILES['image']['name'])){
    if(!empty($imageName)){
        $oldPath="../uploads/".$imageName;
        if(file_exists($oldPath)) unlink($oldPath);
    }
    $imageName = time()."_".$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$imageName);
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
