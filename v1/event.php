<?php
include "../admin/db/db_connect.php";

?>
<?php require '../components/header.php'; ?>  <!-- Banner Section -->
  <section class="kot-banner-section">
    <div class="container">
      <div class="kot-banner-content text-center">
        <h1 class="kot-banner-title">Event Management Center</h1>
        <h4 class="kot-banner-subtitle">
          Where ideas turn into experiences.
        </h4>

        <p class="kot-banner-text">
          The KOT Event Management Centre brings together our global workshops, launches, forums, and innovation
          gatherings under one coordinated platform. Every event hosted here is designed to connect minds, spark
          collaboration, and shape the next generation of technology, leadership, and enterprise.
        </p>
      </div>
    </div>
  </section>
  <!-- Verification Card -->
  <!-- Verification Card -->
 <section class="kot-verify-section">
  <div class="container">
    <div class="kot-verify-card">
      <form id="eventForm" method="POST">
        <input type="text" name="search" class="kot-verify-input" placeholder="Search Event" value="<?php echo isset($_POST['search']) ? htmlspecialchars($_POST['search']) : ''; ?>" />
        <button type="submit" class="kot-verify-btn hero-btn">Event Record</button>
      </form>
        <div id="suggestions" class="list-group"></div>
          <div id="liveMessage" style="margin-top:8px; color:red; font-size:14px;"></div>

    </div>
    
  </div>
</section>
  
  <section class="kot-certificate-section">
  <div class="container">
    <div class="kot-certificate-card">

      <table class="kot-certificate-table">
  <tr>
    <td class="kot-label">Event Name:</td>
    <td class="kot-value"></td>
  </tr>

  <tr>
    <td class="kot-label">Event Date:</td>
    <td class="kot-value"></td>
  </tr>

  <tr>
    <td class="kot-label">Event Time:</td>
    <td class="kot-value"></td>
  </tr>

  <tr>
    <td class="kot-label">Event Venue:</td>
    <td class="kot-value"></td>
  </tr>
</table>


    </div>
  </div>
</section>

  <!-- Verification Footer -->
         <section class="dt-visual-section">
  <picture class="dt-visual-wrapper" style="width: 90%; margin: auto; max-width: 1000px;">
    
    <!-- Desktop -->
    <source
      media="(min-width: 1024px)"
      srcset="../assets/images/news/bottom2.png"
    />

    <!-- Tablet -->
    <source
      media="(min-width: 768px)"
      srcset="../assets/images/news/bottom2.png"
    />

    <!-- Mobile -->
    <img
      src="../assets/images/news/bottom2.png"
      alt="Strategic Visual Illustration"
      class="dt-visual-image"
    />

  </picture>
       </section>
<section class="kot-footer-section">
    <div class="container">
      <div class="kot-footer-content">
        <div class="kot-footer-left">
          <!-- <img src="../assets/images/kotlogo.png  " alt="KOT Logo" /> -->
        </div>

        <div class="kot-footer-right">
          <!-- <p>
          Driving Innovation | Empowering Business <br />
          Transforming Technology
        </p> -->
        </div>
      </div>

      <div class="kot-footer-valid text-center">
        Valid Record: Verified: kot-e.com (as per Record)
      </div>
    </div>
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
const form = document.getElementById("eventForm");

form.addEventListener("submit", function (e) {
    e.preventDefault(); // ⛔ page reload rok diya

    const value = searchInput.value.trim();
    if (value === "") {
        alert("Please enter event name");
        return;
    }

    fetchEvent(value); // AJAX call
});
</script>

<script>
const searchInput = document.querySelector('[name="search"]');
const suggestionsBox = document.getElementById('suggestions');
const liveMessage = document.getElementById("liveMessage");

/* 🔹 BLOCK SPECIAL CHARACTERS */
searchInput.addEventListener("input", function () {
    const cleanValue = this.value.replace(/[^a-zA-Z0-9\s-]/g, "");

    if (this.value !== cleanValue) {
        liveMessage.innerText = "Special characters are not allowed!";
    } else {
        liveMessage.innerText = "";
    }

    this.value = cleanValue;
});

/* 🔹 SUGGESTIONS */
searchInput.addEventListener('keyup', function () {
    const value = this.value.trim();

    if (value.length < 1) {
        suggestionsBox.innerHTML = '';
        return;
    }

    fetch("/v1/subpages/ajax_event_suggestions.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "query=" + encodeURIComponent(value)
    })
    .then(res => res.json())
    .then(data => {
        suggestionsBox.innerHTML = '';
        data.forEach(item => {
            const div = document.createElement("div");
            div.classList.add("list-group-item", "list-group-item-action");
            div.textContent = item;
            div.onclick = () => {
                searchInput.value = item;
                suggestionsBox.innerHTML = '';
                fetchEvent(item);
            };
            suggestionsBox.appendChild(div);
        });
    });
});
// Fetch event details
function fetchEvent(value) {
    fetch("/v1/subpages/ajax_search_event.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "search=" + encodeURIComponent(value)
    })
    .then(res => res.json())
    .then(data => {
        const msgBox = document.getElementById("liveMessage");

        if (data.error) {
            msgBox.innerText = "❌ No record found";
            
            // Clear table values
            document.querySelectorAll(".kot-value").forEach(td => td.innerText = "");
            return;
        }

        msgBox.innerText = ""; // clear error

        document.querySelectorAll(".kot-value")[0].innerText = data.event_name;
        document.querySelectorAll(".kot-value")[1].innerText = data.event_date;
        document.querySelectorAll(".kot-value")[2].innerText = data.event_time;
        document.querySelectorAll(".kot-value")[3].innerText = data.event_venue;
    });
}
</script>

  <script>
    fetch('../components/footer.html')
      .then(res => res.text())
      .then(data => {
        document.getElementById('global-footer').innerHTML = data;
      });
  </script>
  <script>
document.addEventListener("DOMContentLoaded", () => {
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
    window.location.href = "/event-/";

  });
});
</script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="../assets/js/script.js"></script>

</body>

</html>