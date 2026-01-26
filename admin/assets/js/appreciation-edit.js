$(document).ready(function() {
    const titleInput = $('input[name="title"]');
    const noSpecialChars = /^[a-zA-Z0-9\s.,?!-]*$/;

    // Feedback element
    const titleFeedback = $('<div style="color:red;margin-top:5px;"></div>').insertAfter(titleInput);

    // Live validation
    titleInput.on("input", function() {
        let val = $(this).val();
        if (!noSpecialChars.test(val)) {
            val = val.replace(/[^a-zA-Z0-9\s.,?!-]/g, '');
            $(this).val(val);
            titleFeedback.text("Special characters are not allowed.");
        } else if (val.length > 100) {
            $(this).val(val.substring(0,100));
            titleFeedback.text("Maximum 100 characters allowed.");
        } else {
            titleFeedback.text("");
        }
    });

    // Form submission
    $('#updateAppreciationForm').on('submit', function(e){
        e.preventDefault(); // Prevent default form submission
        const formData = new FormData(this);

        $.ajax({
            url: 'subpages/update-appreciation.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response){
                const toastEl = document.getElementById('liveToast');
                const toast = new bootstrap.Toast(toastEl, { delay: 1500 });

                $('#liveToast .toast-body').text(response.message);
                if(response.status === 'success'){
                    toastEl.classList.remove("text-bg-danger");
                    toastEl.classList.add("text-bg-success");
                    toast.show();
                    toastEl.addEventListener('hidden.bs.toast', function () {
                        window.location.href = 'apprecation-show.php';
                    });
                } else {
                    toastEl.classList.remove("text-bg-success");
                    toastEl.classList.add("text-bg-danger");
                    toast.show();
                }
            },
            error: function(){
                const toastEl = document.getElementById('liveToast');
                $('#liveToast .toast-body').text('Something went wrong!');
                toastEl.classList.remove("text-bg-success");
                toastEl.classList.add("text-bg-danger");
                const toast = new bootstrap.Toast(toastEl);
                toast.show();
            }
        });
    });
});