<?php require '../components/header.php'; ?>
  <section class="kot-blog-banner">
    <div class="kot-blog-banner-inner">
      <h1 class="kot-blog-title">Policy Center</h1>
      <p class="kot-blog-subtitle">
        Official updates from inside the KOT ecosystem.
      </p>
    </div>
  </section>
  <section class="kot-blog-intro-section">
    <div class="kot-blog-intro-card">
      <p>
        This is the central channel for all important communications from KOT Enterprises. From strategic decisions and
        platform upgrades to new initiatives and ecosystem milestones, our announcements keep partners, clients, and
        communities informed—clearly, directly, and transparently. </p>
    </div>
  </section>

  <section class="kot-blog-content">
    <h2 class="kot-blog-heading">
      No Data Found
    </h2>


    <div id="global-footer">
      <!-- Your footer content goes here -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  // DOM ready
  $(function () {

    toastr.options = {
      closeButton: true,
      progressBar: true,
      timeOut: 2000
    };

    // ✅ Delegated submit (works even if footer/form is injected later)
    $(document).on("submit", "#subscribeForm", function (e) {
      e.preventDefault();
      e.stopPropagation();

      console.log("✅ submit captured"); // test

      const $form = $(this);
      const $btn = $("#subscribeBtn");
      const email = ($("#subscribeEmail").val() || "").trim();

      if (!email) return toastr.error("Email required");
      if (email.length > 60) return toastr.error("Max 60 characters allowed");
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email)) return toastr.error("Invalid email format");

      $btn.prop("disabled", true).text("Please wait...");

      $.ajax({
        url: "/v1/subscribe.php",
        type: "POST",
        data: { email: email },
        dataType: "json",
        success: function (res) {
          if (res && res.status === "success") {
            toastr.success(res.message || "Subscribed!");
            $form[0].reset();
          } else {
            toastr.error((res && res.message) ? res.message : "Subscription failed");
          }
        },
        error: function (xhr) {
          console.log("❌ AJAX error:", xhr.status, xhr.responseText);
          toastr.error("Server error");
        },
        complete: function () {
          $btn.prop("disabled", false).text("Subscribe");
        }
      });

      return false; // extra safety
    });

    // ✅ quick test: page load pe toast (sirf check ke liye)
    // toastr.info("Toastr loaded ✅");
  });
</script>
    </div>
    <button id="goTopBtn" title="Go to top">↑</button>

    <script>
      const goTopBtn = document.getElementById("goTopBtn");

      window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
          goTopBtn.classList.add("show");
        } else {
          goTopBtn.classList.remove("show");
        }
      });

      goTopBtn.addEventListener("click", () => {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });
    </script>



    <script>
      fetch('../components/footer.html')
        .then(res => res.text())
        .then(data => {
          document.getElementById('global-footer').innerHTML = data;
        });
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/script.js"></script>
    <!--Toggle Button Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Light page => off by default (no need to set)

  t.addEventListener("change", () => {
    if (t.checked) {
      // Light -> Dark
      window.location.href = "/policy-/";
    }
  });
});
</script>

</body>

</html>