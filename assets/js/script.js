    
  // mobile offcanvas
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

  // PROJECT DROPDOWN FUNCTIONALITY
  const projectAcc = document.getElementById("projectAcc");
  const projectBtn = document.getElementById("projectBtn");
  
  if (projectBtn) {
    projectBtn.addEventListener("click", () => {
      projectAcc.classList.toggle("kot-header-open");
    });
  }

  // toggle button functionality
  document.getElementById("glowToggle")?.addEventListener("change", function () {
    console.log(this.checked ? "ON" : "OFF");
  });
//   dexstop-header-code
/* ================= CODE-2 JS (EXACT) ================= */

const nav = document.getElementById("nav");
const megaMenu = document.getElementById("megaMenu");

const img = document.getElementById("mm-img");
const text = document.getElementById("mm-text");
const heading = document.getElementById("mm-heading");
const desc = document.getElementById("mm-desc");
const left = document.getElementById("mm-left");
const right = document.getElementById("mm-right");

const content = document.querySelector(".kot-main-header-nav-bar-mega-content");

let isMegaOpen = false;

const hoverColors = {
  CORPORATE:"#28a745",
  SERVICES:"#fd7e14",
  CONSULTANCY:"#0d6efd",
  MARKETPLACE:"#6610f2",
  SPOTLIGHTS:"#20c997",
  SUPPORT:"#ffc107",
  CAREER:"#dc3545",
  CONTACT:"#6c757d"
};

document.querySelectorAll(".kot-main-header-nav-bar-item")
.forEach((item,i,arr)=>{

  item.addEventListener("mouseenter",()=>{

    document.querySelectorAll(".kot-main-header-nav-bar-item-wrapper")
      .forEach(w=>w.classList.remove("hovered","previous-hide"));

    const wrap = item.parentElement;
    wrap.classList.add("hovered");
    if(i>0) arr[i-1].parentElement.classList.add("previous-hide");

    nav.style.setProperty(
      "--hover-color",
      hoverColors[item.innerText.trim()] || "#8f4b36"
    );

    content.style.transition = "none";
    content.style.opacity = "0";
    content.style.transform = "translateY(-20px)";

    requestAnimationFrame(()=>{

      content.style.transition = ".35s ease";

      img.src = item.dataset.img;
      text.innerText = item.dataset.text;
      heading.innerText = item.dataset.heading;
      desc.innerText = item.dataset.desc;

      left.innerHTML = item.dataset.left.split(",").map(v=>`<li><a href="#">📌 ${v}</a></li>`).join("");
      right.innerHTML = item.dataset.right.split(",").map(v=>`<li><a href="#">⭐ ${v}</a></li>`).join("");

      content.style.opacity = "1";
      content.style.transform = "translateY(0)";
    });

    if(!isMegaOpen){
      megaMenu.style.display = "block";
      requestAnimationFrame(()=>megaMenu.classList.add("show"));
      isMegaOpen = true;
    }
  });
});

nav.addEventListener("mouseleave",()=>{
  document.querySelectorAll(".kot-main-header-nav-bar-item-wrapper")
    .forEach(w=>w.classList.remove("hovered","previous-hide"));

  megaMenu.classList.remove("show");
  isMegaOpen = false;

  setTimeout(()=>megaMenu.style.display="none",300);
});

// marquee js
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
          // We append the original content once; if it's still too small for the screen, we append more.
          track.innerHTML += originalHTML;
          
          // Ensure we have at least enough content to cover the screen width plus a buffer
          while (track.scrollWidth < window.innerWidth + unitWidth) {
              track.innerHTML += originalHTML;
          }
      
          let pos = 0;
          let speed = 0.5;
      
          function animate() {
            pos -= speed;
            // Reset when we have scrolled the width of the original content unit
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

    startMarquee("marqueeTrack");
    startMarquee("marqueeTrackMobile");

    // Retry on resize in case mobile/desktop switch changes visibility
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            startMarquee("marqueeTrack");
            startMarquee("marqueeTrackMobile");
        }, 200);
    });



// language selection
document.querySelectorAll(".lang-option").forEach(option => {
  option.addEventListener("click", function(e){
    e.preventDefault();

    document.getElementById("langImg").src = this.dataset.img;
    document.getElementById("langText").innerText = this.dataset.text;
  });
});





// header-smart-scrools

if (window.innerWidth >= 992) {

  const headerWrap = document.querySelector(".desktop-header-wrap");
  let lastScroll = 0;
  const threshold = 80;

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;

    // SCROLL DOWN
    if (currentScroll > lastScroll && currentScroll > threshold) {
      headerWrap.classList.add("header-hide-top","header-shrink");
    }

    // SCROLL UP
    if (currentScroll < lastScroll) {
      headerWrap.classList.remove("header-hide-top","header-shrink");
    }

    // TOP REACHED
    if (currentScroll <= 5) {
      headerWrap.classList.remove("header-hide-top","header-shrink");
    }

    lastScroll = currentScroll;
  });
}

/* ================= VIDEO SLIDER LOGIC ================= */
const startVideoSlider = (selector) => {
    const sliders = document.querySelectorAll(selector);
    sliders.forEach(slider => {
        if (!slider) return;
        if (slider.__videoSliderInitialized) return;
        slider.__videoSliderInitialized = true;

        const originalContent = slider.innerHTML;
        
        // Safety check: if no content, abort
        if (!originalContent.trim()) return;

        // Duplicate content to ensure smooth seamless looping
        // Safety Break: max 20 clones to prevent browser crash if width is 0
        let clones = 0;
        while (slider.scrollWidth < window.innerWidth * 3 && clones < 20) {
            slider.innerHTML += originalContent;
            clones++;
        }

        let pos = 0;
        let isPaused = false;
        const speed = 0.5; // Adjust speed as needed

        // Auto-scroll function
        function animate() {
            if (!isPaused) {
                pos -= speed;
                
                // Use scrollWidth / (clones + 1) to estimate one "set" of content
                // Or simply reset when we've moved a significant amount. 
                // A safe reset point is half the total width (assuming we cloned enough).
                if (Math.abs(pos) >= slider.scrollWidth / 2) {
                    pos = 0;
                }
                slider.style.transform = `translateX(${pos}px)`;
            }
            requestAnimationFrame(animate);
        }
        animate();

        // Pause on Hover (Desktop) & Touch (Mobile)
        slider.addEventListener('mouseenter', () => isPaused = true);
        slider.addEventListener('mouseleave', () => isPaused = false);
        slider.addEventListener('touchstart', () => isPaused = true);
        slider.addEventListener('touchend', () => isPaused = false);
    });
};

// Initialize video slider
window.addEventListener("load", () => {
    startVideoSlider('.videos-slider');
});
