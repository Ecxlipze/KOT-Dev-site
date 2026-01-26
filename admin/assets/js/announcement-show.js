$(document).ready(function() {

  // DELETE ANNOUNCEMENT
  $(document).on("click", ".deleteAnnouncement", function () {
    if (!confirm("Are you sure you want to delete this announcement?")) return;

    let announcementId = $(this).data("id");
    let row = $(this).closest("tr");

    $.ajax({
      url: "subpages/delete-announcement.php",
      type: "POST",
      data: { id: announcementId },
      success: function (res) {
        if (res === "success") {
          row.fadeOut(400, () => row.remove());
          showToast("Announcement deleted successfully", true);
        } else {
          showToast("Delete failed", false);
        }
      },
      error: function () {
        showToast("Server error", false);
      }
    });
  });

  // VIEW ANNOUNCEMENT
  $('.viewAnnouncement').on('click', function () {
    let announcementId = $(this).data('id');

    let modal = new bootstrap.Modal(
      document.getElementById('viewInsightModal') // modal same rakh sakte hain
    );
    modal.show();

    $('#modalInsightContent').html(`
      <div class="text-center">
        <div class="spinner-border text-primary"></div>
      </div>
    `);

    $.ajax({
      url: 'subpages/announcement-view.php',
      type: 'GET',
      data: { id: announcementId },
      success: function (data) {
        $('#modalInsightContent').html(data);
      },
      error: function () {
        $('#modalInsightContent').html('<p class="text-danger">Unable to load announcement.</p>');
      }
    });
  });

});