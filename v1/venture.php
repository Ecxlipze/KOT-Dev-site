<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventures - KOT</title>
    <link rel="stylesheet" href="../assets/css/styles2.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/neww.css">
    <link rel="stylesheet" href="../assets/css/responsive-dm.css">

  
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/cardslight/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


        <style>
                body {
    font-family: 'Montserrat', sans-serif;
}

/* HERO */
.hero-bg {
    min-height: 30vh;
    background-size: cover;
    background-position: center;
    position: relative;
}

.hero-bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.7);
}

.hero-text {
    position: relative;
    z-index: 2;
    margin-bottom: 27%;
    margin-left: 30%;
    padding-top: 2%;
}

.hero-title {
    font-size: 3rem;
    font-weight: 800;
}

.hero-subtitle {
    font-size: 1.8rem;
    font-weight: 500;
}

/* CONTENT BOX */
.hero-content-box {
    margin-top: -100px;
    position: relative;
    z-index: 3;
}

.content-box {
   padding: 35px;
    margin-left: 29%;
    margin-top: -18%;
    border-radius: 12px;
     border: 1px solid rgb(0, 0, 0);
    background: #fff;
   width: calc(100vw * 2.1 / 3);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}
.content-box p {
  font-weight: 600;
  margin-bottom: 1%;
  
}

.content-title {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-transform: uppercase;
}

@media (min-width: 50px) and (max-width: 767px) {
  .hero-title {
      font-family: 'Montserrat-Extra-Bold' !important;


font-size: 24px !important;


letter-spacing: 0%;

    }

    .hero-subtitle {
     font-family: 'Montserrat-Regular' !important;

font-size: 15px !important;

line-height: 112.00000000000001%;
letter-spacing: 0%;

    }
        .hero-text {
        
        padding-top: 5% !important;
    }
      .content-box{
      width: 104% !important;
    }
    .content-title{
      font-size: 12px !important;
    }
    .content-box p{
      font-size: 9px !important;
    }
}
@media (min-width:993px) and (max-width:1200px) {
   .venture-logo-add{
      margin-top: 0% !important;

    }
    .venture-logo-add img{
      /* width: 80% !important; */
      margin-left: 30% !important;
    }
}
/* RESPONSIVE */
@media (max-width: 1024px) {
     .hero-title {
      font-family: 'Montserrat-Extra-Bold' ;


font-size: 40px ;


letter-spacing: 0%;

    }

    .hero-subtitle {
     font-family: 'Montserrat-Regular' ;

font-size: 24px ;

line-height: 112.00000000000001%;
letter-spacing: 0%;

    }

    .hero-content-box {
        margin-top: -50px;
    }

    .content-box {
        padding: 25px;
        margin-left: 0%;
        width: 100%;
        margin-top: -10%;
    }
    .content-box p {
      font-size: 16px;
    }

    .content-title {
        font-size: 1.1rem;
    }
    .hero-text {
            margin-left: 0%;
            margin-bottom: 20%;
            padding-top: 5%;
    }
   
}
        </style>

</head>
<body>
    <div id="global-header"></div> 

<section class="hero-section position-relative">
     
    <!-- Background -->
    <div class="hero-bg d-flex align-items-center" style="background-image: url('../assets/images/vent-light/vent-banner.jpg');">

      <div class="venture-logo-add d-none d-lg-block" style="margin-top:-20%; z-index:999;">
  <img src="../assets/images/vent-light/venture-logo-1.png" alt="" style="margin-left:80%; width:219px ; ">
