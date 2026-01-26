<?php
include "authentication/auth.php";
include "db/db_connect.php";


$limit = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page < 1) $page = 1;

$offset = ($page - 1) * $limit;
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
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Show News</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">News List</li>
                  </ol>
                </nav>
              </div>
              
            </div>
            <!--end breadcrumb-->

              <div class="card">
              
                <div class="card-body">

                 <div class="table-responsive">
        <table class="table align-middle table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Title</th>
              <th>Description</th>
              <th>Type</th>
              <th>Video URL</th>
              <th>Status</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
  <?php
  $query = "SELECT * FROM news ORDER BY id DESC LIMIT $offset, $limit";
$result = mysqli_query($con, $query);

$totalQuery = "SELECT COUNT(*) AS total FROM news";
$totalResult = mysqli_query($con, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalRecords = $totalRow['total'];
$totalPages = ceil($totalRecords / $limit);

$i = $offset + 1;

while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?= $i++; ?></td>
  <td><img src="uploads/<?= $row['image']; ?>" width="50" class="rounded"></td>
  <td><?= $row['title']; ?></td>
  <td><?= substr($row['description'], 0, 80); ?>...</td>
  <td><?= $row['type']; ?></td>
  <td>
    <?php if(!empty($row['video_url'])): ?>
      <a href="<?= $row['video_url']; ?>" target="_blank">Link</a>
    <?php else: ?>
      N/A
    <?php endif; ?>
  </td>
  <td>
    <?= ($row['status']==1) ? '<span class="fw-bold text-dark">Publish</span>' : '<span class="badge rounded-pill alert-warning">Draft</span>'; ?>
  </td>
  <td><?= date("d M Y", strtotime($row['created_at'])); ?></td>
  <td>
    <div class="d-flex gap-3 fs-6">
      <a href="javascript:void(0);" class="text-primary viewNews" data-id="<?= $row['id']; ?>" title="View">
        <i class="bi bi-eye-fill"></i>
      </a>
      <a href="news-edit.php?id=<?= $row['id']; ?>" class="text-warning"><i class="bi bi-pencil-fill"></i></a>
      <a href="javascript:void(0)" class="text-danger deleteNews" data-id="<?= $row['id']; ?>" title="Delete">
        <i class="bi bi-trash-fill"></i>
      </a>
    </div>
  </td>
</tr>
<?php } ?>
          </tbody>
        </table>

                  </div>

            <nav class="float-end mt-4">
  <ul class="pagination">
    <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
      <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
    </li>

    <?php for($p=1; $p<=$totalPages; $p++){ ?>
      <li class="page-item <?= ($page == $p) ? 'active' : '' ?>">
        <a class="page-link" href="?page=<?= $p ?>"><?= $p ?></a>
      </li>
    <?php } ?>

    <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : '' ?>">
      <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
    </li>
  </ul>
</nav>


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
  <div id="deleteToast" class="toast align-items-center text-bg-success border-0">
    <div class="d-flex">
      <div class="toast-body" id="toastMsg"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>


<!-- View Insight Modal -->
<div class="modal fade" id="viewInsightModal" tabindex="-1" aria-labelledby="viewInsightLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewInsightLabel">Insight Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="modalInsightContent">
          <!-- Dynamic content will load here -->
          <div class="text-center">
            <div class="spinner-border text-primary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>
      </div>
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

  // ================= DELETE NEWS =================
  $(document).on("click", ".deleteNews", function () {

    if (!confirm("Are you sure you want to delete this news?")) {
      return;
    }

    let newsId = $(this).data("id");
    let row = $(this).closest("tr");

    $.ajax({
      url: "subpages/delete-news.php", // Make sure this file handles news deletion
      type: "POST",
      data: { id: newsId },
      success: function (response) {
        if (response === "success") {
          row.fadeOut(500, function () {
            $(this).remove();
          });

          $("#toastMsg").text("News deleted successfully");
          $("#deleteToast")
            .removeClass("text-bg-danger")
            .addClass("text-bg-success");
        } else {
          $("#toastMsg").text("Delete failed");
          $("#deleteToast")
            .removeClass("text-bg-success")
            .addClass("text-bg-danger");
        }

        let toast = new bootstrap.Toast(document.getElementById("deleteToast"));
        toast.show();
      },
      error: function() {
        $("#toastMsg").text("Something went wrong!");
        $("#deleteToast")
          .removeClass("text-bg-success")
          .addClass("text-bg-danger");

        let toast = new bootstrap.Toast(document.getElementById("deleteToast"));
        toast.show();
      }
    });
  });


  // ================= VIEW NEWS =================
  $('.viewNews').on('click', function() {
    var newsId = $(this).data('id');

    // Show modal
    var modal = new bootstrap.Modal(document.getElementById('viewInsightModal'));
    modal.show();

    // Show loader
    $('#modalInsightContent').html(`
      <div class="text-center">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    `);

    // Load content via AJAX
    $.ajax({
      url: 'subpages/news-view.php', // Make sure this file fetches news details
      type: 'GET',
      data: { id: newsId },
      success: function(data) {
        $('#modalInsightContent').html(data);
      },
      error: function() {
        $('#modalInsightContent').html('<p class="text-danger">Unable to load news details.</p>');
      }
    });
  });

});
</script>

</body>

</html>