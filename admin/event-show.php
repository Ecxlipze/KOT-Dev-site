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
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Event Management</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Event List</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table align-middle table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Venue</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           
              
             <?php
$query = "SELECT * FROM events ORDER BY id DESC LIMIT $offset, $limit";

$result = mysqli_query($con, $query);

$totalQuery = "SELECT COUNT(*) AS total FROM events";
$totalResult = mysqli_query($con, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);

$totalRecords = $totalRow['total'];
$totalPages = ceil($totalRecords / $limit);

$i = $offset + 1;

while ($row = mysqli_fetch_assoc($result)) {
?>


              <tr>
                <td><?= $i++; ?></td>
                <td><?= htmlspecialchars($row['event_name']); ?></td>
                <td><?= date("d M Y", strtotime($row['event_date'])); ?></td>
                <td><?= date("h:i A", strtotime($row['event_time'])); ?></td>
                <td><?= htmlspecialchars($row['event_venue']); ?></td>
                <td>
                  <?php if ($row['event_status'] == 1) { ?>
                    <span class="fw-bold text-dark">Publish</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill alert-warning">Draft</span>
                  <?php } ?>
                </td>
                <td><?= date("d M Y", strtotime($row['created_at'])); ?></td>
                <td>
                  <div class="d-flex gap-3 fs-6">
                    <a href="javascript:void(0);" class="text-primary viewEvent" data-id="<?= $row['id']; ?>" title="View"><i class="bi bi-eye-fill"></i></a>
                    <a href="event-edit.php?id=<?= $row['id']; ?>" class="text-warning"><i class="bi bi-pencil-fill"></i></a>
                    <a href="javascript:void(0)" class="text-danger deleteEvent" data-id="<?= $row['id']; ?>" title="Delete"><i class="bi bi-trash-fill"></i></a>
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

<!-- Toast Notification -->
<!-- Toast Notification -->
<div class="toast-container position-fixed top-0 end-0 p-3">
  <div id="deleteToast" class="toast align-items-center text-bg-success border-0">
    <div class="d-flex">
      <div class="toast-body" id="toastMsg"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>

<!-- View Appreciation Modal -->
<!-- View Event Modal -->
<div class="modal fade" id="viewEventModal" tabindex="-1" aria-labelledby="viewEventLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewEventLabel">Event Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalEventContent">
        <div class="text-center">
          <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
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

  // ================= DELETE =================
  $(document).on("click", ".deleteEvent", function () {
    if(!confirm("Are you sure you want to delete this event?")) return;

    let id = $(this).data("id");
    let row = $(this).closest("tr");

    $.ajax({
      url: "subpages/delete-event.php",
      type: "POST",
      data: { id: id },
      success: function(response) {
        if(response === "success") {
          row.fadeOut(500, function(){ $(this).remove(); });
          $("#toastMsg").text("Deleted successfully");
          $("#deleteToast").removeClass("text-bg-danger").addClass("text-bg-success");
        } else {
          $("#toastMsg").text("Delete failed");
          $("#deleteToast").removeClass("text-bg-success").addClass("text-bg-danger");
        }
        new bootstrap.Toast(document.getElementById("deleteToast")).show();
      },
      error: function() {
        $("#toastMsg").text("Something went wrong!");
        $("#deleteToast").removeClass("text-bg-success").addClass("text-bg-danger");
        new bootstrap.Toast(document.getElementById("deleteToast")).show();
      }
    });
  });

  // ================= VIEW =================
  $('.viewEvent').on('click', function() {
    var id = $(this).data('id');
    var modal = new bootstrap.Modal(document.getElementById('viewEventModal'));
    modal.show();
    $('#modalEventContent').html('<div class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');

    $.ajax({
      url: 'subpages/view-event.php',
      type: 'GET',
      data: { id: id },
      success: function(data) {
        $('#modalEventContent').html(data);
      },
      error: function() {
        $('#modalEventContent').html('<p class="text-danger">Unable to load details.</p>');
      }
    });
  });

});
</script>

</body>

</html>