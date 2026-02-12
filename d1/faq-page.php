<?php require '../components/header-dark.php'; ?>
    <!-- FAQ BANNER -->
<section class="faq-banner">
  <div class="faq-banner-content">
    <h1>FREQUENTLY ASKED QUESTIONS</h1>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-main-section">
    <div class="faq-container" id="bp-embedded-webchat">
        
    </div>
</section>


    <div id="global-footer"></div>
        <button id="goTopBtn" title="Go to top">↑</button>

    <script src="https://cdn.botpress.cloud/webchat/v3.5/inject.js"></script>
<script src="https://files.bpcontent.cloud/2026/01/13/07/20260113075304-XAN3NDV7.js" defer></script>
    
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
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');

    question.addEventListener('click', () => {
      item.classList.toggle('active');
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
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/script.js"></script>
    <!--Toggle Button Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Dark page => ON by HTML (checked)

  t.addEventListener("change", () => {
    if (!t.checked) {
      // Dark -> Light
      window.location.href = "/faq-page";
    }
  });
});
</script>

</body>

</html>