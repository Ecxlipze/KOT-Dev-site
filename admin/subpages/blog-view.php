<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
$id = $_GET['id'] ?? 0;

$q = mysqli_query($con, "SELECT * FROM blogs WHERE id = $id");
$row = mysqli_fetch_assoc($q);
?>

<h4><?= htmlspecialchars($row['blog_title']); ?></h4>
<p class="text-muted">By <?= htmlspecialchars($row['blog_author']); ?></p>
<hr>

<?php if(!empty($row['blog_image'])): ?>
<div class="mb-3 text-center">
    <img src="uploads/<?= htmlspecialchars($row['blog_image']); ?>" 
         alt="Blog Image" style="max-width:50%; height:auto; border-radius:6px;">
</div>
<?php endif; ?>

<p><?= nl2br($row['description1']); ?></p>

<?php if (!empty($row['description2'])): ?>
<hr>
<p><?= nl2br($row['description2']); ?></p>
<?php endif; ?>
