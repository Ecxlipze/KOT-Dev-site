<?php require '../components/header.php'; ?>
<section id="message-board" class="message-section">
    <div class="container text-center">
        <h2 class="message-heading">A Message from Our Board of Directors</h2>
        <p class="message-paragraph">
            At KOT Enterprises, we believe in building a technology driven future that is easily accessible globally. As your Board of Directors, we consider it both our main responsibility and a great privilege to guide this vision. Our commitment to our clients ensures that our mission, our company culture, and the services we offer continuously grow and adapt to meet the evolving needs of our customers and partners worldwide.
        </p>
        <a href="/contact/" class="btn btn-primary hero-btn">
          Meet the Team 
        </a>
    </div>
</section>



    <!-- CAPABILITIES SECTION -->

<section class="solutions-wrapper">
<section id="committed" class="committed-section mb-5">
    <h2 class="committed-heading text-center">We are deeply committed to</h2>
<div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-6 col-12 committed-card">
  <picture>
    <!-- Mobile image -->
    <source media="(max-width: 767px)" srcset="../assets/images/board-of-director/c1m.svg">

  
    <!-- Desktop fallback -->
    <img 
      src="../assets/images/board-of-director/c1.svg" 
      alt="Commitment 1"
      class="img-fluid"
    >
  </picture>
</div>

       <div class="col-lg-3 col-md-6 col-12 committed-card">
  <picture>
    <!-- Mobile image -->
    <source media="(max-width: 767px)" srcset="../assets/images/board-of-director/c2m.svg">

  
    <!-- Desktop fallback -->
    <img 
      src="../assets/images/board-of-director/c2.svg" 
      alt="Commitment 1"
      class="img-fluid"
    >
  </picture>
</div>
      <div class="col-lg-3 col-md-6 col-12 committed-card">
  <picture>
    <!-- Mobile image -->
    <source media="(max-width: 767px)" srcset="../assets/images/board-of-director/c3m.svg">

  
    <!-- Desktop fallback -->
    <img 
      src="../assets/images/board-of-director/c3.svg" 
      alt="Commitment 1"
      class="img-fluid"
    >
  </picture>
</div>
      <div class="col-lg-3 col-md-6 col-12 committed-card">
  <picture>
    <!-- Mobile image -->
    <source media="(max-width: 767px)" srcset="../assets/images/board-of-director/c4m.svg">

  
    <!-- Desktop fallback -->
    <img 
      src="../assets/images/board-of-director/c4.svg" 
      alt="Commitment 1"
      class="img-fluid"
    >
  </picture>
</div>
    </div>
</div>
</section>


        <!-- Sections will go here -->



<section class="board-message">
  <div class="container">
    <div class="board-content">
      <p>
        Looking ahead, we aim to remain your most trusted partner. We promise to
        listen carefully to your needs, adapt with agility to new challenges, and
        consistently exceed your expectations.
        
        Whether you are a customer, a valued collaborator, an investor, or a member
        of our team, your success will always be our foremost priority.
        <br><br>
        Together, let’s build a future that is both secure and reliable.
      </p>

      <div class="signature">
        <span>Warm Regards,</span>
        <strong>The Board of Directors</strong>
        <span style="color: #000000; font-weight: 500;">KOT Enterprises</span>
      </div>
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
    <script>
        const slider = document.getElementById('aiSlider');

        function slideLeft() {
            slider.scrollBy({ left: -300, behavior: 'smooth' });
        }

        function slideRight() {
            slider.scrollBy({ left: 300, behavior: 'smooth' });
        }
    </script>
      <!--Toggle Button Script-->
    <!--Toggle Button Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Light page => off by default (no need to set)

  t.addEventListener("change", () => {
    if (t.checked) {
      // Light -> Dark
      window.location.href = "/board-of-directors-/";
    }
  });
});
</script>
</body>

</html>