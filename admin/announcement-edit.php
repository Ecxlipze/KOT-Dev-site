<?php
include "db/db_connect.php";
include "authentication/auth.php";
if(!isset($_GET['id'])) die("ID missing");
$id = (int)$_GET['id'];

$result = mysqli_query($con,"SELECT * FROM announcements WHERE id=$id");
if(mysqli_num_rows($result)==0) die("Announcement not found");

$data = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <link rel="icon" href="assets/images/Vector.svg" type="image/png" />
  <title>Kot Enterprises Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
   

        <!--start sidebar -->
    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>

       <!--start content-->
          <main class="page-content">

  <!-- Breadcrumb -->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Edit Announcement</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item">
          <a href="javascript:;">Announcement</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Edit Announcement
        </li>
      </ol>
    </nav>
  </div>
</div>

  <!-- End Breadcrumb -->

  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card">

        <!-- Card Header -->
        <div class="card-header py-3 bg-transparent">
          <h5 class="mb-0">Edit Announcement</h5>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="border p-3 rounded">

       <form id="updateAnnouncementForm" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" name="announcement_title" class="form-control" value="<?= $data['announcement_title'] ?? '' ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Author</label>
      <input type="text" name="announcement_author" class="form-control" value="<?= $data['announcement_author'] ?? '' ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Description 1</label>
      <textarea name="description1" class="form-control" rows="4"><?= $data['description1'] ?? '' ?></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Description 2</label>
      <textarea name="description2" class="form-control" rows="4"><?= $data['description2'] ?? '' ?></textarea>
    </div>

    <div class="form-check mb-3">
      <input type="checkbox" class="form-check-input" name="announcement_status" value="1"
        <?= (isset($data['announcement_status']) && $data['announcement_status']==1) ? 'checked' : '' ?>>
      <label class="form-check-label">Publish</label>
    </div>

    <button type="submit" class="btn btn-warning">Update Announcement</button>
  </form> 


          </div>
        </div>

      </div>
    </div>
  </div>

</main>

       <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
       

  </div>
  <!--end wrapper-->

 <div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert">
      <div class="d-flex">
        <div class="toast-body" id="toastMsg"></div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>

  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <!--app-->
  <script src="assets/js/app.js"></script>
   <script src="assets/js/announcement-edit.js" ></script>





</body>

</html>