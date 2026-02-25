<?php require '../components/header.php'; ?>
  <!-- career-section-start -->
   <div class="container-fluid">
    <div class="career-section-bg-image">
        <div class="career-section-1-image">
         <img src="../assets/images/career/career-section-1-image.png" alt="">
        </div>
        <div class="career-section-text py-4">
            <h2 style="font-weight: 700; font-size: 46px;">Why KOT Enterprises</h2>
        </div>
        <div class="career-section-btn">
            <!-- <a href="">Watch the Film</a> -->
        </div>
    </div>
   </div>

   <!-- career-section-2-text -->
    <div class="container-fluid career-section-2-main ">
        <div class="container">
            <div class="career-section-2-text">
            <h6 style="font-family:'Montserrat', sans-serif; font-weight: 600; padding: 5% 0; font-size: 28px;">At KOT Enterprises, we prioritize understanding your needs and delivering tailored digital solutions powered by smart technology. With our clients at the heart of everything we do, we strive to create meaningful, impactful outcomes. We turn challenges into opportunities, shaping a world where digital innovation seamlessly drives progress</h6>
        </div>
        </div>
    </div>
<div class="container-fluid career-section-3-main-image">
  <div class="container">

    <div class="secton-3-intership-text text-center mb-1" style="padding-bottom:1% !important;">
      <h2 style="font-family:'Montserrat', sans-serif; font-weight: 700; font-size: 52px;">Our Core Values</h2>
      <!-- <p>Are you a student or recent graduate? We offer internship programs in:</p> -->
    </div>
    <!-- Core Values Section -->
<section class="values-section">
  <div class="container">
    <div class="row g-4">

      <div class="col-lg-3 col-md-6 desktop-shift
      mob-shift tab-shift d-flex justify-content-center" >
        <div class="value-card value-1"></div>
</div>


      <div class="col-lg-3 col-md-6 mob-shift tab-shift d-flex justify-content-center">
        <div class="value-card value-2"></div>
      </div>

      <div class="col-lg-3 col-md-6 mob-shift tab-shift d-flex justify-content-center">
        <div class="value-card value-3"></div>
      </div>

      <div class="col-lg-3 col-md-6 mob-shift tab-shift d-flex justify-content-center">
        <div class="value-card value-4"></div>
      </div>

    </div>
  </div>
</section>

<section class="impact-content-section">
  <div class="container">
    <div class="row g-4">

     <!-- Left Card -->
<div class="col-lg-6 p-0">
  <div class="impact-card impact-left h-100">
    <h3 class="impact-card-title">Our Impact</h3>
    <p class="impact-card-text">
      Our commitment to innovation, integrity, and excellence translates into tangible results.
      We are proud to have served 145+ satisfied clients, providing them with solutions that
      guarantee success. Our dedication extends far beyond delivery, with 345+ instances of
      after-sales support ensuring sustained client satisfaction. This commitment to quality
      and service has also been recognized with 5+ industry awards won.
    </p>
  </div>
</div>

<!-- Right Card -->
<div class="col-lg-6 p-0" style="margin-top: 0;">
  <div class="impact-card impact-right h-100">
    <h3 class="impact-card-title">
      Innovation Beyond Limits,<br>
      Where Ideas Take Flight.
    </h3>
    <p class="impact-card-text">
      We proactively integrate emerging technologies like AI, ML, and Generative AI, ensuring
      our clients are always ahead. Our dedicated R&amp;D fosters continuous breakthroughs,
      turning complex problems into competitive advantages. Your problems, our solutions;
      a timeless combination.
    </p>
  </div>
</div>


    </div>
  </div>
</section>

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
  const track = document.getElementById("marqueeTrack");

    // Duplicate cards so animation never ends
    track.innerHTML += track.innerHTML;

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
      window.location.href = "/why-kot-/";
    }
  });
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>