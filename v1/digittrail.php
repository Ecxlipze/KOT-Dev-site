<?php require '../components/header.php'; ?>
  <section class="dt-visual-section">
    <picture class="dt-visual-wrapper">

      <!-- Desktop -->
      <source media="(min-width: 1024px)" srcset="../assets/images/digi-light/digi-desk.svg" />

      <!-- Tablet -->
      <source media="(min-width: 768px)" srcset="../assets/images/digi-light/digi-desk.svg" />

      <!-- Mobile -->
      <img src="../assets/images/digi-light/digi-mob.svg" alt="Strategic Visual Illustration" class="dt-visual-image" />

    </picture>
  </section>

  <section class="solutions-wrapper-1" style=";">

    <section class="dgx-growth" style="background-color: #DFDFDF;">
      <div class="container text-center">

        <!-- Heading -->
        <h2 class="dgx-growth-title">
          Our Promise Growth That Feels Right
        </h2>

        <p class="dgx-growth-desc">
          We don’t chase trends blindly. We study, listen, analyze, and then create. Every campaign we design is
          backed by data, fueled by creativity, and guided by purpose. Our work doesn’t just look good — it moves
          people, builds trust, and delivers results.
        </p>

        <!-- Cards -->
        <div class="row g-4 justify-content-center dgx-cards">

          <div class="col-lg-4 col-md-6 dgx-card">
            <div class="dgx-card-inner dgx-bg-1">
              <h4>Content Marketing</h4>
              <h6>Stories That Educate, Inspire
                and Convert </h6>

              <p>Words have power when used with intention. We craft content that fills gaps in understanding,
                trust, and confidence.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 dgx-card">
            <div class="dgx-card-inner dgx-bg-2">
              <h4>Pay Per Click (PPC)</h4>
              <h6>Every Click with a Purpose </h6>

              <p>Precision-driven campaigns designed to reach the right people at the right time, delivering
                clarity and conversions.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 dgx-card">
            <div class="dgx-card-inner dgx-bg-3">
              <h4>Email Marketing</h4>
              <h6>Conversations That Stay Alive </h6>

              <p>Thoughtful, timely email journeys that nurture trust and turn subscribers into loyal
                advocates.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 dgx-card">
            <div class="dgx-card-inner dgx-bg-4">
              <h4>Branding Strategy</h4>
              <h6>Building Identities That Last</h6>

              <p>A brand is a feeling before it is a visual. We define voices and visuals that resonate
                emotionally and perform strategically.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

          <!-- Hidden on tablet & mobile -->
          <div class="col-lg-4 col-md-6 dgx-card dgx-hide-md">
            <div class="dgx-card-inner dgx-bg-5">
              <h4>Reputation Marketing</h4>
              <h6>Reputation Marketing </h6>

              <p>We help you listen, respond, and lead the narrative so your brand reflects its true
                integrity.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 dgx-card dgx-hide-md">
            <div class="dgx-card-inner dgx-bg-6">
              <h4>Traditional Marketing</h4>
              <h6>Real-World Presence with Real Impact </h6>

              <p>Offline channels integrated with modern strategy to create authentic and memorable
                visibility.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 dgx-card dgx-hide-md">
            <div class="dgx-card-inner dgx-bg-7">
              <h4>Search Engine Optimization </h4>
              <h6> Being Found When It Matters Most </h6>

              <p>Our SEO strategies ensure your brand appears
                exactly when your audience is searching, built on strong foundations and long-term
                relevance.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 dgx-card dgx-hide-md">
            <div class="dgx-card-inner dgx-bg-8">
              <h4>Social Media Marketing </h4>
              <h6>Turning Audiences into Communities </h6>
              <p>Social media is not about posting — it’s about connection. We help brands spark
                conversations, build loyalty, and grow meaningful communities.</p>
              <!-- <a href="#">READ MORE</a> -->
            </div>
          </div>

        </div>

        <!-- Button -->
        <div class="mt-5">
          <a href="/services/" class="dgx-cta-btn">View all Services</a>
        </div>

      </div>
    </section>

    <section class="digittrail-section2 mt-5">
      <div class="container ">

        <!-- Content -->
        <div class="digi-content">
          <h2>
            Why Brands Choose <br> <span style="color: #F59918;">DIGITTRAIL
            </span> </h2>

          <p>
            We combine clarity in design with precision in execution, bringing
            high-impact solutions to businesses that are ready to scale.
          </p>
        </div>
      </div>
      <!-- Image -->
      <div class="digi-visual">
        <picture>
          <!-- Desktop -->
          <source media="(min-width: 768px)" srcset="../assets/images/digi-light/digi2.svg">


          <!-- Mobile -->
          <img src="../assets/images/digi-light/digi2-mob.svg" alt="DigitTrail graphic" class="img-fluid">
        </picture>

      </div>

      </div>
    </section>


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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->

  <script src="../assets/js/script.js"></script>
  <!--Toggle Button Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Light page => off by default (no need to set)

  t.addEventListener("change", () => {
    if (t.checked) {
      // Light -> Dark
      window.location.href = "/digittrail-/";
    }
  });
});
</script>

</body>

</html>