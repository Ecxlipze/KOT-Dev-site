<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/cardslight/fav.png">
   <link rel="stylesheet" href="../assets/css/style-dark.css">
   <link rel="stylesheet" href="../assets/css/header-dark.css">
   <link rel="stylesheet" href="../assets/css/neww-dark.css">
   <link rel="stylesheet" href="../assets/css/responsive-dm.css">
   >
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/cardslight/fav.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

  <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Google Font: Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style>
  .contact-item {
  text-align: center;
  padding: 18px;
  border-radius: 12px;
  transition: all 0.3s ease;
}

.contact-item:hover {
  background: rgba(255, 255, 255, 0.08);
  transform: translateY(-4px);
}

.icon-img {
  width: 45px;
  margin-bottom: 10px;
  transition: transform 0.3s ease;
}

.contact-item:hover .icon-img {
  transform: scale(1.1);
}

.contact-item h6 {
  font-weight: 600;
  margin-bottom: 5px;
}

.contact-item p {
  margin: 0;
}

.contact-item a {
  text-decoration: none;
  color: inherit;
  transition: color 0.3s ease;
}

.contact-item:hover a {
  color: #ffffff; /* Bootstrap primary */
}
.form-control:-webkit-autofill,
.form-control:-webkit-autofill:hover,
.form-control:-webkit-autofill:focus {
  -webkit-box-shadow: 0 0 0 1000px #000000 inset !important;
  -webkit-text-fill-color: #ffffff !important;
  caret-color: #ffffff; /* cursor white */
  transition: background-color 9999s ease-in-out 0s;
}

</style>
</head>
<body>

  <div id="global-header"></div>

<!-- Contact Banner -->
<section class="contact-hero d-flex align-items-center justify-content-center">
  <h1 class="contact-hero-title" style="color: white; font-weight: 700; font-size: 52px;">CONTACT US</h1>
</section>

<section class="contact-wrapper" style="opacity: 80%;">
  <div class="container">
    <div class="row g-4">

      <!-- Left: Form -->
      <div class="col-lg-6">
        <div class="contact-card">
          <h3 class="mb-3">Get In Touch</h3>
          <hr style=" opacity: 100% !important;">

            <form method="POST" action="successfully.php" id="contactForm">
  <div class="mb-4">
  <label>Name</label>
  <input type="text" name="name" class="form-control" placeholder="Enter your full name" style="border: 1px solid #ffffff; margin-top: 3px; color: white;">
  <small id="nameError" style="color:red; display:none; font-size:12px;">Only letters and spaces allowed</small>
</div>

<div class="mb-4">
  <label>Email Address</label>
  <input type="email" name="email" class="form-control" placeholder="Enter your email address" style="border: 1px solid #ffffff; margin-top: 3px;">
  <small id="emailError" style="color:red; display:none; font-size:12px;">Enter a valid Email address!</small>
</div>

<div class="mb-4">
  <label>Subject</label>
  <input type="text" name="subject" class="form-control" placeholder="Subject of your message" style="border: 1px solid #ffffff; margin-top: 3px;">
  <small id="subjectError" style="color:red; display:none; font-size:12px;">Only letters and spaces allowed (max 50)</small>
</div>


  <div class="mb-4">
    <label>Details</label>
    <textarea rows="5" name="message" class="form-control" placeholder="Write your message here (max 500 characters)" style="border: 1px solid #ffffff; margin-top: 3px; resize: none; background-color: #000000 !important; "></textarea>
   <small id="messageCount" style="float:right; font-size:12px; color:#ffffff;">0/500</small>
  </div>

  <button type="submit" class="btn hero-btn w-100" style="color: white;">Submit</button>
</form>

        </div>
      </div>

      <!-- Right: Info -->
      <div class="col-lg-6">
        <div class="contact-card">
          <p class="mb-4">
          At KOT Enterprises, we’re here to support your business with the right technology, guidance, and human-centered innovation. Whether you have a project idea, a question, or need support — our team is ready to assist you.</p>

          <div class="row text-center mb-4">
         <div class="col-6 mb-3 contact-item">
  <img src="../assets/images/contact-dark/contact-1.png" class="icon-img" alt="Phone">
  <h6>Phone Number</h6>
  <p>
    <a href="tel:+16317781880">+1 (631) 778-1880</a>
  </p>
</div>

<div class="col-6 mb-3 contact-item">
  <img src="../assets/images/contact-dark/contact-2.png" class="icon-img" alt="Email">
  <h6>Email Address</h6>
  <p>
    <a href="mailto:info@kotenterprises-e.com">info@kotenterprises-e.com</a>
  </p>
</div>

<div class="col-6 contact-item">
  <img src="../assets/images/contact-dark/contact-3.png" class="icon-img" alt="Whatsapp">
  <h6>WhatsApp</h6>
  <p>
    <a href="https://wa.me/16317781880" target="_blank">
      +1 (631) 778-1880
    </a>
  </p>
</div>

<div class="col-6 contact-item">
  <img src="../assets/images/contact-dark/contact-4.png" class="icon-img" alt="Office">
  <h6>Office</h6>
  <p>Gulberg, Lahore</p>