</div>

        <div class="container">
            <div class="row">
      
                <div class="col-lg-12   ">
                     <div class="row">
                               <div class="venture-logo-add col-4 d-block d-lg-none" style="margin-top:2%; z-index:999;">
                          <img src="../assets/images/vent-light/venture-logo-1.png" alt="" style="margin-left:4%; width:90%;">
                          </div>
                     
                    <div class="hero-text text-white col-8">
                        <h1 class="hero-title" style="color: #1DAE90; margin-bottom: 0%;">Venture Xcelerator</h1>
                        <p class="hero-subtitle">From Belief to Breakthrough</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlay Content -->
    <div class="hero-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-box">
                        <h4 class="content-title">
                            WHERE IDEAS FIND DIRECTION — AND FOUNDERS FIND CONFIDENCE
                        </h4>

                        <p>
                            Every startup begins with courage.<br>
                            The courage to believe in an idea when no one else can see it yet.<br>
                            The courage to start before everything feels ready.<br>
                            The courage to keep going when the path feels uncertain.
                        </p>

                        <p>
                            At Venture Xcelerator, we exist for that moment. We help early-stage
                            founders turn raw ideas into real, scalable businesses not just
                            through advice, but through partnership, structure, and belief.
                        </p>

                        <p>
                            From first concept to market impact, we walk with you at every step.
                            Because startups don’t just need speed — they need clarity,
                            confidence, and the right support system.
                        </p>

                        <!-- <div class="d-flex gap-3 mt-4">
                            <a href="/contact/" class="btn hero-btn btn-primary px-4">
                                REQUEST CONSULTATION
                            </a>
                            <a href="/contact/" class="btn hero-btn btn-primary px-3">
                                DOWNLOAD CATLOGUE
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
  
       <section class="dt-visual-section">
  <picture class="dt-visual-wrapper" style="width: 90%; margin: auto; max-width: 1100px;">
    
    <!-- Desktop -->
    <source
      media="(min-width: 1024px)"
      srcset="../assets/images/episodeslight/epi.png"
    />

    <!-- Tablet -->
    <source
      media="(min-width: 768px)"
      srcset="../assets/images/episodeslight/epi.png"
    />

    <!-- Mobile -->
    <img
      src="../assets/images/episodeslight/epi.png"
      alt="Strategic Visual Illustration"
      class="dt-visual-image"
    />

  </picture>
       </section>
    <section class="solutions-wrapper">

 <section id="what-we-do" class="container text-center">
    <h2>WHAT WE DO</h2>
    <p>BUILDING STRONG FOUNDATIONS FOR LASTING GROWTH</p>

    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-lg-6 mb-1">
            <div class="card card3" style="background-image: url('./../assets/images/vent-light/venc1.svg');">
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-6 mb-1">
            <div class="card card3" style="background-image: url('./../assets/images/vent-light/venc2.svg');">
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-6 mb-1">
            <div class="card card3" style="background-image: url('./../assets/images/vent-light/venc3.svg');">
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-md-6 col-lg-6 mb-1">
            <div class="card card3" style="background-image: url('./../assets/images/vent-light/venc4.svg');">
            </div>
        </div>
    </div>
</section>

