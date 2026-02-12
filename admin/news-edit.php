<?php
include "authentication/auth.php";
include "db/db_connect.php";



if(!isset($_GET['id'])) die("ID missing");
$id = (int)$_GET['id'];

$query = "SELECT * FROM news WHERE id=$id";
$result = mysqli_query($con,$query);
if(!$result || mysqli_num_rows($result)==0) die("News not found");

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
  <div class="breadcrumb-title pe-3">Edit News</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item">
          <a href="javascript:;">News</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Edit News
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
          <h5 class="mb-0">Edit News</h5>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="border p-3 rounded">

       <form id="updateNewsForm" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?= $data['id']; ?>">

                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($data['title']); ?>" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4"><?= htmlspecialchars($data['description']); ?></textarea>
                  </div>

                  <div class="mb-3">
  <label class="form-label">Type</label>
  <select name="type" class="form-control">
    <!-- Show current database value as selected -->
    <option value="<?= htmlspecialchars($data['type']); ?>" selected><?= htmlspecialchars($data['type']); ?></option>
    <!-- Other options -->
    <option value="Event">Event</option>
    <option value="News">News</option>
  </select>
</div>

                  <div class="mb-3">
                    <label class="form-label">Video URL</label>
                    <input type="url" name="video_url" class="form-control" value="<?= htmlspecialchars($data['video_url']); ?>">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    <?php if(!empty($data['image'])){ ?>
                      <img src="uploads/<?= htmlspecialchars($data['image']); ?>" width="120" id="news_image" class="rounded">
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

                  <button type="submit" class="btn btn-warning">Update News</button>
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

// Function to block special characters
function blockSpecialChars(e, maxLength = null) {
    const regex = /^[a-zA-Z0-9\s.,!?-]*$/; // Allowed characters
    let inputVal = e.target.value;

    // Remove invalid characters
    if (!regex.test(inputVal)) {
        inputVal = inputVal.replace(/[^a-zA-Z0-9\s.,!?-]/g, '');
        showToast("Special characters not allowed!");
    }

    // Limit characters if maxLength is set
    if (maxLength !== null && inputVal.length > maxLength) {
        inputVal = inputVal.substring(0, maxLength);
        showToast(`Maximum ${maxLength} characters allowed!`);
    }

    e.target.value = inputVal;
}

// Apply validation
const titleField = document.querySelector('input[name="title"]');
const descField = document.querySelector('textarea[name="description"]');

titleField.addEventListener('input', (e) => blockSpecialChars(e));
descField.addEventListener('input', (e) => blockSpecialChars(e, 500));
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
// Existing AJAX submit
$("#updateNewsForm").submit(function(e){
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url:"subpages/update-news.php",
        type:"POST",
        data:formData,
        contentType:false,
        processData:false,
        success:function(res){
            if(res.trim() === "success"){
                showToast("News updated successfully!", true);
                setTimeout(() => { window.location.href = "news-show.php"; }, 1500);
            } else {
                showToast(res);
            }
        },
        error: function(){
            showToast("Something went wrong!");
        }
    });
});
</script>




</body>

</html>