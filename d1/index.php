
<?php
include "../admin/db/db_connect.php";

// Fetch 3 latest published blogs
$sql = "SELECT id, blog_title, description1, blog_image 
        FROM blogs 
        WHERE blog_status = 1 
        ORDER BY created_at DESC 
        LIMIT 3";
$result = mysqli_query($con, $sql);
?>
<!-- Navbar -->
<?php require '../public/header-dm-new.php'; ?>

 <div class="home-page-banner " style="margin-top: 15%;" >
  
</div>

<div class="new-globe-section-addtion">


<section class="kot-Glance">
  <div class="container mobile-text-align-change ">
    <div class="row align-items-center">

      <!-- Left Text -->
      <div class=" col-12 col-sm-8 col-md-8 col-lg-8">
        <h1 class="kot-title">
          KOT at a<br>
          <span>Glance:</span>
        </h1>
        <p class="kot-paragraph"> Founded in <span >2018, KOT Enterprises</span> started as the vision of <span>Mr. Meeran Nasir,</span> a young boy with a dream that became a mission: to make technology easy for people, without losing their identity.</p>
        <p class="kot-paragraph" >At KOT, we believe that connecting digitally should never mean disconnecting from your culture. Our solutions empower businesses and individuals to thrive online while staying true to their roots.</p>
        <p class="kot-paragraph"><span>KOT Enterprises </span> <br> Where Culture & Technology thrive <br> side by side</p>
      </div>

    </div>
  </div>
</section>
 <!-- home-section-3 -->
   <div class="container-fluid mb-5 ">
    <div class="what-we-offer-text">
      <h2>What We Offer</h2>
      <p>KOT Enterprises was established in 2018. The idea behind its inauguration was to build a software house that not only provides the best solutions to your technological problems but also to humanize them. In this era of AI, KOT is determined to provide services that are ethically aligned. Discover the world of KOT by clicking below</p>
    </div>
   </div>
    <!-- card-section-home -->
<div class="section-card-home">
  <div class="container-fluid px-3"> <!-- add px-2 for 2% horizontal padding -->
    <div class="row justify-content-center g-4">
      <!-- card-1 -->
      <div class="col-lg-4 col-md-12  d-flex justify-content-center">
        <div class="section-card-1-main">
          <div class="section-1-card-img-1">
            <img src="../assets/images/homepage/section-3-card-1.png" alt="">
          </div>
          <div class="section-1-card-text-1">
            <h2>ENGINEERING the Future of Error-Free Software</h2>
          </div>
          <div class="section-1-card-paragraph-1">
            <p>An advanced Software Quality Assurance (SQA) and Software Quality Engineering and Control (SQEC) dedicated to your business to achieve the highest standard of software performance, reliability and security.</p>
          </div>
        </div>
      </div>
      <!-- card-2 -->
      <div class="col-lg-4 col-md-12 d-flex justify-content-center">
        <div class="section-card-1-main">
          <div class="section-1-card-img-2">
            <img src="../assets/images/homepage/section-3-card-2.png" alt="">
          </div>
          <div class="section-1-card-text-1">
            <h2>ELEVATING YOUR E-COMMERCE EXPERIENCE</h2>
          </div>
          <div class="section-1-card-paragraph-1">
            <p>An advanced e-commerce platform development service focused on building scalable, customized online stores, that drive customer satisfaction and maximize business growth.</p>
          </div>
        </div>
      </div>
      <!-- card-3 -->
      <div class="col-lg-4 col-md-12 d-flex justify-content-center">
        <div class="section-card-1-main">
          <div class="section-1-card-img-3">
            <img src="../assets/images/homepage/section-3-card-3.png" alt="">
          </div>
          <div class="section-1-card-text-1">
            <h2>SKILL DEVELOPMENT Accelerator</h2>
          </div>
          <div class="section-1-card-paragraph-1">
            <p>Episodes by KOT Enterprises is a global safe haven for founders, creators, and innovators. It accelerates startups through dedicated programs, delivers expert-led webinars, and offers insightful blogs and engaging podcasts.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  <div class="home-service-button">
  <a href="/services-/">
    See All Services<i class="bi bi-arrow-right"></i>
  </a>