<section class="founders-slider-section py-5">
  <div class="container text-center">
    <!-- Heading -->
    <h2 class="slider-title mb-4">Why Founders Choose <br> Venture Xcelerator</h2>

    <!-- Multi-card Carousel -->
    <div id="foundersCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-10 mx-2 card-slide">
              <div class="">
                <img src="../assets/images/vent-light/card1.svg" class="card-img-top" alt="Founder-first">
                <div class="card-body">
                  <!-- <p class="card-text">Founder-first, personalized guidance</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-10 mx-2 card-slide">
              <div class="">
                <img src="../assets/images/vent-light/card2.svg" class="card-img-top" alt="Strategy-led">
                <div class="card-body">
                  <!-- <p class="card-text">Strategy-led growth support</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-10 mx-2 card-slide">
              <div class="">
                <img src="../assets/images/vent-light/card3.svg" class="card-img-top" alt="Access to networks">
                <div class="card-body">
                  <!-- <p class="card-text">Access to trusted investor and partner networks</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-10 mx-2 card-slide">
              <div class="">
                <img src="../assets/images/vent-light/card1.svg" class="card-img-top" alt="Powered by KOT">
                <div class="card-body">
                  <!-- <p class="card-text">A complete startup ecosystem powered by KOT Enterprises</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#foundersCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2 d-none" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#foundersCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-2 d-none" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Desktop Row -->
    <div class="d-none d-md-flex justify-content-center flex-wrap gap-4">
      <div class="col-lg-3 col-md-5 card-slide">
        <div class="card card4">
          <img src="../assets/images/vent-light/card1.svg" class="card-img-top" alt="Founder-first">
          <!-- <div class="card-body">
            <p class="card-text">Founder-first, personalized guidance</p>
          </div> -->
        </div>
      </div>
      <div class="col-lg-3 col-md-5 card-slide">
        <div class="card card4">
          <img src="../assets/images/vent-light/card2.svg" class="card-img-top" alt="Strategy-led">
          <!-- <div class="card-body">
            <p class="card-text">Strategy-led growth support</p>
          </div> -->
        </div>
      </div>
      <div class="col-lg-3 col-md-5 card-slide">
        <div class="card card4">
          <img src="../assets/images/vent-light/card3.svg" class="card-img-top" alt="Access to networks">
          <!-- <div class="card-body">
            <p class="card-text">Access to trusted investor and partner networks</p>
          </div> -->
        </div>
      </div>
      <div class="col-lg-3 col-md-5 card-slide">
        <div class="card card4">
          <img src="../assets/images/vent-light/card1.svg" class="card-img-top" alt="Powered by KOT">
          <!-- <div class="card-body">
            <p class="card-text">A complete startup ecosystem powered by KOT Enterprises</p>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Learn More Button -->
    <!-- <div class="mt-4">
      <a href="#" class="btn btn-primary hero-btn">LEARN MORE</a>
    </div> -->

  </div>
</section>

<section class="isupport-section py-5">
  <div class="container text-center">
    <!-- Heading -->
    <h2 class="isupport-title mb-2">WHO WE SUPPORT</h2>
    <p class="isupport-subtitle mb-5">THE BUILDERS OF TOMORROW</p>

    <div class="row g-2 justify-content-center ">

      <div class="col-lg-4 col-md-6">
        <div class="isupport-card" style="background-image: url('');">
          <img src="../assets/images/vent-light/gcard1.svg" alt="">
          <!-- <div class="isupport-text">Idea-stage innovators</div> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="isupport-card" style="background-image: url('');">
          <img src="../assets/images/vent-light/gcard2.svg" alt="">
          <!-- <div class="support-text">Early-stage startups</div> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="isupport-card" style="background-image: url('');">
          <img src="../assets/images/vent-light/gcard3.svg" alt="">
          <!-- <div class="support-text">Tech-driven MVPs</div> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="isupport-card" style="background-image: url('');">
          <img src="../assets/images/vent-light/gcard4.svg" alt="">
          <!-- <div class="support-text">Social enterprises</div> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="isupport-card" style="background-image: url('');">
          <img src="../assets/images/vent-light/gcard5.svg" alt="">
          <!-- <div class="support-text">First-time founders</div> -->
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="isupport-card" style="background-image: url('');">
          <img src="../assets/images/vent-light/gcard6.svg" alt="">
          <!-- <div class="support-text">Solo founders & growing teams</div> -->
        </div>
      </div>

    </div>
  </div>
</section>

