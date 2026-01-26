$(document).ready(function() {

  // ================= DELETE =================
  $(document).on("click", ".deleteAppreciation", function () {
    if (!confirm("Are you sure you want to delete this entry?")) return;

    let id = $(this).data("id");
    let row = $(this).closest("tr");

    $.ajax({
      url: "subpages/delete-appreciation.php",
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
        let toast = new bootstrap.Toast(document.getElementById("deleteToast"));
        toast.show();
      },
      error: function() {
        $("#toastMsg").text("Something went wrong!");
        $("#deleteToast").removeClass("text-bg-success").addClass("text-bg-danger");
        let toast = new bootstrap.Toast(document.getElementById("deleteToast"));
        toast.show();
      }
    });
  });

  // ================= VIEW =================
  $('.viewAppreciation').on('click', function() {
    var id = $(this).data('id');
    var modal = new bootstrap.Modal(document.getElementById('viewAppreciationModal'));
    modal.show();

    $('#modalAppreciationContent').html('<div class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');

    $.ajax({
      url: 'subpages/appreciation-view.php',
      type: 'GET',
      data: { id: id },
      success: function(data) {
        $('#modalAppreciationContent').html(data);
      },
      error: function() {
        $('#modalAppreciationContent').html('<p class="text-danger">Unable to load details.</p>');
      }
    });
  });

});