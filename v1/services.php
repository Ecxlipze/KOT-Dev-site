<?php require '../components/header.php'; ?>
<body>
  <div id="global-header"></div>

<!-- OUR SERVICES SECTION -->
<section class="kot-services-section">

  <!-- Banner -->
  <div class="kot-services-banner">
    <h2>Our Services</h2>
  </div>

<div class="kot-marquee-wrap">
  <div class="kot-marquee-track" id="kotMarqueeTrack">
    <a href="/agile-apps/"><img src="../assets/images/news/11.png"></a>
    <a href="/flawless/"><img src="../assets/images/news/12.png"></a>
    <a href="/WebSculpture-/"><img src="../assets/images/news/13.png"></a>
    <a href="/digittrail/"><img src="../assets/images/news/14.png"></a>
    <a href="/agile-apps/"><img src="../assets/images/news/15.png"></a>
    <a href="/merchanity/"><img src="../assets/images/news/16.png"></a>
    <a href="/graphoria/"><img src="../assets/images/news/17.png"></a>
  </div>
</div>



  <!-- Grid Section -->
  <div class="container kot-services-grid">
    <div class="row g-4 justify-content-center">

      <div class="col-6 col-md-4 col-lg-3">
        <a href="/agile-apps/" class="kot-service-card">
          <img src="../assets/images/news/1.png" alt="">
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="/digittrail/" class="kot-service-card">
          <img src="../assets/images/news/2.png" alt="">
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="/app-sculpt/" class="kot-service-card">
          <img src="../assets/images/news/3.png" alt="">
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="/graphoria/" class="kot-service-card">
          <img src="../assets/images/news/4.png" alt="">
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="/merchanity/" class="kot-service-card">
          <img src="../assets/images/news/6.png" alt="">
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="/WebSculpture/" class="kot-service-card">
          <img src="../assets/images/news/5.png" alt="">
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="/flawless/" class="kot-service-card">
          <img src="../assets/images/news/7.png" alt="">
        </a>
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
    /* ================= ROBUST MARQUEE LOGIC ================= */
    (function() {
      const startMarquee = (id) => {
          const track = document.getElementById(id);
          if (!track) return;
          if (track.__marqueeInitialized) return;
          const unitWidth = track.scrollWidth;
          if (unitWidth <= 0) return; 
          
          track.__marqueeInitialized = true;
          track.style.animation = 'none';
        
          const startAnimation = () => {
            const originalHTML = track.innerHTML;
            track.innerHTML += originalHTML;
            while (track.scrollWidth < window.innerWidth + unitWidth) {
                track.innerHTML += originalHTML;
            }
        
            let pos = 0;
            let speed = 0.5;
            function animate() {
              pos -= speed;
              if (pos <= -unitWidth) pos = 0;
              track.style.transform = `translateX(${pos}px)`;
              requestAnimationFrame(animate);
            }
            animate();
          };
        
          const images = Array.from(track.getElementsByTagName('img'));
          if (images.length === 0 || images.every(img => img.complete)) {
            startAnimation();
          } else {
            let loadedCount = 0;
            images.forEach(img => {
              img.addEventListener('load', () => {
                loadedCount++;
                if (loadedCount === images.length) startAnimation();
              });
              img.addEventListener('error', () => {
                loadedCount++;
                if (loadedCount === images.length) startAnimation();
              });
            });
          }
      };

      document.addEventListener("DOMContentLoaded", () => {
          startMarquee("kotMarqueeTrack");
      });
      window.addEventListener("load", () => {
          startMarquee("kotMarqueeTrack");
      });
    })();
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
      window.location.href = "/services-/";
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