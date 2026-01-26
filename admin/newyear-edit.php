<?php
include "authentication/auth.php";
include "db/db_connect.php";
// rest of your code


if(!isset($_GET['id'])) die("ID missing");
$id = (int)$_GET['id'];

// Fetch record from new_year table
$query = "SELECT * FROM new_year WHERE id=$id";
$result = mysqli_query($con,$query);
if(!$result || mysqli_num_rows($result)==0) die("Record not found");

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
     <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">

  <!-- Breadcrumb -->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Edit New Year</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item">
          <a href="javascript:;">New Year</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Edit New Year
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
          <h5 class="mb-0">Edit New Year</h5>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="border p-3 rounded">

        <form id="updateNewYearForm" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    

    <div class="mb-3">
      <label class="form-label">Current Image</label><br>
      <?php if(!empty($data['image'])){ ?>
        <img src="uploads/<?= $data['image']; ?>" width="120">
      <?php } else { echo "<p>No image</p>"; } ?>
    </div>

    <div class="mb-3">
      <label class="form-label">Change Image (optional)</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="form-check mb-3">
      <input type="checkbox" class="form-check-input" name="status" value="1"
        <?= ($data['status']==1)?'checked':''; ?>>
      <label class="form-check-label">Publish</label>
    </div>

    <button type="submit" class="btn btn-warning">Update</button>
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
  
<script>
$("#updateNewYearForm").submit(function(e){
  e.preventDefault();
  let formData = new FormData(this);

  $.ajax({
    url:"subpages/update-newyear.php", 
    type:"POST",
    data:formData,
    contentType:false,
    processData:false,
    success:function(res){
      if(res.trim() === "success"){
        // show toast instead of alert
        $("#toastMsg").text("New Year record updated successfully!");
        var toastEl = document.getElementById('liveToast');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();

        // optional redirect after 2 sec
        setTimeout(function(){
          window.location.href = "newyear-show.php";
        }, 2000);

      } else {
        $("#toastMsg").text(res);
        var toastEl = document.getElementById('liveToast');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
      }
    },
    error: function(){
      $("#toastMsg").text("Something went wrong!");
      var toastEl = document.getElementById('liveToast');
      var toast = new bootstrap.Toast(toastEl);
      toast.show();
    }
  });
});
</script>



</body>

</html>