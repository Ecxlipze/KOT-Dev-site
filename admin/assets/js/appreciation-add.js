 $(document).ready(function () {
      const titleInput = $('input[name="app_title"]');
      const fileInput = $('#app_image');

      const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;
      const titleFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(titleInput);
      const fileFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(fileInput);

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

      validateInput(titleInput, 80, titleFeedback);

      $("#appreciationForm").on("submit", function (e) {
        e.preventDefault();

        let valid = true;
        let errorMsg = "";

        const titleVal = titleInput.val().trim();
        const files = fileInput[0].files;

        if (!titleVal || !noSpecialChars.test(titleVal) || titleVal.length > 80) {
          valid = false;
          errorMsg = "Please fix the title field.";
        } else if (!files || files.length === 0) {
          valid = false;
          errorMsg = "Please select an image.";
          fileFeedback.text(errorMsg);
        } else {
          fileFeedback.text("");
        }

        if (!valid) {
          $("#toastMsg").text(errorMsg);
          $("#liveToast").removeClass("text-bg-success").addClass("text-bg-danger");
          new bootstrap.Toast(document.getElementById('liveToast')).show();
          return;
        }

        let formData = new FormData(this);
        $.ajax({
          url: "subpages/add-appreciation.php",
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function (response) {
            if (response.trim() === "success") {
              $("#toastMsg").text("Appreciation added successfully!");
              $("#liveToast").removeClass("text-bg-danger").addClass("text-bg-success");
              new bootstrap.Toast(document.getElementById('liveToast')).show();
              $("#appreciationForm")[0].reset();
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