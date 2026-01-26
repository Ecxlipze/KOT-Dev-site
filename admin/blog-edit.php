<?php
include "authentication/auth.php";
include "db/db_connect.php";


if(!isset($_GET['id'])) die("ID missing");
$id = (int)$_GET['id'];

$result = mysqli_query($con,"SELECT * FROM blogs WHERE id=$id");
if(mysqli_num_rows($result)==0) die("Blog not found");

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
    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">

  <!-- Breadcrumb -->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Edit Blog</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item">
          <a href="javascript:;">Blog</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Edit Blog
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
          <h5 class="mb-0">Edit Blog</h5>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="border p-3 rounded">

       
<form id="updateBlogForm"  enctype="multipart/form-data" >

 <input type="hidden" name="id" value="<?= $data['id']; ?>">

<div class="mb-3">
  <label class="form-label">Blog Title</label>
  <input type="text" name="blog_title" class="form-control"
         value="<?= $data['blog_title'] ?? '' ?>" required>
</div>

<div class="mb-3">
  <label class="form-label">Author</label>
  <input type="text" name="blog_author" class="form-control"
         value="<?= $data['blog_author'] ?? '' ?>" required>
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
  <input type="checkbox" class="form-check-input" name="blog_status" value="1"
    <?= (isset($data['blog_status']) && $data['blog_status']==1) ? 'checked' : '' ?>>
  <label class="form-check-label">Publish</label>
</div>

<button type="submit" class="btn btn-warning">Update Blog</button>

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
$(document).ready(function () {
    const titleInput = $('input[name="blog_title"]');
    const authorInput = $('input[name="blog_author"]');
    const desc1Input = $('textarea[name="description1"]');
    const desc2Input = $('textarea[name="description2"]');

    const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

    // Feedback divs
    const titleFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(titleInput);
    const authorFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(authorInput);
    const desc1Feedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(desc1Input);
    const desc2Feedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(desc2Input);

    // Live validation function
    function liveValidate(input, feedback, maxLen) {
        input.on("input", function () {
            let val = $(this).val();
            if (!noSpecialChars.test(val)) {
                val = val.replace(/[^a-zA-Z0-9\s.,?!-]/g, '');
                $(this).val(val);
                feedback.text("Special characters not allowed.");
            } else if (val.length > maxLen) {
                $(this).val(val.substring(0, maxLen));
                feedback.text(`Maximum ${maxLen} characters allowed.`);
            } else {
                feedback.text("");
            }
        });
    }

    liveValidate(titleInput, titleFeedback, 80);
    liveValidate(authorInput, authorFeedback, 50);
    liveValidate(desc1Input, desc1Feedback, 500);
    liveValidate(desc2Input, desc2Feedback, 500);

    $("#updateBlogForm").on("submit", function (e) {
        e.preventDefault();

        const titleVal = titleInput.val().trim();
        const authorVal = authorInput.val().trim();
        const desc1Val = desc1Input.val().trim();

        if (!titleVal) return showToast("Title is required.", false);
        if (!authorVal) return showToast("Author is required.", false);
        if (!desc1Val) return showToast("Description 1 is required.", false);

        const formData = $(this).serialize();

        $.ajax({
            url: "subpages/update-blog.php",
            type: "POST",
            data: formData,
            success: function (res) {
                const toastEl = document.getElementById('liveToast');
                const toastMsg = document.getElementById('toastMsg');
                const toast = new bootstrap.Toast(toastEl);

                if (res.trim() === 'success') {
                    toastMsg.textContent = "Blog updated successfully!";
                    toastEl.classList.remove("text-bg-danger");
                    toastEl.classList.add("text-bg-success");
                    toast.show();

                    setTimeout(() => {
                        window.location.href = "blog-show.php";
                    }, 1500);
                } else {
                    toastMsg.textContent = res;
                    toastEl.classList.remove("text-bg-success");
                    toastEl.classList.add("text-bg-danger");
                    toast.show();
                }
            },
            error: function () {
                showToast("AJAX error!", false);
            }
        });
    });

    function showToast(message, success = true) {
        const toastEl = document.getElementById('liveToast');
        const toastMsg = document.getElementById('toastMsg');
        toastMsg.textContent = message;
        toastEl.classList.remove("text-bg-success text-bg-danger");
        toastEl.classList.add(success ? "text-bg-success" : "text-bg-danger");
        new bootstrap.Toast(toastEl).show();
    }
});
</script>





</body>

</html>