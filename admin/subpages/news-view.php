<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $query = "SELECT * FROM news WHERE id=$id LIMIT 1";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="row">
          <div class="col-md-12 text-center mb-3">
            <img src="uploads/<?= htmlspecialchars($row['image']); ?>" class="img-fluid rounded" style="max-height:300px;">
          </div>

          <div class="col-md-12">
            <h4 class="fw-bold"><?= htmlspecialchars($row['title']); ?></h4>
            <p><strong>Description:</strong><br><?= nl2br(htmlspecialchars($row['description'])); ?></p>
            <p><strong>Type:</strong> <?= htmlspecialchars($row['type']); ?></p>

            <p><strong>Video URL:</strong> 
              <?php if(!empty($row['video_url'])): ?>
                <a href="<?= htmlspecialchars($row['video_url']); ?>" target="_blank"><?= htmlspecialchars($row['video_url']); ?></a>
              <?php else: ?>
                N/A
              <?php endif; ?>
            </p>

            <p><strong>Status:</strong> 
              <?= ($row['status']==1) ? '<span class="fw-bold text-dark">Publish</span>' : '<span class="badge rounded-pill alert-warning">Draft</span>'; ?>
            </p>

            <p><strong>Created At:</strong> <?= date("d M Y, h:i A", strtotime($row['created_at'])); ?></p>
          </div>
        </div>
        <?php
    } else {
        echo "<p class='text-danger text-center'>News not found.</p>";
    }
} else {
    echo "<p class='text-danger text-center'>Invalid request.</p>";
}