</div>

          </div>

          <!-- Map -->
          <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d867.8183492072155!2d74.35431769379382!3d31.511140042024724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190453adedfb17%3A0x57e0852bc0b25e7c!2sKickstart%20%7C%20Gulberg%2C%2058-A2!5e0!3m2!1sen!2s!4v1769067376199!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- <section class="contact-cta text-center">
  <div class="container">
    <h2 style="font-weight:700;">Get Yourself published</h2>
    <a href="#" class="btn hero-btn mt-3" style="color: white;">
      Subscribe to our newsletter →
    </a>
  </div>
</section> -->
    <div id="global-footer"></div>
           <!-- <button id="goTopBtn" title="Go to top">↑</button> -->

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
    fetch('../components/header-dark.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('global-header').innerHTML = data;
    initHeader(); // run AFTER header is injected
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
      window.location.href = "/contact-";
    } else {
      // Dark → Light
      localStorage.setItem("theme", "light");
      window.location.href = "/contact";
    }

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
    }

    // ================= MARQUEE ANIMATION =================
    function initMarquee() {
        const track = document.getElementById("marqueeTrack");
        if (!track) return;
        
        // Prevent multiple initialization
        if (track.__marqueeInitialized) return;
        track.__marqueeInitialized = true;

        // Disable CSS animation to avoid conflicts with JS animation
        track.style.animation = 'none';

        const startAnimation = () => {
            const unitWidth = track.scrollWidth;
            if (unitWidth <= 0) return; // Safety check
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
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
const contactForm = document.getElementById('contactForm');
const nameInput = contactForm.name;
const emailInput = contactForm.email;
const subjectInput = contactForm.subject;
const messageInput = contactForm.message;

const nameError = document.getElementById('nameError');
const emailError = document.getElementById('emailError');
const subjectError = document.getElementById('subjectError');
const messageCount = document.getElementById('messageCount');

// ===== Patterns =====
const namePattern = /^[A-Za-z\s]*$/;                   // Only letters and spaces
const subjectPattern = /^[A-Za-z\s]{0,50}$/;           // Only letters and spaces, max 50
const messagePattern = /^[A-Za-z0-9\s]*$/;             // Letters, numbers, spaces, max 500
const emailPattern = /^[a-zA-Z0-9._%+-]{1,60}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Valid email max 60

// ===== Live validation =====
// ===== NAME =====
nameInput.addEventListener('input', () => {
    // Remove invalid characters
    nameInput.value = nameInput.value.replace(/[^A-Za-z\s]/g,'');

    // Limit to 60 characters
    if (nameInput.value.length > 60) {
        nameInput.value = nameInput.value.substring(0, 60);
    }

    // Show error if invalid
    if (!namePattern.test(nameInput.value)) {
        nameError.style.display = "block";
    } else {
        nameError.style.display = "none";
    }
});
emailInput.addEventListener('input', () => {
    // Limit to 60 characters
    if (emailInput.value.length > 60) {
        emailInput.value = emailInput.value.substring(0, 60);
    }

    if (!emailPattern.test(emailInput.value) && emailInput.value.length > 0) {
        emailError.style.display = "block";
    } else {
        emailError.style.display = "none";
    }
});

subjectInput.addEventListener('input', () => {
    if (!subjectPattern.test(subjectInput.value)) {
        subjectError.style.display = "block";
        subjectInput.value = subjectInput.value.replace(/[^A-Za-z\s]/g,''); // remove invalid chars
    } else {
        subjectError.style.display = "none";
    }

    // Limit subject to 50 characters
    if (subjectInput.value.length > 50) {
        subjectInput.value = subjectInput.value.substring(0, 50);
    }
});

messageInput.addEventListener('input', () => {
    // Remove any invalid characters immediately
    messageInput.value = messageInput.value.replace(/[^A-Za-z0-9\s]/g,'');

    // Limit to 500 characters
    if (messageInput.value.length > 500) {
        messageInput.value = messageInput.value.substring(0, 500);
    }

    messageCount.textContent = `${messageInput.value.length}/500`;
});

// ===== Form submission =====
contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    if (
        nameInput.value.trim() === "" ||
        emailInput.value.trim() === "" ||
        subjectInput.value.trim() === "" ||
        messageInput.value.trim() === ""
    ) {
        showToast("Please fill all fields correctly!", "error");
        return;
    }

    if (!emailPattern.test(emailInput.value.trim())) {
        showToast("Enter a valid email!", "error");
        return;
    }

    const formData = new FormData(contactForm);

    fetch('/d1/successfully.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        showToast(data, "success");
        contactForm.reset();
        messageCount.textContent = "0/500";
    })
    .catch(error => {
        showToast("Error sending form!", "error");
        console.error(error);
    });
});

// ===== Toast function without X button =====
function showToast(message, type="success") {
    const bgColor = type === "success"
        ? "linear-gradient(to right, #00b09b, #96c93d)"
        : "linear-gradient(to right, #ff6b6b, #ff4757)";
    const icon = type === "success" ? "✔️ " : "❌ ";

    Toastify({
        text: icon + message,
        duration: 3000,        // visible time
        gravity: "top",
        position: "right",
        close: false,          // ❌ no X button
        style: {
            background: bgColor,
            color: "#fff",
            fontWeight: "600",
            borderRadius: "8px",
            padding: "10px 20px"
        }
    }).showToast();
}
</script>
<script>
  fetch('../components/footer-dark.html')
    .then(res => res.text())
    .then(data => {
      document.getElementById('global-footer').innerHTML = data;
    });
</script>


</body>
</html>
