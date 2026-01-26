<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
$id = $_POST['id'] ?? 0;

if ($id) {
  $q = mysqli_query($con, "DELETE FROM blogs WHERE id=$id");
  echo $q ? "success" : "error";
} else {
  echo "invalid";
}
