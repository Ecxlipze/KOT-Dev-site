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
        <div class="breadcrumb-title pe-3">Event Management</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;">Events</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Event</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Add Event</h5>
            </div>
            <div class="card-body">
              <div class="border p-3 rounded">
                <form id="eventForm" class="row g-3" enctype="multipart/form-data">
                  <div class="col-12">
                    <label class="form-label">Event Name</label>
                    <input type="text" name="event_name" class="form-control" required>
                  </div>

                  <div class="col-12">
                    <label class="form-label">Event Date</label>
                    <input type="date" name="event_date" class="form-control" required>
                  </div>

                  <div class="col-12">
                    <label class="form-label">Event Time</label>
                    <input type="time" name="event_time" class="form-control" required>
                  </div>

                  <div class="col-12">
                    <label class="form-label">Event Venue</label>
                    <input type="text" name="event_venue" class="form-control" required>
                  </div>
                  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="event_status" value="1">
      <label class="form-check-label">Publish Event</label>
    </div>
  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-4">Add Event</button>
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
      const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

      const nameInput = $('input[name="event_name"]');
      const venueInput = $('input[name="event_venue"]');
      const nameFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(nameInput);
      const venueFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(venueInput);

      function validateInput(input, maxLength, feedbackEl) {
        input.on("input", function () {
          const value = $(this).val();
          if (!noSpecialChars.test(value)) {
            feedbackEl.text("Special characters are not allowed.");
          } else if (value.length > maxLength) {
            feedbackEl.text(`Maximum ${maxLength} characters allowed.`);
          } else {
            feedbackEl.text("");
          }
        });
      }

      validateInput(nameInput, 100, nameFeedback);
      validateInput(venueInput, 150, venueFeedback);

      $("#eventForm").on("submit", function (e) {
        e.preventDefault();

        let valid = true;
        let errorMsg = "";

        const nameVal = nameInput.val().trim();
        const venueVal = venueInput.val().trim();

        if (!nameVal || !noSpecialChars.test(nameVal) || nameVal.length > 100) {
          valid = false;
          errorMsg = "Please fix the Event Name.";
        } else if (!venueVal || !noSpecialChars.test(venueVal) || venueVal.length > 150) {
          valid = false;
          errorMsg = "Please fix the Event Venue.";
        }

        if (!valid) {
          $("#toastMsg").text(errorMsg);
          $("#liveToast").removeClass("text-bg-success").addClass("text-bg-danger");
          new bootstrap.Toast(document.getElementById('liveToast')).show();
          return;
        }

        let formData = new FormData(this);
        $.ajax({
          url: "subpages/add-event.php",
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response.trim() === "success") {
              $("#toastMsg").text("Event added successfully!");
              $("#liveToast").removeClass("text-bg-danger").addClass("text-bg-success");
              new bootstrap.Toast(document.getElementById('liveToast')).show();
              $("#eventForm")[0].reset();
            } else {
              $("#toastMsg").text(response);
              $("#liveToast").removeClass("text-bg-success").addClass("text-bg-danger");
              new bootstrap.Toast(document.getElementById('liveToast')).show();
            }
          },
          error: function (xhr, status, error) {
            $("#toastMsg").text("AJAX error: " + error);
            $("#liveToast").removeClass("text-bg-success").addClass("text-bg-danger");
            new bootstrap.Toast(document.getElementById('liveToast')).show();
          }
        });
      });
    });
  </script>

</body>

</html>