<section class="approach-section py-5">
  <div class="container text-center">
    <!-- Heading -->
    <h2 class="approach-title mb-2">Our Approach</h2>
    <p class="approach-subtitle mb-5">STRUCTURE WITH HEART</p>

    <div class="row justify-content-center align-items-start g-4">

      <div class="col-lg-3 col-md-6 offset-lg-0">
        <div class="approach-card" style="background-image:url('../assets/images/vent-light/acrd1.svg');">
          <!-- <div class="approach-text">
            <h4>DISCOVER</h4>
            <p>We listen deeply to your story, vision, and challenges.</p>
          </div> -->
        </div>
      </div>

      <div class="col-lg-3 col-md-6 offset-lg-0">
        <div class="approach-card" style="background-image:url('../assets/images/vent-light/acrd2.svg');">
          <!-- <div class="approach-text">
            <h4>DESIGN</h4>
            <p>We co-create strategy, systems, and momentum.</p>
          </div> -->
        </div>
      </div>

      <div class="col-lg-3 col-md-6 offset-lg-0">
        <div class="approach-card" style="background-image:url('../assets/images/vent-light/acrd3.svg');">
          <!-- <div class="approach-text">
            <h4>ACCELERATE</h4>
            <p>We connect you to opportunities, capital, and networks.</p>
          </div> -->
        </div>
      </div>

      <div class="col-lg-3 col-md-6 offset-lg-0">
        <div class="approach-card" style="background-image:url('../assets/images/vent-light/acrd4.svg');">
          <!-- <div class="approach-text">
            <h4>SUSTAIN</h4>
            <p>We help you grow with resilience, clarity, and purpose.</p>
          </div> -->
        </div>
      </div>

    </div>
  </div>


<section class="dt-visual-section">
          
  <picture class="dt-visual-wrapper" style="width: 95%; margin: auto; max-width: 900px;">
    
    <!-- Desktop -->
    <source
      media="(min-width: 1024px)"
      srcset="../assets/images/vent-dark/bcard2.png"
    />

    <!-- Tablet -->
    <source
      media="(min-width: 768px)"
      srcset="../assets/images/vent-dark/bcard2.png"
    />

    <!-- Mobile -->
    <img
      src="../assets/images/vent-dark/bcard2m.png"
      alt="Strategic Visual Illustration"
      class="dt-visual-image"
    />

  </picture>
       
