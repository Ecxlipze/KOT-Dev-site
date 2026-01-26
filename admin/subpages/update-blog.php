<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
$id = $_POST['id'];
$title = $_POST['blog_title'];
$author = $_POST['blog_author'];
$desc1 = $_POST['description1'];
$desc2 = $_POST['description2'];
$status = isset($_POST['blog_status']) ? 1 : 0;

$query = "UPDATE blogs SET
  blog_title = '$title',
  blog_author = '$author',
  description1 = '$desc1',
  description2 = '$desc2',
  blog_status = '$status'
WHERE id = '$id'";

if(mysqli_query($con, $query)){
  echo "success";
}else{
  echo "Database error";
}
