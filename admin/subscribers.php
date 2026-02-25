<?php
include "authentication/auth.php";
include "db/db_connect.php";

$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$offset = ($page - 1) * $limit;

// total records
$totalQuery  = "SELECT COUNT(*) AS total FROM subscribers";
$totalResult = mysqli_query($con, $totalQuery);
$totalRow    = mysqli_fetch_assoc($totalResult);
$totalRecords = (int)($totalRow['total'] ?? 0);
$totalPages   = ($totalRecords > 0) ? (int)ceil($totalRecords / $limit) : 1;

// list data
$query  = "SELECT id, email, created_at FROM subscribers ORDER BY id DESC LIMIT $offset, $limit";
$result = mysqli_query($con, $query);

$i = $offset + 1;
?>

<!doctype html>
<html lang="en" class="minimal-theme">
<head>
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
  <title>Subscribers List</title>
</head>

<body>
<div class="wrapper">
  <?php include 'header.php'; ?>
  <?php include 'sidebar.php'; ?>

  <main class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Subscribers</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Subscribers List</li>
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
                <th>Email</th>
                <th>Subscribed At</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= htmlspecialchars($row['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?= !empty($row['created_at']) ? date("d M Y, h:i A", strtotime($row['created_at'])) : '—'; ?></td>
                    <td>
                      <div class="d-flex gap-3 fs-6">
                        <a href="javascript:void(0)" class="text-danger deleteSubscriber"
                           data-id="<?= (int)$row['id']; ?>"
                           title="Delete">
                          <i class="bi bi-trash-fill"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="4" class="text-center text-muted py-4">No subscribers found.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <nav class="float-end mt-4">
          <ul class="pagination">
            <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
              <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
            </li>

            <?php for ($p = 1; $p <= $totalPages; $p++): ?>
              <li class="page-item <?= ($page == $p) ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $p ?>"><?= $p ?></a>
              </li>
            <?php endfor; ?>

            <li class="page-item <?= ($page >= $totalPages) ? 'disabled' : '' ?>">
              <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
            </li>
          </ul>
        </nav>

      </div>
    </div>
  </main>

  <div class="overlay nav-toggle-icon"></div>
  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
</div>

<!-- ✅ Toast -->
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 999999;">
  <div id="deleteToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body" id="toastMsg">...</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>

<!-- Bootstrap bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/js/pace.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
$(document).ready(function() {

  // ✅ DELETE SUBSCRIBER
  $(document).on("click", ".deleteSubscriber", function () {

    if (!confirm("Are you sure you want to delete this subscriber?")) return;

    let subId = $(this).data("id");
    let row = $(this).closest("tr");

    $.ajax({
      url: "subpages/delete-subscriber.php",
      type: "POST",
      data: { id: subId },
      dataType: "json",
      success: function (res) {
        if (res && res.status === "success") {
          row.fadeOut(400, function () { $(this).remove(); });

          $("#toastMsg").text(res.message || "Subscriber deleted successfully");
          $("#deleteToast").removeClass("text-bg-danger").addClass("text-bg-success");
        } else {
          $("#toastMsg").text((res && res.message) ? res.message : "Delete failed");
          $("#deleteToast").removeClass("text-bg-success").addClass("text-bg-danger");
        }

        let toast = new bootstrap.Toast(document.getElementById("deleteToast"));
        toast.show();
      },
      error: function (xhr) {
        console.log("Delete error:", xhr.status, xhr.responseText);

        $("#toastMsg").text("Something went wrong!");
        $("#deleteToast").removeClass("text-bg-success").addClass("text-bg-danger");

        let toast = new bootstrap.Toast(document.getElementById("deleteToast"));
        toast.show();
      }
    });
  });

});
</script>

</body>
</html>