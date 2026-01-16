<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchanity- KOT</title>
    <link rel="stylesheet" href="../assets/css/styles2-dark.css">
    <link rel="stylesheet" href="../assets/css/header-dark.css">
    <link rel="stylesheet" href="../assets/css/neww-dark.css">
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


</head>

<body>
    <div id="global-header"></div>

    <section class="dt-ecom-hero">
  <div class="dt-ecom-overlay"></div>

  <div class="dt-ecom-content">
    <!-- Logo -->
    <img
      src="../assets/images/merc-dark/mlogo.png"
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
    <div class="dt-ecom-btn-group">
      <a href="contact.php" class="dt-ecom-cta-btn hero-btn">
        Contact Us
      </a>

      <a href="services.php" class="dt-ecom-cta-btn hero-btn">
        Explore Services
      </a>
    </div>

  </div>
</section>



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
          <img src="../assets/images/merc-light/icon1.png" alt="Custom E-commerce" class="img-fluid mb-2">
          <p style="font-weight: 500;">Custom E-commerce platform Development</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon2.png" alt="AI Personalization" class="img-fluid mb-2">
          <p>AI Based <br> Personalization</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon3.png" alt="Marketplace" class="img-fluid mb-2">
          <p>Integrated Market  <br>Place Solution</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon4.png" alt="Mobile & Social" class="img-fluid mb-2">
          <p>Mobile First and Social commerce Enablement</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="feature-card">
          <img src="../assets/images/merc-light/icon5.png" alt="Secure Payment" class="img-fluid mb-2">
          <p>Secure Payment & Fulfillment Ecosystem</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="solutions-wrapper">

<section class="strategic-advantages-section py-5 text-center">
  <div class="container">
    <h2 class="strategic-title mb-3">OUR STRATEGIC ADVANTAGES</h2>
    <div class="strategic-image">
  <picture>
    <!-- Desktop -->
    <source media="(min-width: 992px)" 
            srcset="../assets/images/merc-dark/panneldark.png">

    <!-- Tablet -->
    <source media="(min-width: 768px)" 
            srcset="../assets/images/merc-dark/pannel-tablet.png">

    <!-- Mobile -->
    <img src="../assets/images/merc-dark/pannel-mobile.png"
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
 <script>
    fetch('../components/header-dark.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('global-header').innerHTML = data;

    // ================= MOBILE MENU FUNCTIONALITY =================
    const body = document.body;
    const menu = document.getElementById("mobileMenu");
    const overlay = document.getElementById("menuOverlay");
    const openBtnTop = document.getElementById("openMenuBtn");
    const openBtnBottom = document.getElementById("openMenuBtnBottom");
    const closeBtn = document.getElementById("closeMenuBtn");

    function openMenu(){
        menu.classList.add("kot-header-open");
        overlay.classList.add("kot-header-show");
        body.style.overflow = "hidden";
        menu.setAttribute("aria-hidden", "false");
    }

    function closeMenu(){
        menu.classList.remove("kot-header-open");
        overlay.classList.remove("kot-header-show");
        body.style.overflow = "";
        menu.setAttribute("aria-hidden", "true");
    }

    openBtnTop?.addEventListener("click", openMenu);
    openBtnBottom?.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    document.addEventListener("keydown", (e) => {
        if(e.key === "Escape" && menu.classList.contains("kot-header-open")) closeMenu();
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
    });

    // ================= MARQUEE ANIMATION =================
    const trackk = document.getElementById("marqueeTrack");
    if (track) {
        let pos = 0;
        let speed = 0.5;
        const singleWidth = track.scrollWidth / 2;

        function animate(){
            pos -= speed;
            if(pos <= -singleWidth){
                pos = 0;
            }
            track.style.transform = `translateX(${pos}px)`;
            requestAnimationFrame(animate);
        }
        animate();
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
    <script src="../assets/js/script.js"></script>
</body>

</html>