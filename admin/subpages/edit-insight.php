<!-- extra-pagethis  -->
<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
$data = [];

if (!isset($_GET['id'])) {
  die("ID missing");
}

$id = (int) $_GET['id'];

$query = "SELECT * FROM insights WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_assoc($result);
} else {
  die("Insight not found");
}
?>