</section>
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
   <script>
    fetch('../components/header.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('global-header').innerHTML = data;
    initHeader(); // run AFTER header is injected
    initMarquee();
    });
    function initHeader() {

    if (window.__headerInitialized) return;
    window.__headerInitialized = true;
    
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
    window.location.href = "/venture-";

        });
        

     /* ================= MOBILE MENU ================= */
    const body = document.body;
    const menu = document.getElementById("mobileMenu");
    const overlay = document.getElementById("menuOverlay");
    const openBtnTop = document.getElementById("openMenuBtn");
    const openBtnBottom = document.getElementById("openMenuBtnBottom");
    const closeBtn = document.getElementById("closeMenuBtn");

   function openMenu() {
    menu?.classList.add("kot-header-open");
    overlay?.classList.add("kot-header-show");
    body.style.overflow = "hidden";
    menu?.setAttribute("aria-hidden", "false");
     }

         function closeMenu() {
    menu?.classList.remove("kot-header-open");
    overlay?.classList.remove("kot-header-show");
    body.style.overflow = "";
    menu?.setAttribute("aria-hidden", "true");
     }

   openBtnTop?.addEventListener("click", openMenu);
    openBtnBottom?.addEventListener("click", openMenu);
    closeBtn?.addEventListener("click", closeMenu);
    overlay?.addEventListener("click", closeMenu);

    document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && menu?.classList.contains("kot-header-open")) {
      closeMenu();
    }
    });

    // MOBILE ACCORDION FUNCTIONALITY
    const accBtns = document.querySelectorAll(".kot-header-menu-acc-btn");
    accBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const accordion = btn.parentElement;
            accordion.classList.toggle("kot-header-open");
            
            // Close other accordions
            accBtns.forEach(otherBtn => {
                const otherAccordion = otherBtn.parentElement;
                if (otherAccordion !== accordion) {
                    otherAccordion.classList.remove("kot-header-open");
                }
            });
        });
    });

    // TOGGLE BUTTON
    document.getElementById("glowToggle")?.addEventListener("change", function () {
        console.log(this.checked ? "Dark mode ON" : "Dark mode OFF");
    });

        // ================= SMOOTH DESKTOP MEGA MENU (BLINKING FIXED) =================
        const navItems = document.querySelectorAll('.kot-main-header-nav-bar-item-wrapper');
        const megaMenus = document.querySelectorAll('.kot-main-header-nav-bar-mega-menu');
        const bufferZone = document.querySelector('.mega-menu-buffer');
        const navBar = document.getElementById('nav');
 
        // Hide all mega menus initially
        megaMenus.forEach(menu => {
            menu.classList.remove('show');
        });
        
        // Hover colors for ALL menu items
        const hoverColors = {
            'CORPORATE': '#A65E4E',
            'SERVICES': '#A53694',
            'CONSULTANCY': '#7EAB39',
            'SUPPORT': '#068A4F',
            'CAREER': '#dc3545',
            'CONTACT': '#6c757d',
            'INSIGHTS': '#C43882'
        };
        
        // Control variables
        let activeMenu = null;
        let activeNavItem = null;
        let hoverTimer = null;
        let isTransitioning = false;
        let mouseX = 0;
        let mouseY = 0;
        
        // Track mouse movement
        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });
        
        // Function to get mega menu ID
        function getMegaMenuId(menuType) {
            switch(menuType) {
                case 'CORPORATE': return 'corporateMega';
                case 'SERVICES': return 'servicesMega';
                case 'CONSULTANCY': return 'consultancyMega';
                case 'INSIGHTS': return 'insightsMega';
                default: return null;
            }
        }
        
        // Function to check if element has mega menu
        function hasMegaMenu(item) {
            const dataItem = item.getAttribute('data-item');
            return dataItem === 'CORPORATE' || 
                   dataItem === 'SERVICES' ||
                   dataItem === 'CONSULTANCY' ||
                   dataItem === 'INSIGHTS';
        }
        
        // Function to hide ALL mega menus
        function hideAllMegaMenus() {
            megaMenus.forEach(menu => {
                menu.classList.remove('show');
            });
            
            navItems.forEach(item => {
                item.classList.remove('mega-hovered');
                item.style.backgroundColor = '';
            });
            
            if (bufferZone) bufferZone.style.display = 'none';
            activeMenu = null;
            activeNavItem = null;
            isTransitioning = false;
        }
        
        // Function to show specific mega menu
        function showMegaMenu(menuType, navItemElement) {
            // Clear any pending timers
            if (hoverTimer) {
                clearTimeout(hoverTimer);
                hoverTimer = null;
            }
            
            // If already showing the same menu, do nothing
            const megaMenuId = getMegaMenuId(menuType);
            if (activeMenu && activeMenu.id === megaMenuId) {
                return;
            }
            
            // Set transitioning flag
            isTransitioning = true;
            
            // First hide all menus
            hideAllMegaMenus();
            
            // Show buffer zone
            if (bufferZone) {
                bufferZone.style.display = 'block';
                const rect = navItemElement.getBoundingClientRect();
                const navRect = navBar.getBoundingClientRect();
                bufferZone.style.left = (rect.left - navRect.left) + 'px';
                bufferZone.style.width = rect.width + 'px';
                bufferZone.style.top = '100%';
                bufferZone.style.height = '10px';
            }
            
            // Highlight nav item
            navItemElement.classList.add('mega-hovered');
            const color = hoverColors[navItemElement.getAttribute('data-item')];
            if (color) {
                navItemElement.style.backgroundColor = color;
            }
            
            // Show target menu
            if (megaMenuId) {
                const targetMega = document.getElementById(megaMenuId);
                if (targetMega) {
                    // Small delay for smoothness
                    setTimeout(() => {
                        targetMega.classList.add('show');
                        activeMenu = targetMega;
                        activeNavItem = navItemElement;
                        isTransitioning = false;
                    }, 10);
                }
            }
        }
        
        // ========== NAV ITEM HOVER EVENTS ==========
        navItems.forEach((item) => {
            const menuType = item.getAttribute('data-item');
            const hasMega = hasMegaMenu(item);
            
            item.addEventListener('mouseenter', function(e) {
                // Clear any hide timer
                if (hoverTimer) {
                    clearTimeout(hoverTimer);
                    hoverTimer = null;
                }
                
                // Apply hover color
                const color = hoverColors[menuType];
                if (color) {
                    this.style.backgroundColor = color;
                }
                
                if (hasMega) {
                    // For items with mega menus
                    showMegaMenu(menuType, this);
                } else {
                    // For items without mega menus
                    hideAllMegaMenus();
                    this.classList.add('mega-hovered');
                    this.style.backgroundColor = color;
                    activeNavItem = this;
                }
            });
            
            item.addEventListener('mouseleave', function(e) {
                // Don't process if transitioning
                if (isTransitioning) return;
                
                const relatedTarget = e.relatedTarget;
                const goingToMega = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-mega-menu');
                const goingToBuffer = relatedTarget && relatedTarget.closest('.mega-menu-buffer');
                const goingToAnotherNav = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-item-wrapper');
                
                // If going to buffer zone, mega menu, or another nav item, don't hide immediately
                if (goingToBuffer || goingToMega || goingToAnotherNav) {
                    return;
                }
                
                // Set timer to hide
                hoverTimer = setTimeout(() => {
                    // Reset background color
                    this.style.backgroundColor = '';
                    this.classList.remove('mega-hovered');
                    
                    // Hide mega menu if not hovering over it
                    if (activeMenu && !isMouseOver(activeMenu) && !isMouseOver(bufferZone)) {
                        hideAllMegaMenus();
                    }
                }, 50); // Very short delay
            });
        });
        
        // ========== BUFFER ZONE EVENTS ==========
        if (bufferZone) {
            bufferZone.addEventListener('mouseenter', function() {
                // Clear any hide timer
                if (hoverTimer) {
                    clearTimeout(hoverTimer);
                    hoverTimer = null;
                }
            });
            
            bufferZone.addEventListener('mouseleave', function(e) {
                const relatedTarget = e.relatedTarget;
                const goingToMega = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-mega-menu');
                const goingToNav = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-item-wrapper');
                
                if (!goingToMega && !goingToNav) {
                    hoverTimer = setTimeout(() => {
                        if (activeMenu && !isMouseOver(activeMenu) && !isMouseOverAnyNav()) {
                            hideAllMegaMenus();
                        }
                    }, 50);
                }
            });
        }
        
        // ========== MEGA MENU EVENTS ==========
        megaMenus.forEach(menu => {
            menu.addEventListener('mouseenter', function() {
                // Clear any hide timer
                if (hoverTimer) {
                    clearTimeout(hoverTimer);
                    hoverTimer = null;
                }
            });
            
            menu.addEventListener('mouseleave', function(e) {
                const relatedTarget = e.relatedTarget;
                const goingToNav = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-item-wrapper');
                const goingToBuffer = relatedTarget && relatedTarget.closest('.mega-menu-buffer');
                
                if (!goingToNav && !goingToBuffer) {
                    hoverTimer = setTimeout(() => {
                        if (!isMouseOverAnyNav() && !isMouseOver(bufferZone)) {
                            hideAllMegaMenus();
                        }
                    }, 50);
                }
            });
        });
        
        // ========== HELPER FUNCTIONS ==========
        function isMouseOver(element) {
            if (!element) return false;
            
            // Check if mouse is within element bounds
            const rect = element.getBoundingClientRect();
            return mouseX >= rect.left && 
                   mouseX <= rect.right && 
                   mouseY >= rect.top && 
                   mouseY <= rect.bottom;
        }
        
        function isMouseOverAnyNav() {
            for (let item of navItems) {
                if (isMouseOver(item)) {
                    return true;
                }
            }
            return false;
        }
        
        // Close menus on click outside
        document.addEventListener('click', function(e) {
            const isNavItem = e.target.closest('.kot-main-header-nav-bar-item-wrapper');
            const isMegaMenu = e.target.closest('.kot-main-header-nav-bar-mega-menu');
            const isBuffer = e.target.closest('.mega-menu-buffer');
            
            if (!isNavItem && !isMegaMenu && !isBuffer) {
                hideAllMegaMenus();
            }
        });
        
        // Close menus on scroll
        window.addEventListener('scroll', function() {
            hideAllMegaMenus();
        });
        
        // Apply initial hover colors
        navItems.forEach(item => {
            const menuType = item.getAttribute('data-item');
            if (hoverColors[menuType]) {
                item.style.setProperty('--hover-color', hoverColors[menuType]);
            }
        });

        initMarquee();
    };

    // ================= MARQUEE ANIMATION =================
    function initMarquee() {
        const startMarquee = (id) => {
            const track = document.getElementById(id);
            if (!track) return;
            
            // Prevent multiple initialization
            if (track.__marqueeInitialized) return;
            
            // Check if visible/has width
            const unitWidth = track.scrollWidth;
            if (unitWidth <= 0) return; // If hidden, don't init yet, try again on resize

            track.__marqueeInitialized = true;
    
            // Disable CSS animation to avoid conflicts with JS animation
            track.style.animation = 'none';
    
            const startAnimation = () => {
                const originalHTML = track.innerHTML;
    
                // Duplicate content to ensure enough coverage for seamless looping
                track.innerHTML += originalHTML;
                
                // Ensure we have at least enough content to cover the screen width
                while (track.scrollWidth < window.innerWidth + unitWidth) {
                    track.innerHTML += originalHTML;
                }
    
                let pos = 0;
                let speed = 0.5;
    
                function animate() {
                    pos -= speed;
                    if (pos <= -unitWidth) {
                        pos = 0;
                    }
                    track.style.transform = `translateX(${pos}px)`;
                    requestAnimationFrame(animate);
                }
                animate();
            };
    
            // Ensure images are loaded before calculating width
            const images = Array.from(track.getElementsByTagName('img'));
            if (images.length === 0 || images.every(img => img.complete)) {
                startAnimation();
            } else {
                let loadedCount = 0;
                images.forEach(img => {
                    const check = () => {
                        loadedCount++;
                        if (loadedCount === images.length) startAnimation();
                    };
                    img.addEventListener('load', check);
                    img.addEventListener('error', check);
                });
            }
        };

        startMarquee('marqueeTrack');
        startMarquee('marqueeTrackMobile');

        // Retry on resize in case mobile/desktop switch changes visibility
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                startMarquee("marqueeTrack");
                startMarquee("marqueeTrackMobile");
            }, 200);
        });
    }

    // ================= LANGUAGE SELECTION =================
    document.querySelectorAll(".lang-option").forEach(option => {
        option.addEventListener("click", function(e){
            e.preventDefault();
            document.getElementById("langImg").src = this.dataset.img;
            document.getElementById("langText").innerText = this.dataset.text;
        });
    });

    // ================= SCROLL EFFECT FOR DESKTOP HEADER =================
    if (window.innerWidth >= 992) {
        const headerWrap = document.querySelector(".desktop-header-wrap");
        if (headerWrap) {
            let lastScroll = 0;
            const threshold = 80;

            window.addEventListener("scroll", () => {
                const currentScroll = window.pageYOffset;

                // SCROLL DOWN
                if (currentScroll > lastScroll && currentScroll > threshold) {
                    headerWrap.classList.add("header-hide-top", "header-shrink");
                }

                // SCROLL UP
                if (currentScroll < lastScroll) {
                    headerWrap.classList.remove("header-hide-top", "header-shrink");
                }

                // TOP REACHED
                if (currentScroll <= 5) {
                    headerWrap.classList.remove("header-hide-top", "header-shrink");
                }

                lastScroll = currentScroll;
            });
            
        }
    
    }
    
  </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <!-- <script src="../assets/js/script.js"></script> -->
      <!--Toggle Button Script-->

</body>

</html>