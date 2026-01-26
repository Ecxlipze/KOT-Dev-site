<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $con->prepare("SELECT * FROM appreciation_board WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        ?>
        <div class="text-center">
             <img src="uploads/<?= $row['image']; ?>" class="img-fluid rounded" style="max-height: 300px;">
        </div>
        <h5 class="fw-bold"><?= $row['title']; ?></h5>
        <p>Status: <?= $row['status'] ? '<span class="text-success">Publish</span>' : '<span class="text-warning">Draft</span>'; ?></p>
        <p>Date: <?= date("d M Y", strtotime($row['created_at'])); ?></p>
        <?php
    } else {
        echo '<p class="text-danger">Appreciation not found.</p>';
    }
} else {
    echo '<p class="text-danger">Invalid request.</p>';
}
?>
