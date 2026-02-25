<?php
include "../admin/db/db_connect.php";

/* Validate ID */
if (!isset($_GET['id']) || empty($_GET['id'])) {
  echo "Invalid blog request";
  exit;
}

$id = (int)$_GET['id'];

/* Fetch blog */
$sql = "SELECT * FROM blogs 
        WHERE id = $id AND blog_status = 1 
        LIMIT 1";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) === 0) {
  echo "Blog not found";
  exit;
}

$blog = mysqli_fetch_assoc($result);
?>
<?php require '../components/header.php'; ?>
<!-- BLOG BANNER -->
<section class="kot-blog-banner">
  <div class="kot-blog-banner-inner">
    <h1 class="kot-blog-title">Blogs</h1>
    <p class="kot-blog-subtitle">
      Ideas, insights, and innovation—straight from KOT.
    </p>
  </div>
</section>

<!-- INTRO IMAGE -->
<section class="kot-blog-intro-section">
  <div class="kot-blog-intro-card text-center">

    <img 
      src="../admin/uploads/<?= htmlspecialchars($blog['blog_image']) ?>" 
      alt="<?= htmlspecialchars($blog['blog_title']) ?>" 
      class="rounded" style="border-radius: 30px;"
    
    >

  </div>
</section>

<!-- BLOG CONTENT -->
<section class="kot-blog-content">

  <h2 class="kot-blog-heading">
    <?= htmlspecialchars($blog['blog_title']) ?>
  </h2>

  <p class="kot-blog-author">
     <?= htmlspecialchars($blog['blog_author']) ?> 
  </p>

  <p>
    <?= nl2br(htmlspecialchars($blog['description1'])) ?>
  </p>

  <?php if (!empty($blog['description2'])): ?>
    <p>
      <?= nl2br(htmlspecialchars($blog['description2'])) ?>
    </p>
  <?php endif; ?>

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
  <script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Page load par theme read karo
  const theme = localStorage.getItem("theme");

  // 🔑 FORCE toggle state
  t.checked = theme === "dark";

  t.addEventListener("change", () => {

    if (t.checked) {
      // Light → Dark
      localStorage.setItem("theme", "dark");
    } else {
      // Dark → Light
      localStorage.setItem("theme", "light");
    }

    // same page reload
    window.location.href = "/blogs-/";

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