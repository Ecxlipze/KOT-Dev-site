$(document).ready(function () {
    // Field selectors
    const titleInput = $('input[name="announcement_title"]');
    const authorInput = $('input[name="announcement_author"]');
    const desc1Input = $('textarea[name="description1"]');
    const desc2Input = $('textarea[name="description2"]');

    // Validation regex
    const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

    // Feedback divs
    const titleFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(titleInput);
    const authorFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(authorInput);
    const desc1Feedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(desc1Input);
    const desc2Feedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(desc2Input);

    // Live validation for Title
    titleInput.on("input", function () {
        const val = $(this).val();
        if (!noSpecialChars.test(val)) {
            titleFeedback.text("Special characters are not allowed.");
        } else if (val.length > 80) {
            titleFeedback.text("Maximum 80 characters allowed.");
        } else {
            titleFeedback.text("");
        }
    });

    // Live validation for Author
    authorInput.on("input", function () {
        const val = $(this).val();
        if (!noSpecialChars.test(val)) {
            authorFeedback.text("Special characters are not allowed.");
        } else if (val.length > 50) {
            authorFeedback.text("Maximum 50 characters allowed.");
        } else {
            authorFeedback.text("");
        }
    });

    // Live validation for Description1
    desc1Input.on("input", function () {
        const val = $(this).val();
        if (!noSpecialChars.test(val)) {
            desc1Feedback.text("Special characters are not allowed.");
        } else if (val.length > 500) {
            desc1Feedback.text("Maximum 500 characters allowed.");
        } else {
            desc1Feedback.text("");
        }
    });

    // Live validation for Description2
    desc2Input.on("input", function () {
        const val = $(this).val();
        if (!noSpecialChars.test(val)) {
            desc2Feedback.text("Special characters are not allowed.");
        } else if (val.length > 500) {
            desc2Feedback.text("Maximum 500 characters allowed.");
        } else {
            desc2Feedback.text("");
        }
    });

    // Form submit
    $("#announcementForm").on("submit", function (e) {
        e.preventDefault();

        const titleVal = titleInput.val().trim();
        const authorVal = authorInput.val().trim();
        const desc1Val = desc1Input.val().trim();
        const desc2Val = desc2Input.val().trim();

        // Validate all fields
        if (!titleVal || !noSpecialChars.test(titleVal) || titleVal.length > 80) {
            showToast("Please fix the Title field.", false);
            return;
        }
        if (!authorVal || !noSpecialChars.test(authorVal) || authorVal.length > 50) {
            showToast("Please fix the Author field.", false);
            return;
        }
        if (!desc1Val || !noSpecialChars.test(desc1Val) || desc1Val.length > 500) {
            showToast("Please fix Description 1.", false);
            return;
        }
        if (desc2Val && (!noSpecialChars.test(desc2Val) || desc2Val.length > 500)) {
            showToast("Please fix Description 2.", false);
            return;
        }

        // Prepare FormData for AJAX (supports file if added)
        const formData = new FormData(this);

        $.ajax({
            url: "subpages/announcement-add-action.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.trim() === "success") {
                    showToast("Announcement added successfully!", true);
                    $("#announcementForm")[0].reset();
                    // Clear feedback
                    titleFeedback.text('');
                    authorFeedback.text('');
                    desc1Feedback.text('');
                    desc2Feedback.text('');
                } else {
                    showToast(response, false);
                }
            },
            error: function (xhr, status, error) {
                showToast("AJAX error: " + error, false);
            }
        });
    });

    // Toast helper
    function showToast(message, success = true) {
        $("#toastMsg").text(message);
        $("#liveToast").removeClass("text-bg-success text-bg-danger");
        $("#liveToast").addClass(success ? "text-bg-success" : "text-bg-danger");
        new bootstrap.Toast(document.getElementById('liveToast')).show();
    }
});