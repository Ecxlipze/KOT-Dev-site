<?php
include "../admin/db/db_connect.php";
?>
<?php require '../components/header-dark.php'; ?>
<section class="news-hero">
  <div class="container text-center">
    <h1 class="news-hero-title">News</h1>
    <p class="news-hero-text">
      Stay updated with the latest announcements, company milestones, industry insights, and technology advancements from KOT Enterprises. Discover how we are driving innovation and empowering businesses worldwide
    </p>
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
    <a href="/newsdetail-?id=<?= $row['id'] ?>" class="text-decoration-none">
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

    <a href="/services-/" class="btn hero-btn updates-btn mt-5">See All Services →</a>

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
  <a href="/eventdetail-?id=<?= $row['id'] ?>" class="text-decoration-none">
    <div class="event-card">
    
     <img src="../admin/uploads/<?= $row['image'] ?>" 
     class="images-news" 
     style="width:85%; border-radius:30px; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">

    </div>
  </a>
  
<?php } ?>

</div>

  </div>
</section>




<!-- Videos Section -->
<section class="videos-section" style="padding: clamp(30px,8vw,50px) 0;  color:#fff;">
  <div class="container" style="text-align:center;">
    <h2 class="sectionm-heading" style="margin-bottom:30px;">Videos</h2>

    <div class="videos-viewport" id="videosViewport" style="overflow:hidden; position:relative; padding:10px 0; cursor:grab; user-select:none; touch-action:pan-y;">
      <div class="videos-track" id="videosTrack" style="display:flex; gap:18px; will-change:transform; transform:translate3d(0,0,0);">
        <?php
        $videoQuery = mysqli_query($con, "
          SELECT title, video_url 
          FROM news 
          WHERE video_url IS NOT NULL AND video_url != '' 
          ORDER BY id DESC
        ");

        while($row = mysqli_fetch_assoc($videoQuery)){
          $videoUrl = trim($row['video_url']);
          $title = htmlspecialchars($row['title'] ?? '');

          // YouTube
          if(strpos($videoUrl,'youtube.com')!==false || strpos($videoUrl,'youtu.be')!==false){
            $videoId=null;
            if(preg_match('~youtu\.be/([^\?&/]+)~',$videoUrl,$m)) $videoId=$m[1];
            elseif(preg_match('~v=([^\?&/]+)~',$videoUrl,$m)) $videoId=$m[1];
            elseif(preg_match('~youtube\.com/embed/([^\?&/]+)~',$videoUrl,$m)) $videoId=$m[1];
            elseif(preg_match('~youtube\.com/shorts/([^\?&/]+)~',$videoUrl,$m)) $videoId=$m[1];

            if($videoId){
              $embedUrl="https://www.youtube.com/embed/$videoId?rel=0&modestbranding=1";
              echo "<div class='video-card' style='flex:0 0 auto; width:calc((100% - 36px)/3); border-radius:16px; overflow:hidden; background:#111; border:1px solid rgba(255,255,255,0.08); box-shadow:0 10px 30px rgba(0,0,0,0.35); position:relative;'>
                      <div class='video-embed' style='position:relative; padding-bottom:56.25%; height:0; overflow:hidden; background:#000;'>
                        <iframe src='".htmlspecialchars($embedUrl, ENT_QUOTES)."' title='".htmlspecialchars($title, ENT_QUOTES)."' style='position:absolute; inset:0; width:100%; height:100%; border:0; pointer-events:none;' allowfullscreen></iframe>
                      </div>
                    </div>";
            }

          }
          // Vimeo
          elseif(strpos($videoUrl,'vimeo.com')!==false){
            if(preg_match('~vimeo\.com/(\d+)~',$videoUrl,$m)) $videoId=$m[1];
            $embedUrl="https://player.vimeo.com/video/$videoId";
            echo "<div class='video-card' style='flex:0 0 auto; width:calc((100% - 36px)/3); border-radius:16px; overflow:hidden; background:#111; border:1px solid rgba(255,255,255,0.08); box-shadow:0 10px 30px rgba(0,0,0,0.35); position:relative;'>
                    <div class='video-embed' style='position:relative; padding-bottom:56.25%; height:0; overflow:hidden; background:#000;'>
                      <iframe src='".htmlspecialchars($embedUrl, ENT_QUOTES)."' title='".htmlspecialchars($title, ENT_QUOTES)."' style='position:absolute; inset:0; width:100%; height:100%; border:0; pointer-events:none;' allowfullscreen></iframe>
                    </div>
                  </div>";
          }
          // MP4
          else{
            echo "<div class='video-card' style='flex:0 0 auto; width:calc((100% - 36px)/3); border-radius:16px; overflow:hidden; background:#111; border:1px solid rgba(255,255,255,0.08); box-shadow:0 10px 30px rgba(0,0,0,0.35); position:relative;'>
                    <div class='video-embed' style='position:relative; padding-bottom:56.25%; height:0; overflow:hidden; background:#000;'>
                      <video src='".htmlspecialchars($videoUrl, ENT_QUOTES)."' style='position:absolute; inset:0; width:100%; height:100%;' controls></video>
                    </div>
                  </div>";
          }
        }
        ?>
      </div>
    </div>
  </div>
   <style>
    @media (max-width:991px){ .video-card{ flex:0 0 calc((100% - 18px)/2) !important; } }
    @media (max-width:575px){ .video-card{ flex:0 0 100% !important; width:100% !important; } }
  </style>
</section>

<!-- Video Overlay -->
<div class="video-overlay" id="videoOverlay" style="position:fixed; inset:0; background:rgba(0,0,0,0.85); display:flex; align-items:center; justify-content:center; opacity:0; visibility:hidden; transition:0.3s; z-index:9999;">
  <div class="video-overlay-content" style="position:relative; width:90%; max-width:900px;">
    <span class="video-close" id="videoClose" style="position:absolute; top:-40px; right:0; font-size:35px; color:#fff; cursor:pointer;">&times;</span>
    <div class="video-overlay-body" id="videoOverlayBody" style="position:relative; padding-bottom:56.25%; height:0;"></div>
  </div>
</div>



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
  <script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Dark page => ON by HTML (checked)

  t.addEventListener("change", () => {
    if (!t.checked) {
      // Dark -> Light
      window.location.href = "/news";
    }
  });
});
</script>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/script.js"></script>

    <!-- <script>
    
    window.addEventListener("load", () => {
      const startVideoSlider = (selector) => {
          const sliders = document.querySelectorAll(selector);
          sliders.forEach(slider => {
              if (!slider) return;
              if (slider.__videoSliderInitialized) return;
              slider.__videoSliderInitialized = true;

              const originalContent = slider.innerHTML;
              
             
              if (!originalContent.trim()) return;

            
              let clones = 0;
              while (slider.scrollWidth < window.innerWidth * 3 && clones < 20) {
                  slider.innerHTML += originalContent;
                  clones++;
              }

              let pos = 0;
              let isPaused = false;
              const speed = 0.5; 

             
              function animate() {
                  if (!isPaused) {
                      pos -= speed;
                      
                      if (Math.abs(pos) >= slider.scrollWidth / 2) {
                          pos = 0;
                      }
                      slider.style.transform = `translateX(${pos}px)`;
                  }
                  requestAnimationFrame(animate);
              }
              animate();

              
              slider.addEventListener('mouseenter', () => isPaused = true);
              slider.addEventListener('mouseleave', () => isPaused = false);
              slider.addEventListener('touchstart', () => isPaused = true);
              slider.addEventListener('touchend', () => isPaused = false);
          });
      };

      startVideoSlider('.videos-slider');
    });
    </script> -->
