<?php
include "authentication/auth.php";
include "db/db_connect.php";
// rest of your code
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
  <div class="breadcrumb-title pe-3">Add Blog</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item">
          <a href="javascript:;">Add Blog</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Add Blog
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
          <h5 class="mb-0">Add Blog</h5>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="border p-3 rounded">

         <form id="blogForm" class="row g-3" enctype="multipart/form-data">
                
                <!-- Title -->
                <div class="col-12">
                  <label class="form-label">Title</label>
                  <input type="text" name="blog_title" class="form-control" required>
                </div>

                <!-- By KOT Enterprises -->
                <div class="col-12">
                  <label class="form-label">Author</label>
                  <input type="text" name="blog_author" class="form-control" required>

                </div>

                <!-- Description 1 -->
                <div class="col-12">
                  <label class="form-label">Description 1</label>
                  <textarea name="description1" class="form-control" rows="3" required></textarea>
                </div>

                <!-- Description 2 -->
                <div class="col-12">
                  <label class="form-label">Description 2</label>
                  <textarea name="description2" class="form-control" rows="3"></textarea>
                </div>
                       <!-- image -->
                          <div class="col-12">
              <label class="form-label">Blog Image</label>
              <input type="file" name="blog_image" class="form-control" accept="image/*" required>
                  <small class="text-muted">
              Image size must be exactly <strong>800 × 400 px</strong>
              </small>

            </div>

                <!-- Publish -->
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="blog_status" value="1">
                    <label class="form-check-label">Publish Blog</label>
                  </div>
                </div>

                <!-- Submit -->
                <div class="col-12">
                  <button type="submit" class="btn btn-primary px-4">Add Blog</button>
                </div>

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
        
        <!--start switcher-->
       
       <!--end switcher-->

  </div>
  <!--end wrapper-->

 <!-- Toast Notification -->
  <!-- Toast Notification -->
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
    const imageInput = $('input[name="blog_image"]');

    const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

    // Feedback divs
    const titleFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(titleInput);
    const authorFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(authorInput);
    const desc1Feedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(desc1Input);
    const desc2Feedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(desc2Input);
    const imageFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(imageInput);

    // Live validation
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

    // Set limits: Title 80, Author 50, Description1 50, Description2 800
    liveValidate(titleInput, titleFeedback, 80);
    liveValidate(authorInput, authorFeedback, 50);
    liveValidate(desc1Input, desc1Feedback, 80);  // Changed from 500 → 50
    liveValidate(desc2Input, desc2Feedback, 800); // Changed from 500 → 800

    $("#blogForm").on("submit", function (e) {
        e.preventDefault();

        const titleVal = titleInput.val().trim();
        const authorVal = authorInput.val().trim();
        const desc1Val = desc1Input.val().trim();
        const imageVal = imageInput.val();

        if (!titleVal) return showToast("Title is required.", false);
        if (!authorVal) return showToast("Author is required.", false);
        if (!desc1Val) return showToast("Description 1 is required.", false);
        if (!imageVal) return showToast("Image is required.", false);

        const formData = new FormData(this);

        $.ajax({
            url: "subpages/add-blog.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.trim() === "success") {
                    showToast("Blog added successfully!", true);
                    $("#blogForm")[0].reset();
                } else {
                    showToast(response, false);
                }
            },
            error: function (xhr, status, error) {
                showToast("AJAX error: " + error, false);
            }
        });
    });

    function showToast(message, success = true) {
        $("#toastMsg").text(message);
        $("#liveToast").removeClass("text-bg-success text-bg-danger");
        $("#liveToast").addClass(success ? "text-bg-success" : "text-bg-danger");
        new bootstrap.Toast(document.getElementById('liveToast')).show();
    }
});

</script>

</body>

</html>