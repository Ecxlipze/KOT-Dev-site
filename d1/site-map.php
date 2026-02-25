<?php require '../components/header-dark.php'; ?>
  <!-- SITE MAP BANNER -->
  <section class="sitemap-banner">
    <h1 class="sitemap-banner-title">SITE MAP</h1>
  </section>

<section class="sitemap-content-section">
  <div class="sitemap-container">
    <div class="sitemap-column">

      <div class="sitemap-group">
        <h3 class="sitemap-heading">Pages</h3>

        <ul class="sitemap-list">

          <li>
            <a href="-/">Home Page</a>
            <ul>
              <li><a href="-/">Overview</a></li>
              <li><a href="-/">What we Offer</a></li>
              <li><a href="-/">What Our Clients Say</a></li>
              <li><a href="-/">Stats</a></li>
              <li><a href="blogs-/">Our Blogs</a></li>
              <li><a href="faq-page-/">FAQ’s</a></li>
            </ul>
          </li>

          <li>
            <a href="career-/">Career</a>
            <ul>
              <li><a href="/career-/">Internship</a></li>
              <li><a href="/career-/">Why Join KOT</a></li>
            </ul>
          </li>

          <li>
            <a href="/support-/">Support</a>
            <ul>
              <li><a href="/support-/">Need Help</a></li>
              <li><a href="/support-/">How we Help</a></li>
              <li>
                <a href="/support-/">Explore</a>
                <ul>
                  <li><a href="/support-/">Personal Support</a></li>
                  <li><a href="/support-/">Work Support</a></li>
                  <li><a href="/support-/">Education Support</a></li>
                  <li><a href="/support-/">Partner Support</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li>
            <a href="/contact-/">Contact Us</a>
          </li>

          <li>
            <a href="/why-kot-/">Why KOT</a>
            <ul>
              <li><a href="/why-kot-/">Our Core Values</a></li>
            </ul>
          </li>

          <li>
            <a href="/board-of-directors-/">Board of Directors</a>
            <ul>
              <li><a href="/board-of-directors-/">Message from Board of Directors</a></li>
              <li><a href="/board-of-directors-/">We are Deeply Committed to</a></li>
              <li><a href="/board-of-directors-/">Message from CEO</a></li>
            </ul>
          </li>

          <li>
            <a href="">Consultancy</a>
            <ul>
              <li><a href="/data-engineering-/">Data Engineering</a></li>
              <li><a href="/gen-ai-/">Generative AI</a></li>
              <li><a href="/audits-/">Audits</a></li>
            </ul>
          </li>

          <li>
            <a href="">Programs</a>
            <ul>
              <li><a href="/venture-/">Venture Xceleration</a></li>
              <li><a href="/episodes-/">Episodes</a></li>
            </ul>
          </li>

          <li>
            <a href="/services-/">Services</a>
            <ul>
              <li><a href="/agile-apps-/">AgileApps</a></li>
              <li><a href="/appsculpt-/">App Sculpt</a></li>
              <li><a href="/digittrail-/">Digittrail</a></li>
              <li><a href="/graphoria-/">Graphiora</a></li>
              <li><a href="/flawless-/">Flawless</a></li>
              <li><a href="/merchanity-/">Merchantity</a></li>
              <li><a href="/WebSculpture-/">Web Sculpture</a></li>
            </ul>
          </li>

        </ul>
      </div>

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
    fetch('../components/footer-dark.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('global-footer').innerHTML = data;
      });
  </script>
<!--Toggle Button Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Dark page => ON by HTML (checked)

  t.addEventListener("change", () => {
    if (!t.checked) {
      // Dark -> Light
      window.location.href = "/site-map";
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