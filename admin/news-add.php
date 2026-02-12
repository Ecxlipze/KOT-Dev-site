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
     <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>
       <!--end sidebar -->
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">

  <!-- Breadcrumb -->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">News</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item">
          <a href="javascript:;">News</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Add News
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
          <h5 class="mb-0">Add New News</h5>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="border p-3 rounded">

         <form id="newsForm" class="row g-3" enctype="multipart/form-data">

  <div class="col-12">
    <label class="form-label">News Title</label>
    <input type="text" name="news_title" class="form-control" required>
  </div>

  <div class="col-12">
    <label class="form-label">News Description</label>
    <textarea name="news_description" class="form-control" rows="4" required></textarea>
  </div>

  <div class="col-12">
    <label class="form-label">News Image</label>
    <input type="file" name="news_image" id="news_image" class="form-control" required>

  </div>
 <div class="col-12">
  <label class="form-label">Type <span style="color:red">*</span></label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="news_type" value="Event">
    <label class="form-check-label">Event</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="news_type" value="News">
    <label class="form-check-label">News</label>
  </div>
  <div id="typeFeedback" style="color:red;margin-top:5px;"></div>
</div>

<div class="col-12">
  <label class="form-label">Video URL (Optional)</label>
  <input type="url" name="video_url" class="form-control" placeholder="https://example.com/video">
  <div id="videoFeedback" style="color:red;margin-top:5px;"></div>
</div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="news_status" value="1">
      <label class="form-check-label">Publish News</label>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary px-4">
      Add News
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
// Toast helper function
function showToast(message, isSuccess = false) {
    const toastEl = document.getElementById('liveToast');
    const toastMsg = document.getElementById('toastMsg');
    const toast = new bootstrap.Toast(toastEl);

    toastMsg.textContent = message;
    toastEl.classList.remove("text-bg-success", "text-bg-danger");
    toastEl.classList.add(isSuccess ? "text-bg-success" : "text-bg-danger");
    toast.show();
}

// Allowed characters regex
const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

// Title live validation
$('input[name="news_title"]').on('input', function() {
    let val = $(this).val();
    if (!noSpecialChars.test(val)) {
        $(this).val(val.replace(/[^a-zA-Z0-9\s.,?!-]/g, ''));
        showToast("Special characters not allowed in Title!");
    }
    if (val.length > 80) {
        $(this).val(val.substring(0, 80));
        showToast("Title cannot exceed 80 characters!");
    }
});

// Description live validation
$('textarea[name="news_description"]').on('input', function() {
    let val = $(this).val();
    if (!noSpecialChars.test(val)) {
        $(this).val(val.replace(/[^a-zA-Z0-9\s.,?!-]/g, ''));
        showToast("Special characters not allowed in Description!");
    }
    if (val.length > 500) {
        $(this).val(val.substring(0, 500));
        showToast("Description cannot exceed 500 characters!");
    }
});
// Fixed dimension validation
$('#news_image').on('change', function() {
    const file = this.files[0];
    if (!file) return;

    const img = new Image();
    img.onload = function() {
        const requiredWidth = 800;  // Fixed width
        const requiredHeight = 400; // Fixed height

        if (this.width !== requiredWidth || this.height !== requiredHeight) {
            showToast(`Image must be exactly ${requiredWidth}px × ${requiredHeight}px`);
            $('#news_image').val(''); // Reset the input
        }
    };
    img.src = URL.createObjectURL(file);
});
// Existing form submission logic (unchanged)
$("#newsForm").on("submit", function(e) {
    e.preventDefault();

    let valid = true;
    let errorMsg = "";

    const titleVal = $('input[name="news_title"]').val().trim();
    const descVal = $('textarea[name="news_description"]').val().trim();
    const files = $('#news_image')[0].files;
    const typeVal = $('input[name="news_type"]:checked').val();
    const videoVal = $('input[name="video_url"]').val().trim();

    // Validate type
    if (!typeVal) {
        valid = false;
        errorMsg = "Please select a type (Event or News).";
        $("#typeFeedback").text(errorMsg);
    } else {
        $("#typeFeedback").text("");
    }

    // Validate title
    if (!titleVal || !noSpecialChars.test(titleVal) || titleVal.length > 80) {
        valid = false;
        errorMsg = "Please fix the title field.";
    }

    // Validate description
    else if (!descVal || !noSpecialChars.test(descVal) || descVal.length > 500) {
        valid = false;
        errorMsg = "Please fix the description field.";
    }

    // Validate file
    else if (!files || files.length === 0) {
        valid = false;
        errorMsg = "Please select a news image.";
        $("#news_image").next('div').text(errorMsg);
    } else {
        $("#news_image").next('div').text("");
    }

    // Validate video URL (if filled)
    if (videoVal && !/^https?:\/\/[^\s]+$/.test(videoVal)) {
        valid = false;
        errorMsg = "Please enter a valid video URL.";
        $("#videoFeedback").text(errorMsg);
    } else {
        $("#videoFeedback").text("");
    }

    if (!valid) {
        showToast(errorMsg);
        return;
    }

    // Send AJAX
    let formData = new FormData(this);
    $.ajax({
        url: "subpages/add-news.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            if (response.trim() === "success") {
                showToast("News added successfully!", true);
                $("#newsForm")[0].reset();
            } else {
                showToast(response);
            }
        },
        error: function(xhr, status, error) {
            showToast("AJAX error: " + error);
        }
    });
});
</script>

</body>

</html>