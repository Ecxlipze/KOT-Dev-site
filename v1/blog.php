
<?php
include "../admin/db/db_connect.php";
?>
<?php require '../components/header.php'; ?>
  <section class="kot-blog-banner">
    <div class="kot-blog-banner-inner">
      <h1 class="kot-blog-title">Blog</h1>
      <p class="kot-blog-subtitle">
      Learn new things every day and use them to make your life better.
      </p>
    </div>
  </section>
  <section class="kot-blog-intro-section">
    <div class="kot-blog-intro-card">
      <p>
        The KOT Appreciation Board is a living record of individuals, teams, and partners who have created meaningful
        impact across our ecosystem. From innovation to leadership, from dedication to excellence, this space celebrates
        the people who move KOT—and the future—forward.
      </p>
    </div>
  </section>

 <section class="ns-section ns-heroes-section">
  <div class="container">

    <!-- Section Title -->
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="ns-heroes-title">Blogs</h2>
      </div>
    </div>

   
      <div class="row g-4 d-none d-lg-flex">
<?php
$sql = "SELECT id, blog_title, blog_image 
        FROM blogs 
        WHERE blog_status = 1 
        ORDER BY created_at DESC";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $id    = (int)$row['id'];
    $title = htmlspecialchars($row['blog_title']);
    $image = "../admin/uploads/" . htmlspecialchars($row['blog_image']);
?>
  <div class="col-lg-3">
    <div class="ns-hero-card">
      <!-- Image wrapped in link -->
      <a href="/blog/?id=<?= $id ?>">
        <img 
          src="<?= $image ?>" class="rounded"
          style="transition: transform 0.3s ease;"
          onmouseover="this.style.transform='scale(1.04)'"
          onmouseout="this.style.transform='scale(1)'"
          alt="<?= $title ?>"
        />
      </a>

      <div class="ns-hero-info mt-2">
        <a href="/blog/?id=<?= $id ?>" 
           class="btn btn-sm btn-light">
           Read More
        </a>
      </div>
    </div>
  </div>
<?php
  }
}else{
  echo "<p>No blogs found.</p>";
}
?>
</div>


    <!-- Mobile / Tablet SLIDER -->
  <div class="ns-heroes-slider d-lg-none">
  <div class="ns-slider-track">
<?php
$sql = "SELECT id, blog_title, blog_image FROM blogs WHERE blog_status = 1 ORDER BY created_at DESC";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $id    = (int)$row['id'];
    $title = htmlspecialchars($row['blog_title']);
    $image = "../admin/uploads/" . htmlspecialchars($row['blog_image']);
?>
    <div class="ns-slider-item">
      <div class="ns-hero-card">
        <a href="/blog/?id=<?= $id ?>">
          <img src="<?= $image ?>"  style="transition: transform 0.3s ease;"
               onmouseover="this.style.transform='scale(1.04)'"
               onmouseout="this.style.transform='scale(1)'"  class="ns-card-img rounded " 
               alt="<?= $title ?>" />
        </a>

        <div class="ns-hero-info mt-2">
          <a href="/blog/?id=<?= $id ?>" 
             class="btn btn-sm btn-light">
             Read More
          </a>
        </div>
      </div>
    </div>
<?php
  }
}else{
  echo "<p>No blogs found.</p>";
}
?>
  </div>
</div>


  </div>
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
    window.location.href = "/blog-/";

  });
});
</script>





  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="../assets/js/script.js"></script>
</body>

</html>