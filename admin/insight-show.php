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
              <div class="breadcrumb-title pe-3">Show Insight</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Show InsightList</li>
                  </ol>
                </nav>
              </div>
              <!-- <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Settings</button>
                  <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div> -->
            </div>
            <!--end breadcrumb-->

              <div class="card">
                <div class="card-header py-3">
                  <div class="row align-items-center m-0">
                    <!-- <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option>All category</option>
                            <option>Fashion</option>
                            <option>Electronics</option>
                            <option>Furniture</option>
                            <option>Sports</option>
                        </select>
                    </div> -->
                    <div class="col-md-2 col-6">
                        <!-- <input type="date" class="form-control"> -->
                    </div>
                    <!-- <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div> -->
                 </div>
                </div>
                <div class="card-body">

                  <div class="table-responsive">
            <table class="table align-middle table-striped">
     <thead>
    <tr>
      <th>#</th>
      <th>Image</th>
      <th>Title</th>
      <th>Description</th>
      <th>Status</th>
      <th>Date</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
  
            <?php
            
            $query = "SELECT * FROM insights ORDER BY id DESC  LIMIT $offset, $limit";

$result = mysqli_query($con, $query);

$totalQuery = "SELECT COUNT(*) AS total FROM insights";
$totalResult = mysqli_query($con, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);

$totalRecords = $totalRow['total'];
$totalPages = ceil($totalRecords / $limit);

$i = $offset + 1;

while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td><?= $i++; ?></td>

      <!-- Image -->
      <td>
        <img src="uploads/<?= $row['image']; ?>" width="50" class="rounded">
      </td>

      <!-- Title -->
      <td>
        <h6 class="mb-0 fw-bold"><?= $row['title']; ?></h6>
      </td>

      <!-- Description -->
      <td>
        <h6 class="mb-0 text-muted fw-normal">
          <?= substr($row['description'], 0, 80); ?>...
        </h6>
      </td>

      <!-- Status -->
      <td>
        <?php if ($row['status'] == 1) { ?>
          <span class="fw-bold text-dark">Publish</span>
        <?php } else { ?>
          <span class="badge rounded-pill alert-warning">Draft</span>
        <?php } ?>
      </td>

      <!-- Date -->
      <td><?= date("d M Y", strtotime($row['created_at'])); ?></td>

      <!-- Action -->
      <td>
        <div class="d-flex gap-3 fs-6">
          <a href="javascript:void(0);" 
   class="text-primary viewInsight" 
   data-id="<?= $row['id']; ?>" 
   title="View">
   <i class="bi bi-eye-fill"></i>
</a>

         <a href="insight-edit.php?id=<?= $row['id']; ?>" class="text-warning">
  <i class="bi bi-pencil-fill"></i>
</a>

          <a href="javascript:void(0)" 
             class="text-danger deleteInsight" 
             data-id="<?= $row['id']; ?>" title="Delete">
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
$(document).on("click", ".deleteInsight", function () {

  if (!confirm("Are you sure you want to delete this insight?")) {
    return;
  }

  let insightId = $(this).data("id");
  let row = $(this).closest("tr");

  $.ajax({
    url: "subpages/delete-insight.php",
    type: "POST",
    data: { id: insightId },
    success: function (response) {

      if (response === "success") {
        row.fadeOut(500, function () {
          $(this).remove();
        });

        $("#toastMsg").text("Insight deleted successfully");
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
    }
  });
});


// eye-view-model

$(document).ready(function() {

  // On clicking view
  $('.viewInsight').on('click', function() {
    var insightId = $(this).data('id');

    // Show modal
    var modal = new bootstrap.Modal(document.getElementById('viewInsightModal'));
    modal.show();

    // Load content via AJAX
    $('#modalInsightContent').html('<div class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');

    $.ajax({
      url: 'subpages/insight-view.php',
      type: 'GET',
      data: { id: insightId },
      success: function(data) {
        $('#modalInsightContent').html(data);
      },
      error: function() {
        $('#modalInsightContent').html('<p class="text-danger">Unable to load insight details.</p>');
      }
    });
  });

});
</script>


</body>

</html>