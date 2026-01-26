<?php
include "../db/db_connect.php"; // ensure path is correct
include "../authentication/auth.php";
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "SELECT * FROM announcements WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="p-3">
            <h4 class="fw-bold mb-2"><?= htmlspecialchars($row['announcement_title']); ?></h4>
            <p><strong>Author:</strong> <?= htmlspecialchars($row['announcement_author']); ?></p>
            <p><strong>Status:</strong> 
                <?php if ($row['announcement_status'] == 1) { ?>
                    <span class="text-success fw-bold">Published</span>
                <?php } else { ?>
                    <span class="badge rounded-pill alert-warning">Draft</span>
                <?php } ?>
            </p>
            <p><strong>Date:</strong> <?= date("d M Y", strtotime($row['created_at'])); ?></p>
            <hr>
            <div>
                <?= $row['description1']; ?>
            </div>
        </div>
        <?php
    } else {
        echo "<p class='text-danger'>Announcement not found.</p>";
    }
} else {
    echo "<p class='text-danger'>Invalid request.</p>";
}
?>