</div>
<div class="container-fluid my-5 p-0">

  <!-- Row 1 : Left -->
  <div class="home-slider-row move-left mb-4">
    <div class="home-slider-heading">
      <h2>What Our Clients Say</h2>
    </div>
    <div class="home-slider-track">

      <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (4).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>

           

            <div class="home-stars">
              ★★★★★
            </div>
          </div>
        </div>
      </div>
           
      <!-- 2nd-card -->
       <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (4).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>

           

            <div class="home-stars">
              ★★★★★
            </div>
          </div>
        </div>
      </div>
      <!-- 3rd-card -->
       <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (4).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>

           

            <div class="home-stars">
              ★★★★★
            </div>
          </div>
        </div>
      </div>
      <!-- 4th-card -->
      <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (5).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>

            

            <div class="home-stars">★★★★★</div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Row 2 : Right -->
  <div class="home-slider-row move-right">
    <div class="home-slider-track">

      <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (4).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>

            

            <div class="home-stars">★★★★★</div>
          </div>
        </div>
      </div>

      <!-- 2nd -->
      <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (5).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>


            <div class="home-stars">★★★★★</div>
          </div>
        </div>
      </div>
      <!-- 3rd -->
         <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (4).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>

            

            <div class="home-stars">★★★★★</div>
          </div>
        </div>
      </div>
      <!-- 4th -->
         <div class="home-card-slider">
        <div class="home-card-content">
          <div class="home-avatar">
            <!-- <h5>What Our Client Say</h5> -->
            <img src="../assets/images/homepage/Mask group (4).png" alt="">
            <h6>Ayesha Malik</h6>
            <p>Founder, InnovaCrafts</p>
          </div>

          <div class="home-card-text">
            <div class="home-stars-1">★★★★★</div>
            <p>
             Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.
            </p>

            

            <div class="home-stars">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- end-of-new-section -->
<!-- new section-4 -->


  <!-- end-section-3  -->
</div>


 
  </div>
   <!-- card-section-home -->

      <div class="resylt-the-spark-faq">
    <div class="container mt-5">
   <div class="result-header pt-5 pb-2 ">
       <h2>Results That Speak For Themselves</h2>
   </div>
  <div class="result-header-paragraph pt-3 pb-5 ">
    <p>Our journey reflects dedication and excellence.</p>
    <p>Here’s a quick look at what we’ve accomplished.</p>
  </div>
   
  <div class="row justify-content-center">

    <!-- Box 1 -->
    <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center ">
      <div class="result-box d-flex align-items-center">
        <img src="../assets/images/homepage/ph_handshake-light-dm.png" alt="">
        <div class="result-text" style="margin-top: 10%;" >
          <h3>145+</h3>
          <p>Happy Customer</p>
        </div>
      </div>
      
    </div>
    
    <!-- Box 2 -->
    <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center border-addition ">
      <div class="result-box d-flex align-items-center">
        <img src="../assets/images/homepage/dashicons_awards-dm.png" alt="">
        <div class="result-text" style="margin-top: 10%;" >
          <h3>5+</h3>
          <p>Award Won</p>
        </div>
      </div>
    </div>

    <!-- Box 3 (tablet center) -->
    <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center ">
      <div class="result-box d-flex align-items-center">
        <img src="../assets/images/homepage/material-symbols-light_support-agent-dm.png" alt="">
        <div class="result-text" style="margin-top: 10%;" >
          <h3>352+</h3>
          <p>After Sales Support</p>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Blog Section -->
