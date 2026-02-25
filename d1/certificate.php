<?php
include "../admin/db/db_connect.php";


?>
<?php require '../components/header-dark.php'; ?><!-- Banner Section -->
<section class="kot-banner-section">
  <div class="container">
    <div class="kot-banner-content text-center">
      <h1 class="kot-banner-title">Certificate Verification center</h1>
      <h4 class="kot-banner-subtitle">
        Where credentials become globally trusted.
      </h4>

      <p class="kot-banner-text">
        The KOT Certificate Verification Center is a secure digital gateway that allows employers,
        institutions, and partners to instantly validate the authenticity of credentials issued
        across the KOT ecosystem. Built on transparency, traceability, and trust, this platform
        ensures that every certificate represents real skills, real learning, and real achievement—
        recognized anywhere in the world.
      </p>
    </div>
  </div>
</section>
<!-- Verification Card -->
<!-- Verification Card -->
<section class="kot-verify-section">
  <div class="container">
    <div class="kot-verify-card">
      <input
        type="text"
        id="certificateId"
        class="kot-verify-input"
        placeholder="Enter Verification number"
      />
      <button id="verifyBtn" class="kot-verify-btn hero-btn">Verify Record</button>
      <div id="liveMessage" style="margin-top:10px; color:red;"></div>
    </div>
  </div>
</section>

<section class="kot-certificate-section">
  <div class="container">
    <div class="kot-certificate-card">
      <table class="kot-certificate-table">
        <tr>
          <td class="kot-label">Type of Certificate:</td>
          <td class="kot-value kot-certificate-type"></td>
        </tr>

        <tr>
          <td class="kot-label">Presented to:</td>
          <td class="kot-value kot-presented-to"></td>
        </tr>

        <tr>
          <td class="kot-label">Date of Achievement:</td>
          <td class="kot-value kot-date-achievement"></td>
        </tr>
      </table>
    </div>
  </div>
</section>

<!-- Verification Footer -->
       <section class="dt-visual-section">
  <picture class="dt-visual-wrapper" style="width: 90%; margin: auto; max-width: 1000px;">
    
    <!-- Desktop -->
    <source
      media="(min-width: 1024px)"
      srcset="../assets/images/news/bottom.png"
    />

    <!-- Tablet -->
    <source
      media="(min-width: 768px)"
      srcset="../assets/images/news/bottom.png"
    />

    <!-- Mobile -->
    <img
      src="../assets/images/news/bottom.png"
      alt="Strategic Visual Illustration"
      class="dt-visual-image"
    />

  </picture>
       </section>
<section class="kot-footer-section">
    <div class="container">
      <div class="kot-footer-content">
        <div class="kot-footer-left">
          <!-- <img src="../assets/images/kotlogo.png  " alt="KOT Logo" /> -->
        </div>

        <div class="kot-footer-right">
          <!-- <p>
          Driving Innovation | Empowering Business <br />
          Transforming Technology
        </p> -->
        </div>
      </div>

      <div class="kot-footer-valid text-center">
        Valid Record: Verified: kot-e.com (as per Record)
      </div>
    </div>
  </section>
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
        url: "/d1/subscribe.php",
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
const verifyBtn = document.getElementById("verifyBtn");
const certificateIdInput = document.getElementById("certificateId");
const liveMessage = document.getElementById("liveMessage");

/* 🔹 LIVE INPUT VALIDATION (no special characters) */
certificateIdInput.addEventListener("input", function () {
    const cleanValue = this.value.replace(/[^a-zA-Z0-9-_]/g, "");

    if (this.value !== cleanValue) {
        liveMessage.innerText = "Special characters are not allowed!";
    } else {
        liveMessage.innerText = "";
    }

    this.value = cleanValue;
});

/* 🔹 VERIFY BUTTON CLICK */
verifyBtn.addEventListener("click", function() {
    const id = certificateIdInput.value.trim();

    if (!id) {
        liveMessage.innerText = "Please enter a certificate ID";
        return;
    }

    fetch("/v1/subpages/ajax_fetch_certificate.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "id=" + encodeURIComponent(id)
    })
    .then(res => res.json())
    .then(data => {
        if (data.error) {
            liveMessage.innerText = data.error;
            document.querySelector(".kot-certificate-type").innerText = "";
            document.querySelector(".kot-presented-to").innerText = "";
            document.querySelector(".kot-date-achievement").innerText = "";
            return;
        }

        liveMessage.innerText = ""; // clear error
        document.querySelector(".kot-certificate-type").innerText = data.certificate_type;
        document.querySelector(".kot-presented-to").innerText = data.presented_to;
        document.querySelector(".kot-date-achievement").innerText = data.achievement_date;
    })
    .catch(err => {
        console.error(err);
        liveMessage.innerText = "Server error. Try again later.";
    });
});
</script>


  <script>
    fetch('../components/footer-dark.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('global-footer').innerHTML = data;
      });
  </script>
  <script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Dark page => ON by HTML (checked)

  t.addEventListener("change", () => {
    if (!t.checked) {
      // Dark -> Light
      window.location.href = "/certificate";
    }
  });
});
</script>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="../assets/js/script.js"></script>

</body>

</html>