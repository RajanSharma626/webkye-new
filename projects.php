<?php include ("includes/conn.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title>Our Portfolio | Webkye Digital Marketing Agency</title>
  <meta name="description"
    content="Discover Webkye's digital portfolio: SEO, web dev, UI/UX, graphic design, video editing, social media. Elevate your brand online!">
  <meta name="keywords" content="Webkye, digital marketing, portfolio, SEO, web development, UI/UX design, graphic design, video editing, social media marketing, brand elevation.">
  <link rel="canonical" href="https://webkye.in/portfolios">
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->


  <!--  Start Projects 1 -->
  <section class="projects_1 all_projects overflow-hidden py__130">
    <div class="container">
      <div class="title__area"> <!-- Title start-->
        <h1 class="fs-5 transparent__btn">View Our Latest Project</h1>
        <h2 class="t__40 pt__30"> Our Latest Work</h2>
      </div> <!-- Title end-->

      <div class="row mt__50">
        <?php
        // Pagination variables
        $limit = 10; // Number of projects per page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
        $offset = ($currentPage - 1) * $limit; // Offset for SQL query
        
        // Fetch projects with pagination
        $projectQuery = "SELECT * FROM `project` ORDER BY `id` DESC LIMIT $limit OFFSET $offset";
        $projectResult = mysqli_query($conn, $projectQuery);

        while ($row = mysqli_fetch_assoc($projectResult)) {
          ?>
          <div class="col-lg-6 mb-4"> <!-- card start -->
            <div class="prj__card">
              <img src="assets/img/projects/<?php echo $row['cover'] ?>" alt="<?php echo $row['alt_text'] ?>">
              <div class="card__footer">
                <div>
                  <h5 class="t__22"><?php echo $row['title'] ?></h5>
                  <p class="last"><?php echo $row['cat'] ?></p>
                </div>
                <span class="border__full"></span>
                <div class="client__name fw-bold"> <small><a href="portfolio/<?php echo $row['seo_url'] ?>">View
                      More</a></small>
                  <!-- <p></p> -->
                </div>
              </div>
            </div>
          </div> <!-- card end -->
          <?php
        }
        ?>
      </div>

      <div class="custom__pagination w-100 d-flex justify-content-center"> <!-- Pagination start -->
        <ul>
          <?php
          // Calculate total number of pages
          $totalProjectsQuery = "SELECT COUNT(*) AS total FROM `project`";
          $totalProjectsResult = mysqli_query($conn, $totalProjectsQuery);
          $totalProjectsRow = mysqli_fetch_assoc($totalProjectsResult);
          $totalPages = ceil($totalProjectsRow['total'] / $limit);

          // Display pagination links
          for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li" . ($i == $currentPage ? ' class="active-page"' : '') . "><a href='portfolio/$i'>$i</a></li>";
          }
          ?>
        </ul>
      </div> <!-- Pagination end -->
    </div>
  </section>
  <!--  End Projects 1 -->


  <!-- partner start -->
  <div class="container pb__130">
    <div class="partner">
      <div>
        <div class="  partner__wapper">
          <div class="partner__content">
            <div class="slide"><img src="assets/img/about/cmp1.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp2.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp3.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp4.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp5.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp1.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp2.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp3.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp4.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp5.svg" alt="alt" class="partner__logo"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- partner End -->

  <!-- Address start -->
  <div class="address py__130 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 com-md-6 mb-3 mb-sm-0">
          <div class="add__card">
            <div class="icon__box"> <i class="ti-comment-alt"></i> </div>
            <div>
              <p class="t__22">info.webkye@gmail.com</p>
              <!-- <p class="t__22">helloinfo@gmail.com</p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 com-md-6 mb-3 mb-sm-0">
          <div class="add__card">
            <div class="icon__box"> <i class="fa fa-map-marker"></i> </div>
            <div>
              <p class="t__22">New Delhi, India</p>
              <!-- <p class="t__22">New York, NY 101010</p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 com-md-6 mb-3 mb-sm-0">
          <div class="add__card">
            <div class="icon__box"> <i class="fa fa-whatsapp"></i> </div>
            <div>
              <p class="t__22">+91 8468027626</p>
              <!-- <p class="t__22">+34 9433 04323</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Address end -->

  <!-- Contact Start -->
  <section class="contact  pt-0 py__130">
    <div class="container">
      <div class="text-center">
        <p class="transparent__btn">Contact Us</p>
        <h2 class="t__40 pt__30">Get in Touch</h2>
      </div>
      <div class="contact__form pt__40" id="contact-form">
        <form>
          <div class="row">
            <div class="col-md-6"> <input type="text" name="name" id="name" placeholder="Your Name" required> </div>
            <div class="col-md-6"> <input type="email" name="email" id="email" placeholder="Your Email" required> </div>
            <div class="col-md-6 mb-3 mb-sm-0">
              <select name="subject" id="subject" class="py-2 h-100" required>
                <option value="" selected disabled>I'm Looking for...</option>
                <option value="Web development">Web development</option>
                <option value="UI/UX">UI/UX</option>
                <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                <option value="Graphic Designing">Graphic Designing</option>
                <option value="Video Editing">Video Editing</option>
                <option value="Content Writing">Content Writing</option>
                <option value="Email Marketing">Email Marketing</option>
                <option value="Social Media Marketing">Social Media Marketing</option>
                <option value="Social Media Optimization">Social Media Optimization</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-md-6"> <input type="number" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
            <div class="col-12"> <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" name="submit" class="common__btn"> <span>Send Message </span> <i
                  class="ti-arrow-top-right"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- Contact end -->


  <!--  start Footer -->
  <?php include ("includes/footer.php") ?>
  <!--  End Footer -->

  <!--  start Footer -->
  <?php include ("includes/foot.php") ?>
  <!--  End Footer -->

  

</body>

</html>