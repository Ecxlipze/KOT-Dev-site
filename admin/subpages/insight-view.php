<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $query = "SELECT * FROM insights WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="row">
          <div class="col-md-12 text-center mb-3">
            <img src="uploads/<?= $row['image']; ?>" class="img-fluid rounded" style="max-height: 300px;">
          </div>
          <div class="col-md-12">
            <h4 class="fw-bold"><?= $row['title']; ?></h4>
            <p><?= nl2br($row['description']); ?></p>
            <p>Status: 
              <?php if($row['status'] == 1) { ?>
                <span class="fw-bold text-dark">Publish</span>
              <?php } else { ?>
                <span class="badge rounded-pill alert-warning">Draft</span>
              <?php } ?>
            </p>
            <p>Date: <?= date("d M Y", strtotime($row['created_at'])); ?></p>
          </div>
        </div>

        <?php
    } else {
        echo "<p class='text-danger'>Insight not found.</p>";
    }
}
?>