<!-- Slider JS -->
<script>
window.addEventListener("load",()=>{

  const viewport = document.getElementById("videosViewport");
  const track = document.getElementById("videosTrack");
  const overlay = document.getElementById("videoOverlay");
  const overlayBody = document.getElementById("videoOverlayBody");
  const overlayClose = document.getElementById("videoClose");
  if(!viewport || !track || !overlay || !overlayBody || !overlayClose) return;

  const originals = Array.from(track.children);
  if(!originals.length) return;

  // ======= CLONE FOR INFINITE LOOP =======
  let safety = 0;
  while(track.scrollWidth <= viewport.clientWidth * 4 && safety < 50){
    originals.forEach(n => track.appendChild(n.cloneNode(true)));
    safety++;
  }

  function getLoopLength(){ return track.scrollWidth / 2; }
  let loopLen = getLoopLength();

  // ======= SLIDER ANIMATION =======
  let offset = 0;
  let speed = 0.6;
  let accel = 0.0003;
  let maxSpeed = 1.2;
  let paused = false;
  let hoverPaused = false; // hover state
  let overlayPaused = false; // overlay state

  function normalize(){
    if(offset <= -loopLen) offset = offset % loopLen;
    if(offset >= 0) offset = -loopLen + (offset % loopLen);
  }

  function render(){ track.style.transform = `translate3d(${offset}px,0,0)`; }

  function tick(){
    if(!paused){
      speed = Math.min(maxSpeed, speed + accel);
      offset -= speed;
      normalize();
      render();
    }
    requestAnimationFrame(tick);
  }

  render();
  tick();

  // ======= PAUSE / RESUME FUNCTIONS =======
  function pauseSlider(){ paused = true; }
  function resumeSlider(){ if(!hoverPaused && !overlayPaused) paused = false; }

  // ======= HOVER EVENTS =======
  viewport.addEventListener("mouseenter",()=>{
    hoverPaused = true;
    pauseSlider();
  });

  viewport.addEventListener("mouseleave",()=>{
    hoverPaused = false;
    resumeSlider();
  });

  // ======= WHEEL CONTROL =======
  viewport.addEventListener("wheel",(e)=>{
    const delta = (Math.abs(e.deltaX) > Math.abs(e.deltaY)) ? e.deltaX : e.deltaY;
    const mostlyVertical = Math.abs(e.deltaY) > Math.abs(e.deltaX);
    if(mostlyVertical && !e.shiftKey) return;

    e.preventDefault();
    pauseSlider();
    offset -= delta;
    normalize();
    render();
    clearTimeout(viewport.__resumeT);
    viewport.__resumeT = setTimeout(resumeSlider, 500);
  },{passive:false});

  // ======= DRAG SUPPORT =======
  let isDown = false, startX = 0, startOffset = 0;

  viewport.addEventListener("mousedown",(e)=>{
    if(e.target.closest(".video-card,.video-embed")) return;
    isDown = true;
    pauseSlider();
    startX = e.clientX;
    startOffset = offset;
  });

  window.addEventListener("mousemove",(e)=>{
    if(!isDown) return;
    offset = startOffset + (e.clientX - startX);
    normalize();
    render();
  });

  window.addEventListener("mouseup",()=>{
    if(!isDown) return;
    isDown = false;
    resumeSlider();
  });

  // ======= TOUCH SUPPORT =======
  viewport.addEventListener("touchstart",(e)=>{
    if(!e.touches[0]) return;
    isDown = true;
    pauseSlider();
    startX = e.touches[0].clientX;
    startOffset = offset;
  },{passive:true});

  viewport.addEventListener("touchmove",(e)=>{
    if(!isDown || !e.touches[0]) return;
    offset = startOffset + (e.touches[0].clientX - startX);
    normalize();
    render();
  },{passive:true});

  viewport.addEventListener("touchend",()=>{
    if(!isDown) return;
    isDown = false;
    resumeSlider();
  },{passive:true});

  // ======= RESIZE =======
  window.addEventListener("resize",()=>{
    setTimeout(()=>{
      loopLen = getLoopLength();
      normalize();
      render();
    },300);
  });

  // ======= VIDEO OVERLAY =======
  track.addEventListener("click",(e)=>{
    const card = e.target.closest(".video-card");
    if(!card) return;

    const iframe = card.querySelector("iframe");
    const video = card.querySelector("video");
    if(!iframe && !video) return;

    overlayPaused = true; // overlay opened → pause slider
    pauseSlider();
    overlayBody.innerHTML = "";

    if(iframe){
      let src = iframe.src;
      if(!src.includes("autoplay=1")){
        src += (src.includes("?") ? "&" : "?") + "autoplay=1";
      }
      overlayBody.innerHTML = `
        <iframe src="${src}"
        style="position:absolute; inset:0; width:100%; height:100%; border:0;"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>`;
    } else if(video){
      overlayBody.innerHTML = `
        <video src="${video.src}"
        style="position:absolute; inset:0; width:100%; height:100%;"
        controls autoplay></video>`;
    }

    overlay.style.opacity = "1";
    overlay.style.visibility = "visible";
    overlay.classList.add("active");
  });

  function closeOverlay(){
    overlay.style.opacity = "0";
    overlay.style.visibility = "hidden";
    overlayBody.innerHTML = "";
    overlayPaused = false; // overlay closed → resume slider if hover not active
    resumeSlider();
  }

  overlayClose.addEventListener("click", closeOverlay);
  overlay.addEventListener("click",(e)=>{ if(e.target === overlay) closeOverlay(); });
  document.addEventListener("keydown",(e)=>{ if(e.key === "Escape") closeOverlay(); });

});
</script>






</body>

</html>