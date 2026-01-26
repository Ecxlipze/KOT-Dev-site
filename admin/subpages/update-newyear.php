<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if($_SERVER['REQUEST_METHOD'] !== "POST") {
    echo "Invalid request"; 
    exit;
}

if(!isset($_POST['id'])) {
    echo "Missing ID"; 
    exit;
}

$id = (int)$_POST['id'];

/* get old image */
$result = mysqli_query($con, "SELECT image FROM new_year WHERE id=$id");
if(!$result || mysqli_num_rows($result) == 0){
    echo "Record not found";
    exit;
}
$oldData = mysqli_fetch_assoc($result);
$imageName = $oldData['image'];

/* new image upload */
if(!empty($_FILES['image']['name'])){

    // delete old image if exists
    if(!empty($imageName)){
        $oldPath = "../uploads/".$imageName;
        if(file_exists($oldPath)) unlink($oldPath);
    }

    // move new image
    $imageName = time()."_".$_FILES['image']['name'];
    if(move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$imageName)){

        // update DB with new image
        $query = "UPDATE new_year SET image='$imageName' WHERE id=$id";
        if(mysqli_query($con, $query)) echo "success";
        else echo "DB Error: ".mysqli_error($con);

    } else {
        echo "Failed to upload image";
    }

} else {
    echo "No image selected";
}
?>
