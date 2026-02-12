<?php
include "../admin/db/db_connect.php";
?>
<?php require '../components/header.php'; ?>
<section class="news-hero">
  <div class="container text-center">
    <h1 class="news-hero-title">News</h1>
    <!-- <p class="news-hero-text">
    </p> -->
  </div>
</section>


<section class="latest-updates">
  <div class="container text-center">

    <h2 class="sectionm-heading">Latest Updates From KOT Enterprises</h2>
    <p class="sectionm-subtext">
       Stay connected with the latest news, achievements, events, and innovation stories from KOT Enterprises. From new product releases to company milestones and industry insights, this is where our community stays updated.
   
    </p>

   <div class="row g-4 mt-4">

<?php
$newsQuery = mysqli_query($con, "
  SELECT id, image 
  FROM news 
  WHERE type='News' AND status=1 
  ORDER BY id DESC 
  LIMIT 4
");

while($row = mysqli_fetch_assoc($newsQuery)){
?>
  <div class="col-lg-6 col-md-6">
    <a href="/newsdetail?id=<?= $row['id'] ?>" class="text-decoration-none">
      <div class="update-card">
        <img src="../admin/uploads/<?= $row['image'] ?>" class="images-news" 
     style="width:85%; border-radius:30px; transition: transform 0.3s ease;" 
     onmouseover="this.style.transform='scale(1.04)'" 
     onmouseout="this.style.transform='scale(1)'">
      
      </div>
      
    </a>
  </div>

<?php } ?>

</div>

    <a href="/services" class="btn hero-btn updates-btn mt-5">See All Services →</a>

  </div>
</section>

<section class="events-highlights">
  <div class="container text-center">

    <h2 class="sectionm-heading">Events & Highlights</h2>

    <div class="events-slider">

<?php
$eventQuery = mysqli_query($con, "
  SELECT id, image 
  FROM news 
  WHERE type='Event' AND status=1 
  ORDER BY id DESC
");

while($row = mysqli_fetch_assoc($eventQuery)){
?>
  <a href="/eventdetail?id=<?= $row['id'] ?>" class="text-decoration-none">
    <div class="event-card">
    
     <img src="../admin/uploads/<?= $row['image'] ?>" 
     class="images-news" 
     style="width:85%; border-radius:30px; transition: transform 0.3s ease;" 
     onmouseover="this.style.transform='scale(1.04)'" 
     onmouseout="this.style.transform='scale(1)'">

    </div>
  </a>
  
<?php } ?>

</div>

  </div>
</section>

<section class="videos-section">
  <div class="container text-center">

    <h2 class="sectionm-heading">Videos</h2>

    <div class="videos-slider">

      <?php
      $videoQuery = mysqli_query($con, "
        SELECT title, video_url 
        FROM news 
        WHERE video_url IS NOT NULL AND video_url != '' 
        ORDER BY id DESC
      ");

      while($row = mysqli_fetch_assoc($videoQuery)){
        $videoUrl = $row['video_url'];
        $title = htmlspecialchars($row['title']);

        // Check if URL is YouTube
        if (strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false) {
          // Convert YouTube URL to embed URL
          if (preg_match('/youtu\.be\/([^\?&]+)/', $videoUrl, $matches)) {
            $videoId = $matches[1];
          } elseif (preg_match('/v=([^\?&]+)/', $videoUrl, $matches)) {
            $videoId = $matches[1];
          }
          $embedUrl = "https://www.youtube.com/embed/$videoId";
          echo "<div class='video-card'>
                  <div class='video-embed'>
                    <iframe width='560' height='315' src='$embedUrl' frameborder='0' allowfullscreen></iframe>
                  </div>
                 
                </div>";
        }
        // Check if URL is Vimeo
        elseif (strpos($videoUrl, 'vimeo.com') !== false) {
          preg_match('/vimeo\.com\/(\d+)/', $videoUrl, $matches);
          $videoId = $matches[1];
          $embedUrl = "https://player.vimeo.com/video/$videoId";
          echo "<div class='video-card'>
                  <div class='video-embed'>
                    <iframe width='560' height='315' src='$embedUrl' frameborder='0' allowfullscreen></iframe>
                  </div>
               
                </div>";
        }
        // Otherwise assume direct video file
        else {
          echo "<div class='video-card'>
                  <div class='video-embed'>
                    <video width='560' height='315' controls>
                      <source src='".htmlspecialchars($videoUrl)."' type='video/mp4'>
                      Your browser does not support the video tag.
                    </video>
                  </div>
               
                </div>";
        }
      }
      ?>

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
    window.location.href = "/news-/";

  });
});
</script>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/script.js"></script>

</body>

</html>