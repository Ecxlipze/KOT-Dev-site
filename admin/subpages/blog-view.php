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

<p><?= nl2br($row['description1']); ?></p>

<?php if (!empty($row['description2'])) { ?>
<hr>
<p><?= nl2br($row['description2']); ?></p>
<?php } ?>
