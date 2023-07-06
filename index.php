<?php
include("header.php");
$sql = "SELECT * FROM users";
   $result = $con->query($sql);
   $totalusers = $result->num_rows;

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to PostGT created for Fun</h1>
      <h2>This Site helps you to generate your profile with your information and stores in Database</h2>
      <a href="post.php" class="btn-get-started scrollto">Generate Post</a>


    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-center">


            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box py-5">
                <i class="bi bi-journal-richtext" style="color: #333;"></i>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalusers; ?>" class="purecounter">0</span>
                <p>Candidates</p>
              </div>
            </div>
              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="bi bi-clock"  style="color: #333;"></i>
                  <span data-purecounter-start="0" data-purecounter-end="1" class="purecounter">0</span>
                  <p>Active Users</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          
          <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container">
        

        <div class="section-title pt-5" data-aos="fade-up">
          <h2>Candidates</h2>
        </div>
        

        
          <div class="row">
            <?php  

              $sql = "SELECT * FROM users ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
              
              echo'
                <div class="col-12 col-sm-6 col-lg-3">
                  <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->

                    <div class="advisor_thumb"><img src="'. $row['Image']. '" alt="User Profile" style="object-fit: cover; height: 300px;  border-radius: 25px; padding: 5px; margin-top: -40px;">
                      <!-- Social Info-->
                      <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                      <h6>'. $row['Username']. '</h6>
                      <p class="designation">'. $row['Designation']. '</p>
                      <p class="designation">'. $row['Email']. '</p>
                      <p class="designation">+91 '. $row['Phone_num']. '</p>
                    </div>
                  </div>
                </div>';
              }}
              ?>
            <!-- Single Advisor end-->
          </div>


      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features & Tools</h2>
          <p>We Provide some set of Opensource tools that will help to preform some cool operations..</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card" style="background-image: url(assets/feature/background.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="https://www.remove.bg/">Background Remover</a></h5>
                <p class="card-text">"Background remover is a tool that eliminates the background from images, enhancing their visual appeal."</p>
                <div class="read-more"><a href="https://www.remove.bg/"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up">
            <div class="card" style="background-image: url(assets/feature/avatar.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="https://medevel.com/os-avatar-generator/">Avatar Generator</a></h5>
                <p class="card-text">"Avatar generator creates digital representations of individuals, often used in online platforms or gaming."</p>
                <div class="read-more"><a href="https://medevel.com/os-avatar-generator/"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/feature/quotegen.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="https://medevel.com/20-free-and-open-source-static-site-generators/">Quotes Generator</a></h5>
                <p class="card-text">"Quote generator generates inspirational, thought-provoking, or humorous quotes, providing a source of motivation or entertainment."</p>
                <div class="read-more"><a href="https://medevel.com/20-free-and-open-source-static-site-generators/"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/feature/content.png);">
              <div class="card-body">
                <h5 class="card-title"><a href="https://writesonic.com/chat">Content Generator</a></h5>
                <p class="card-text">"Content generator creates automated text, assisting in generating articles, product descriptions, or other written content."</p>
                <div class="read-more"><a href="https://writesonic.com/chat"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

      </div>
    </section><!-- End About Section -->

     <!-- ======= Recent Blog Posts Section ======= -->
     <section id="recent-blog-posts" class="recent-blog-posts">

<div class="container mt-5" data-aos="fade-up">

  <header class="section-header text-center">
    <h2>Blog</h2>
    <p>Recent posts form our Blog</p>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="assets/blog/metaver.png" class="img-fluid" alt=""></div>
        <span class="post-date">Metaverse</span>
        <h3 class="post-title">"Synthetic Realms: Exploring the Infinite Metaverse"</h3>
        <a href="https://www.wired.com/story/what-is-the-metaverse/" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="assets/blog/crypto.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">cryptocurrency</span>
        <h3 class="post-title">"Revolutionary Digital Gold: The Future of Cryptocurrency"</h3>
        <a href="https://www.kaspersky.com/resource-center/definitions/what-is-cryptocurrency" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="assets/blog/ai.jpeg" class="img-fluid" alt=""></div>
        <span class="post-date">Artificial Intelligence</span>
        <h3 class="post-title">"Unleashing Potential: The Power of Artificial Intelligence"</h3>
        <a href="https://cloud.google.com/learn/what-is-artificial-intelligence" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>

</div>

</section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact ">

<div class="container mt-5" data-aos="fade-up">

  <header class="section-header text-center">
    <h2>Contact</h2>
    <p>Contact Us</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>A108 Adam Street,<br>India, IN 535022</p>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>info@postgt.com<br>postgt@gmail.com</p>
          </div>
        </div>
        
      </div>

    </div>

    <div class="col-lg-6">
      <form action="forms/contact.php" method="post" class="php-email-form">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Postgen</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>