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
<?php require '../components/header-dark.php'; ?>
<section class="kot-blog-banner">
  <div class="kot-blog-banner-inner">
    <h1 class="kot-blog-title">Blogs</h1>
    <p class="kot-blog-subtitle">
      Ideas, insights, and innovation—straight from KOT.
    </p>
  </div>
</section>
<section class="kot-blog-intro-section">
  <div class="kot-blog-intro-card text-center">

    <img 
      src="../admin/uploads/<?= htmlspecialchars($blog['blog_image']) ?>" 
      alt="<?= htmlspecialchars($blog['blog_title']) ?>" 
      class="" style="border-radius: 30px;"
    
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
      window.location.href = "/blogs";
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