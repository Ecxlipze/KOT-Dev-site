<?php
// backend/delete-event.php
include "../db/db_connect.php";
include "../authentication/auth.php";
if(isset($_POST['id'])){
    $id = intval($_POST['id']);

    $sql = "DELETE FROM events WHERE id = $id";
    if($con->query($sql)){
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
$con->close();
?>
