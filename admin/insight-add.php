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
  <div class="breadcrumb-title pe-3">Insights</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item">
          <a href="javascript:;">Insights</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Add Insight
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
          <h5 class="mb-0">Add New Insight</h5>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="border p-3 rounded">

          <form id="insightForm" class="row g-3" enctype="multipart/form-data">

  <div class="col-12">
    <label class="form-label">Insight Title</label>
    <input type="text" name="title" class="form-control" required>
  </div>

  <div class="col-12">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="4" required></textarea>
  </div>

  <div class="col-12">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control" required>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="status" value="1">
      <label class="form-check-label">Publish Insight</label>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary px-4">
      Add Insight
    </button>
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
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

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
$(document).ready(function() {
    const titleInput = $('input[name="title"]');
    const descInput = $('textarea[name="description"]');

    // Regex to allow only letters, numbers, space, .,?!-
    const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

    // Live feedback elements
    const titleFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(titleInput);
    const descFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(descInput);

    // Live validation function
    function validateInput(input, maxLength, feedbackEl) {
        input.on("input", function() {
            let val = $(this).val();

            // Remove invalid characters immediately
            if (!noSpecialChars.test(val)) {
                val = val.replace(/[^a-zA-Z0-9\s.,?!-]/g, '');
                $(this).val(val);
                showToast("Special characters are not allowed.");
            }

            // Limit characters
            if (val.length > maxLength) {
                $(this).val(val.substring(0, maxLength));
                feedbackEl.text(`Maximum ${maxLength} characters allowed.`);
            } else {
                feedbackEl.text("");
            }
        });
    }

    // Apply live validation
    validateInput(titleInput, 80, titleFeedback);
    validateInput(descInput, 500, descFeedback);

    // Toast helper
    function showToast(msg, isSuccess=false) {
        const toastEl = document.getElementById('liveToast');
        const toastMsg = document.getElementById('toastMsg');
        const toast = new bootstrap.Toast(toastEl);

        toastMsg.textContent = msg;
        toastEl.classList.remove("text-bg-success", "text-bg-danger");
        toastEl.classList.add(isSuccess ? "text-bg-success" : "text-bg-danger");
        toast.show();
    }

    // Form submission
    $("#insightForm").on("submit", function(e) {
        e.preventDefault();

        let titleVal = titleInput.val().trim();
        let descVal = descInput.val().trim();
        let valid = true;
        let errorMsg = "";

        if (!noSpecialChars.test(titleVal) || titleVal.length > 80) {
            valid = false;
            errorMsg = "Please fix the title field.";
        } else if (!noSpecialChars.test(descVal) || descVal.length > 500) {
            valid = false;
            errorMsg = "Please fix the description field.";
        }

        if (!valid) {
            showToast(errorMsg);
            return;
        }

        // Proceed AJAX
        let formData = new FormData(this);
        $.ajax({
            url: "subpages/add-insight.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.trim() === "success") {
                    showToast("Insight added successfully!", true);
                    $("#insightForm")[0].reset();
                } else {
                    showToast(response);
                }
            },
            error: function() {
                showToast("Something went wrong!");
            }
        });
    });
});
</script>



</body>

</html>