<!-- <div class="container-fluid my-5">
   <div class="blog-heading"><h2>Our Blogs</h2></div>
  <div class="row justify-content-center g-2">
     
    
    <div class="col-md-12 col-lg-4 d-flex flex-column align-items-center">

      <div class="blog-card-1-main">
        <div class="blog-card-image-1">
          <img src="../assets/images/homepage/blog-1.png" alt="">
        </div>

        <div class="blog-card-heading">
          <h2>The Human Side of Smart Tech: Why Ethics Matter in Innovation</h2>
        </div>

        <div class="blog-card-line">
          <p></p>
        </div>

        <div class="blog-card-paragraph">
          <p>
           In a world driven by algorithms and automation, ethical innovation is no longer optional it's essential. At KOT Enterprises, we believe that technology should serve people, not replace them. This blog dives into how human-centered design.
          </p>
        </div>
      </div>

      <div class="blog-outside-button">
        <a href="#">Read More<i class="bi bi-arrow-right"></i></a>
      </div>

    </div>

   
    <div class="col-md-12 col-lg-4 d-flex flex-column align-items-center">

      <div class="blog-card-1-main">
        <div class="blog-card-image-1">
          <img src="../assets/images/homepage/blog2.png" alt="">
        </div>

        <div class="blog-card-heading">
          <h2>Building Solutions That Evolve with You: Inside KOT’s Development Philosophy</h2>
        </div>

        <div class="blog-card-line">
          <p></p>
        </div>

        <div class="blog-card-paragraph">
          <p>
            At KOT Enterprises, we don’t just create software we build adaptable ecosystems designed to grow with your business. This blog offers a behind-the-scenes look at our agile development process, where flexibility, user feedback, and scalability guide.
          </p>
        </div>
      </div>

      <div class="blog-outside-button">
        <a href="#">Read More<i class="bi bi-arrow-right"></i></a>
      </div>

    </div>

    
    <div class="col-md-12 col-lg-4 d-flex flex-column align-items-center">

      <div class="blog-card-1-main">
        <div class="blog-card-image-1">
          <img src="../assets/images/homepage/blog-3.png" alt="">
        </div>

        <div class="blog-card-heading">
          <h2>Ways Smart Tech is Revolutionizing Customer Experience</h2>
        </div>

        <div class="blog-card-line">
          <p></p>
        </div>

        <div class="blog-card-paragraph">
          <p>
            Customers today expect more than just service they expect smart service. In this article, we explore how AI, automation, and intelligent platforms are transforming customer journeys. From personalized interactions to real-time support, discover five practical ways businesses.
          </p>
        </div>
      </div>

      <div class="blog-outside-button">
        <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
      </div>

    </div>

  </div>
</div> -->
<!-- Blog Section -->
<div class="container-fluid my-5">
   <div class="blog-heading"><h2>Our Blogs</h2></div>
  <div class="row justify-content-center g-2">

<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $id    = (int)$row['id'];
        $title = htmlspecialchars($row['blog_title']);
        $desc1 = htmlspecialchars($row['description1']);
        $image = "../admin/uploads/" . htmlspecialchars($row['blog_image']);
?>

    <!-- CARD -->
    <div class="col-md-12 col-lg-4 d-flex flex-column align-items-center">

      <div class="blog-card-1-main">
        <div class="blog-card-image-1">
          <a href="/blog-/?id=<?= $id ?>">
            <img src="<?= $image ?>" alt="<?= $title ?>" style="cursor:pointer; transition: transform 0.3s ease;"  onmouseover="this.style.transform='scale(1.04)'"
  onmouseout="this.style.transform='scale(1)'">
          </a>
        </div>

        <div class="blog-card-heading">
          <h2><?= $title ?></h2>
        </div>

        <div class="blog-card-line">
          <p></p>
        </div>

        <div class="blog-card-paragraph">
          <p>
           <?= strlen($desc1) > 200 ? substr($desc1,0,200).'...' : $desc1 ?>
          </p>
        </div>
      </div>

      <div class="blog-outside-button">
        <a href="/blog-/?id=<?= $id ?>">Read More <i class="bi bi-arrow-right"></i></a>
      </div>

    </div>

<?php
    }
} else {
    echo "<p>No blogs found.</p>";
}
?>
  </div>
</div>
<!-- faq-section-start -->
  <!-- faq-section-start -->
   <div class="new-addition-chatbot text-center ">
    <h2 class="home-faq-title  mb-4">
        Frequently asked questions
      </h2>
   </div>
    <div class="container">
<section class="faq-main-section">
    <div class="faq-container" id="bp-embedded-webchat">
        
    </div>
