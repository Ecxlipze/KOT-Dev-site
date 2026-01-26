<?php 
include "../db/db_connect.php";
include "../authentication/auth.php";
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = mysqli_query($con, "SELECT * FROM new_year WHERE id=$id");
    if($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="text-center">
            <img src="uploads/<?= $row['image']; ?>" class="img-fluid rounded" style="max-height:300px;">
        </div>
        <p><strong>Status:</strong> <?= $row['status'] == 1 ? 'Publish' : 'Draft'; ?></p>
        <p><strong>Date:</strong> <?= date("d M Y", strtotime($row['created_at'])); ?></p>
        <?php
    } else {
        echo "<p class='text-danger'>Record not found.</p>";
    }
}
?>
