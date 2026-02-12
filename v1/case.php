<?php require '../components/header.php'; ?>
  <section class="kot-blog-banner">
    <div class="kot-blog-banner-inner">
      <h1 class="kot-blog-title">Case Studies</h1>
      <p class="kot-blog-subtitle">
        Real problems. Real solutions. Real impact.
      </p>
    </div>
  </section>
  <section class="kot-blog-intro-section">
    <div class="kot-blog-intro-card">
      <p>
        Our case studies showcase how KOT Enterprises solves complex business and technology challenges across
        industries. Each story reflects our strategic thinking, technical expertise, and commitment to delivering
        measurable results for our clients, partners, and ventures.
      </p>
    </div>
  </section>

  <section class="kot-blog-content">
    <h2 class="kot-blog-heading">
      No Data Found
    </h2>


  <div id="global-footer"></div>
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
<!--Toggle Button Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Light page => off by default (no need to set)

  t.addEventListener("change", () => {
    if (t.checked) {
      // Light -> Dark
      window.location.href = "/case-/";
    }
  });
});
</script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="../assets/js/script.js"></script>
    <!--Toggle Button Script-->

</body>

</html>