</section>
</div>
<!-- <div class="container py-5 home-faq-wrapper overflow-hidden ">
  <div class="row g-5 home-faq-row">
       <h2 class="home-faq-title home-faq-title-tablet mb-4">
        Frequently asked<br>questions
      </h2>
    
    <div class="col-12 col-sm-12 col-md-8 col-lg-6 home-left-col">
      <h2 class="home-faq-title mb-4">
        Frequently asked<br>questions
      </h2>
<div class="home-chat-card home-chat-card-mobile p-4">
  <h4 class="fw-bold mb-3">
    Still have a questions?
    <small class="fw-normal">(Let's chat)</small>
  </h4>
<div id="chatbot-response" class="chatbot-response"></div>
  <div class="mt-auto home-search-wrapper">
    <input
      type="text"
      class="home-search-input"
      placeholder="Ask or search anything"
      id="user-input"
      oninput="showSuggestions()" 
      onkeydown="handleEnter(event)" 
    >
    <ul id="suggestions-list" class="suggestions-list"></ul>
    <button id="load-more-btn" class="load-more-btn" onclick="loadMoreQuestions()" style="display: none;">Load More</button>
  </div>

  
</div>


    </div> -->

    <!-- RIGHT COLUMN -->
    <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-6 home-right-col">
      <div class="row g-2 home-faq-cards">

        <div class="col-4 col-sm-4 col-md-12 col-lg-12 home-faq-item">
          <div class="home-card-1">
            <h5 class="home-card-heading">What happens after I apply?</h5>
            <p class="mb-0 home-card-paragraph">
             The standard lorem ipsum passage has been a printer's friend for centuries. Like stock photos today, it served as a placeholder for actual content. The standard lorem ipsum passage has been a printer's friend for centuries. Like stock photos today, it served as a placeholder for actual content.The standard lorem ipsum passage has been a printer's friend for centuries. Like stock photos today, it served as a placeholder for actual content.The standard lorem ipsum passage has been a printer's friend for centuries. Like stock photos today, it served as a placeholder for actual content.
            </p>
          </div>
        </div>

        <div class="col-4 col-sm-4 col-md-12 col-lg-12 home-faq-item">
          <div class="home-card-2">
            <h5 class="home-card-heading">Still have questions?</h5>
            <p class="mb-0 home-card-paragraph">
             The standard lorem ipsum passage has been a printer's friend for centuries. Like stock photos today, it served as a placeholder for actual content. The standard lorem ipsum passage has been a printer's friend for centuries.
            </p>
          </div>
        </div>

        <div class="col-4 col-sm-4 col-md-12 col-lg-12 home-faq-item">
          <div class="home-card-3">
            <h5 class="home-card-heading">Can I work remotely?</h5>
            <p class="mb-0 home-card-paragraph">
              The standard lorem ipsum passage has been a printer's friend for centuries. Like stock photos today, it served as a placeholder for actual content. The standard lorem ipsum passage has been a printer's friend for centuries.
            </p>
          </div>
        </div>

        <div class="col-4 col-sm-4 col-md-12 col-lg-12 home-faq-item home-card-4-mobile">
          <div class="home-card-4">
            <h5 class="home-card-heading">What happens after I apply?</h5>
            <p class="mb-0 home-card-paragraph">
              The standard lorem ipsum passage has been a printer's friend for centuries. Like stock photos today, it served as a placeholder for actual content. The standard lorem ipsum passage has been a printer's friend for centuries.
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>
</div> -->
</div>
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
  fetch('../components/footer-dark.html')
    .then(res => res.text())
    .then(data => {
      document.getElementById('global-footer').innerHTML = data;
    });
</script>
 <script src="https://cdn.botpress.cloud/webchat/v3.5/inject.js"></script>
<script src="https://files.bpcontent.cloud/2026/01/13/07/20260113075304-XAN3NDV7.js" defer></script>

<script>
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');

    question.addEventListener('click', () => {
      item.classList.toggle('active');
    });
  });
