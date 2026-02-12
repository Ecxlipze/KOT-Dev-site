 
<?php
include "../admin/db/db_connect.php";

// safety check
if (!isset($_GET['id'])) {
  die("Invalid News");
}

$id = intval($_GET['id']);
$query = mysqli_query($con, "SELECT * FROM news WHERE id = $id AND status = 1");

if (mysqli_num_rows($query) == 0) {
  die("News not found");
}

$data = mysqli_fetch_assoc($query);
?><?php require '../components/header.php'; ?>
<section class="kot-blog-banner">
  <div class="kot-blog-banner-inner">
    <h1 class="kot-blog-title"><?= htmlspecialchars($data['title']) ?></h1>
    <p class="kot-blog-subtitle">
      <?= date("F d, Y", strtotime($data['created_at'] ?? date('Y-m-d'))) ?>
    </p>
  </div>
</section>

<!-- IMAGE SECTION -->
<section class="kot-blog-intro-section">
  <div class="kot-blog-intro-card text-center">
    <img 
      src="../admin/uploads/<?= htmlspecialchars($data['image']) ?>" 
      class=""
     style="width:100%; " alt="<?= htmlspecialchars($data['title']) ?>">
  </div>
</section>

<!-- CONTENT SECTION -->
<section class="kot-blog-content">

  <h2 class="kot-blog-heading">
    <?= htmlspecialchars($data['title']) ?>
  </h2>


  <p>
    <?= nl2br(htmlspecialchars($data['description'])) ?>
  </p>

 

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