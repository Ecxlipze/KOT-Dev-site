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
      <div class="breadcrumb-title pe-3">Certificate Verification Center</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Certificate</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card">

          <div class="card-header py-3 bg-transparent">
            <h5 class="mb-0">Add Certificate Verification Entry</h5>
          </div>

          <div class="card-body">
            <div class="border p-3 rounded">

              <form id="certificateForm" enctype="multipart/form-data">
                
                <div class="col-12 mb-3">
                  <label class="form-label">Type of Certificate</label>
                  <input type="text" name="certificate_type" class="form-control" placeholder="Enter certificate type" required>
                </div>

                <div class="col-12 mb-3">
                  <label class="form-label">Presented To</label>
                  <input type="text" name="presented_to" class="form-control" placeholder="Recipient Name" required>
                </div>

                <div class="col-12 mb-3">
                  <label class="form-label">Date of Achievement</label>
                  <input type="date" name="achievement_date" class="form-control" required>
                </div>

                <div class="col-12 mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="status" value="1">
                    <label class="form-check-label">Publish</label>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary px-4">Add Certificate</button>
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

<!-- Toast -->
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
    const certTypeInput = $('input[name="certificate_type"]');
    const presentedToInput = $('input[name="presented_to"]');

    // Regex to allow letters, numbers, spaces, .,?!-
    const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

    // Live feedback elements
    const certTypeFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(certTypeInput);
    const presentedToFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(presentedToInput);

    function showToast(message, type="success") {
        const toastEl = $("#liveToast");
        $("#toastMsg").text(message);
        toastEl.removeClass("text-bg-success text-bg-danger").addClass("text-bg-" + type);
        const toast = new bootstrap.Toast(toastEl[0]);
        toast.show();
    }

    // Live validation function
    function validateInput(input, maxLength, feedbackEl) {
        input.on("input", function() {
            let val = $(this).val();
            if (!noSpecialChars.test(val)) {
                val = val.replace(/[^a-zA-Z0-9\s.,?!-]/g, '');
                $(this).val(val);
                feedbackEl.text("Special characters are not allowed.");
            } else if (val.length > maxLength) {
                $(this).val(val.substring(0, maxLength));
                feedbackEl.text(`Maximum ${maxLength} characters allowed.`);
            } else {
                feedbackEl.text("");
            }
        });
    }

    // Apply live validation
    validateInput(certTypeInput, 100, certTypeFeedback);
    validateInput(presentedToInput, 80, presentedToFeedback);

    // Form submit with validation
    $("#certificateForm").on("submit", function(e) {
        e.preventDefault();

        let certVal = certTypeInput.val().trim();
        let presentedVal = presentedToInput.val().trim();
        let valid = true;
        let errorMsg = "";

        if (!noSpecialChars.test(certVal) || certVal.length > 100) {
            valid = false;
            errorMsg = "Please fix the Certificate Type field.";
        } else if (!noSpecialChars.test(presentedVal) || presentedVal.length > 80) {
            valid = false;
            errorMsg = "Please fix the Presented To field.";
        }

        if (!valid) {
            showToast(errorMsg, "danger");
            return;
        }

        let formData = new FormData(this);
        $.ajax({
            url: "subpages/add-certificate.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(response.trim() === "success"){
                    showToast("Certificate added successfully!", "success");
                    $("#certificateForm")[0].reset();
                } else {
                    showToast(response, "danger");
                }
            },
            error: function(xhr, status, error){
                showToast("AJAX error: " + error, "danger");
            }
        });
    });
});
</script>


</body>

</html>