</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-0rr+UB+GpY6R59+7ybpH1mh32E+mC6s7K20VHgFcyB8ooeeHhK9o3Z7cM7Xk3Eqn" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-0rr+UB+GpY6R59+7ybpH1mh32E+mC6s7K20VHgFcyB8ooeeHhK9o3Z7cM7Xk3Eqn" crossorigin="anonymous"></script> -->
 <!-- <script src="https://cdn.botpress.cloud/webchat/v3.5/inject.js"></script> -->
<!-- <script src="https://files.bpcontent.cloud/2026/01/13/07/20260113075304-XAN3NDV7.js" defer></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script> -->

  <!-- <script>

const qaData = [
  { question: "What is your name?", answer: "I am ChatBot, your virtual assistant." },
  { question: "How are you?", answer: "I am doing great, thank you for asking!" },
  { question: "What can you do?", answer: "I can help you with any questions or assist with tasks." },
  { question: "What is the weather like?", answer: "I am not sure, but you can check a weather app!" },
  { question: "Tell me a joke", answer: "Why don't skeletons fight each other? They don't have the guts!" },
  { question: "What is your favorite color?", answer: "I like blue! It's calming and peaceful." },
  { question: "Where do you live?", answer: "I live in the cloud, always ready to help!" },
  { question: "What is your purpose?", answer: "My purpose is to assist and make life easier for you!" },
  { question: "Can you help with math?", answer: "Sure! I can help solve math problems or explain concepts." },
  { question: "How can I contact you?", answer: "You can contact me here anytime!" }
];

let currentQuestionsIndex = 0; 


function showSuggestions() {
  const input = document.getElementById('user-input').value.trim();
  const suggestionsList = document.getElementById('suggestions-list');
  const loadMoreBtn = document.getElementById('load-more-btn');

  suggestionsList.innerHTML = '';
  currentQuestionsIndex = 0; 

  if (input.length > 2) {
    const filtered = qaData.filter(q => q.question.toLowerCase().includes(input.toLowerCase()));

    filtered.slice(0, 5).forEach(item => {
      const li = document.createElement('li');
      li.textContent = item.question;
      li.onclick = () => showAnswer(item.answer);
      suggestionsList.appendChild(li);
    });

    
    if (filtered.length > 5) {
      loadMoreBtn.style.display = 'block';
      currentQuestionsIndex = 5;
      loadMoreBtn.dataset.filtered = JSON.stringify(filtered);
    } else {
      loadMoreBtn.style.display = 'none';
    }
  } else {
    loadMoreBtn.style.display = 'none';
  }
}


function showAnswer(answer) {
  const resp = document.getElementById('chatbot-response');
  resp.textContent = answer;
  resp.classList.add('visible');
  clearSuggestions();
}


function clearSuggestions() {
  document.getElementById('suggestions-list').innerHTML = '';
}


function handleEnter(event) {
  if (event.key === 'Enter') {
    const input = document.getElementById('user-input').value.trim().toLowerCase();
    const match = qaData.find(q => q.question.toLowerCase() === input);

    showAnswer(match ? match.answer : "Sorry, I don't understand that. Can you ask something else?");
    document.getElementById('user-input').value = '';
  }
}


function loadMoreQuestions() {
  const suggestionsList = document.getElementById('suggestions-list');
  const loadMoreBtn = document.getElementById('load-more-btn');
  const filtered = JSON.parse(loadMoreBtn.dataset.filtered || '[]');

  filtered.slice(currentQuestionsIndex, currentQuestionsIndex + 5).forEach(item => {
    const li = document.createElement('li');
    li.textContent = item.question;
    li.onclick = () => showAnswer(item.answer);
    suggestionsList.appendChild(li);
  });

  currentQuestionsIndex += 5;
  if (currentQuestionsIndex >= filtered.length) loadMoreBtn.style.display = 'none';
}

</script> -->
<!--Toggle Button Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const t = document.getElementById("theme-toggle");
  if (!t) return;

  // Dark page => ON by HTML (checked)

  t.addEventListener("change", () => {
    if (!t.checked) {
      // Dark -> Light
      window.location.href = "/";
    }
  });
});
</script>




  </body>
  </html>