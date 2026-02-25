<?php require '../components/header.php'; ?>
<section class="dt-ecom-hero">
  <div class="dt-ecom-overlay"></div>

  <div class="dt-ecom-content">
    <!-- Logo -->
    <img
      src="../assets/images/merc-light/mlogo.svg"
      alt="Company Logo"
      class="dt-ecom-logo"
    />

    <!-- Heading -->
    <h1 class="dt-ecom-title">
      ELEVATING YOUR <br />
      E-COMMERCE EXPERIENCE
    </h1>

    <div class="dt-ecom-divider"></div>

    <!-- Paragraph -->
    <p class="dt-ecom-description">
      At Merchanity, we understand that e-commerce is no longer just about online
      transactions. It's about building long-term customer relationships through
      seamless, intelligent, and secure digital experiences. We enable businesses
      to adapt, scale, and thrive in the digital marketplace through advanced,
      customizable solutions that optimize operations and enhance engagement at
      every customer touchpoint.
    </p>

    <!-- Buttons -->
    <!-- <div class="dt-ecom-btn-group">
      <a href="contact" class="dt-ecom-cta-btn hero-btn">
        Contact Us
      </a>

      <a href="services" class="dt-ecom-cta-btn hero-btn">
        Explore Services
      </a>
    </div> -->

  </div>
</section>


<section class="solutions-wrapper-1">

<section class="offer-ecommerce-section py-5">
  <div class="container text-center">
    <!-- Heading & Paragraph -->
    <h2 class="offer-ecommerce-title mb-3">WHAT WE OFFER</h2>
    <p class="offer-ecommerce-subtitle mb-5">
      Merchanity is the e-commerce innovation division of KOT Enterprises. 
      It focuses on developing scalable, adaptable, and performance-driven platforms 
      that transform digital retail into a powerful growth engine.
    </p>

    <!-- Feature Cards -->
    <div class="row justify-content-center g-4">
      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon1.svg" alt="Custom E-commerce" class="img-fluid mb-2">
          <p style="font-weight: 500;">Custom E-commerce platform Development</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon2.svg" alt="AI Personalization" class="img-fluid mb-2">
          <p>AI Based <br> Personalization</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon3.svg" alt="Marketplace" class="img-fluid mb-2">
          <p>Integrated Market  <br>Place Solution</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon4.svg" alt="Mobile & Social" class="img-fluid mb-2">
          <p>Mobile First and Social commerce Enablement</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon5.svg" alt="Secure Payment" class="img-fluid mb-2">
          <p>Secure Payment & Fulfillment Ecosystem</p>
        </div>
      </div>
    </div>
  </div>
</section>

    

<section class="strategic-advantages-section py-5 text-center">
  <div class="container">
    <h2 class="strategic-title mb-3">OUR STRATEGIC ADVANTAGES</h2>
    <div class="strategic-image">
  <picture>
    <!-- Desktop -->
    <source media="(min-width: 992px)" 
            srcset="../assets/images/merc-light/pannel.svg">

    <!-- Tablet -->
    <source media="(min-width: 768px)" 
            srcset="../assets/images/merc-light/pannel-tablet.svg">

    <!-- Mobile -->
    <img src="../assets/images/merc-light/pannel-mobile.svg"
         alt="Strategic Advantages Illustration"
         class="img-fluid">
  </picture>
</div>

  </div>
</section>

<section class="challenges-section">
  <h2 class="strategic-title mb-5">Challenges We Address</h2>

  <div class="challenges-grid">

    <!-- Pair 1 -->
    <div class="caard challenge c1"></div>
    <div class="caard solution s1"></div>

    <!-- Pair 2 -->
    <div class="caard challenge c2"></div>
    <div class="caard solution s2"></div>

    <!-- Pair 3 -->
    <div class="caard challenge c3"></div>
    <div class="caard solution s3"></div>

    <!-- Pair 4 -->
    <div class="caard challenge c4"></div>
    <div class="caard solution s4"></div>

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
      window.location.href = "/merchanity-/";
    }
  });
});
</script>

</body>

</html>