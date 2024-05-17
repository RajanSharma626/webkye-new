<?php include ("includes/conn.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title>Our Blogs | Webkye</title>
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->

  <!--  Start blog details  -->
  <section class="blogs py__130">
    <div class="title__area m-auto text-center"> <!-- Title start-->
      <div class="transparent__btn">Our Blogs & Articles</div>
      <h2 class="t__40 pt__30"> Read our Insights and Ideas</h2>
    </div> <!-- Title end-->
    <div class="container">
      <div class="wapper mt__50">
        <?php
        // Pagination variables
        $limit = 9; // Number of blogs per page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
        $offset = ($currentPage - 1) * $limit; // Offset for SQL query
        
        // Fetch blogs with pagination
        $blogQuery = "SELECT * FROM `blogs` ORDER BY `timestamp` DESC LIMIT $limit OFFSET $offset";
        $blogResult = mysqli_query($conn, $blogQuery);

        while ($row = mysqli_fetch_assoc($blogResult)) {
          ?>
          <div class="blg__card"> <!-- Card start -->
            <div class="card__header">
              <ul class="d-flex align-items-center gap-4">
                <li> <i class="fa fa-calendar"></i> <?php echo date('d F, Y', strtotime($row['timestamp'])); ?></li>
              </ul>
              <h3 class="t__22"> <a href="#"><?php echo $row['title']; ?></a> </h3>
            </div>
            <img src="assets/img/blogs/<?php echo $row['cover']; ?>" alt="<?php echo $row['cover_alt_text'] ?>"
              class="w-100">
            <div class="card__footer">
              <p><?php echo $row['short_desc']; ?></p>
              <div class="pt__35"> <a href="#" class=""> More Details <i class="ti-arrow-top-right"></i></a></div>
            </div>
          </div> <!-- Card end -->
          <?php
        }
        ?>
      </div>

      <div class="custom__pagination w-100 d-flex justify-content-center"> <!-- Pagination start -->
        <ul>
          <?php
          // Calculate total number of pages
          $totalBlogsQuery = "SELECT COUNT(*) AS total FROM `blogs`";
          $totalBlogsResult = mysqli_query($conn, $totalBlogsQuery);
          $totalBlogsRow = mysqli_fetch_assoc($totalBlogsResult);
          $totalPages = ceil($totalBlogsRow['total'] / $limit);

          // Display pagination links
          for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li" . ($i == $currentPage ? ' class="active-page"' : '') . "><a href='blogs/$i'>$i</a></li>";
          }
          ?>
        </ul>
      </div> <!-- Pagination end -->
    </div>
  </section>

  <!--  End blog details  -->



  <!--  start Footer -->
  <footer class="footer footer_2 pt__130">
    <div class="container">

      <!-- Logo and socal icon -->
      <div class="row ">
        <div class="col-12 footer__lo_co">
          <div class="d-flex justify-content-center">
            <a href="href.html" class="d-flex align-items-center gap-2 footer__logo"> <img src="assets/img/logo.png"
                alt="alt">
              <h5>Kulan</h5>
            </a>
          </div>
          <span class="border__full"></span>
          <ul class="d-flex justify-content-center gap-3 footer__socal">
            <li> <a href="href.html"> <i class="fa fa-facebook-f"></i> </a> </li>
            <li> <a href="href.html"> <i class="fa fa-pinterest-p"></i> </a> </li>
            <li> <a href="href.html"> <i class="fa fa-instagram"></i> </a> </li>
            <li> <a href="href.html"> <i class="fa fa-twitter"></i> </a> </li>
          </ul>
        </div>
      </div>
      <!-- Logo and socal icon -->

      <hr class="footer__border"> <!--  border line -->

      <!--  Info -->
      <div class=" footer__info">
        <div class="box">
          <div class="footer__info_subscribe">
            <h3 class="footer__info_group t__22">Subscribe Now</h3>
            <p> Digital marketing agencies run paid advertising campaigns for themselves. </p>
            <input type="email" placeholder="Enter your email">
            <button class="common__btn"> Subscribe Now <i class="ti-arrow-top-right"></i> </button>
          </div>
        </div>
        <div class="box">
          <div>
            <h3 class="footer__info_group t__22">About Us</h3>
            <ul>
              <li><a href="href.html">Contact Us</a></li>
              <li><a href="href.html">About Us</a></li>
              <li> <a href="href.html">Terms & Condition</a> </li>
              <li> <a href="href.html">Privacy Policy</a> </li>
              <li> <a href="href.html">Make a Payment</a> </li>
            </ul>
          </div>
        </div>

        <div class="box">
          <div>
            <h3 class="footer__info_group t__22">Our Contact</h3>
            <ul class="footer__info_contact">
              <li> <i class="ti-comment-alt"></i>
                <p>kulan.info@gmail.com</p>
              </li>
              <li> <i class="fa fa-phone"></i>
                <p>+48 93939 0239</p>
              </li>
              <li> <i class="fa fa-phone"></i>
                <p>+84 83939 0237</p>
              </li>
              <li> <i class="fa fa-calendar"></i>
                <p>Mon - Fri 10:00 - 18:00</p>
              </li>
              <li> <i class="fa fa-map-marker"></i>
                <p>Jilons, TP06/90 NY, USA</p>
              </li>
            </ul>
          </div>
        </div>

        <div class="box">
          <div>
            <h3 class="footer__info_group t__22">Our Services</h3>
            <ul>
              <li><a href="href.html">Marketing Strategy</a></li>
              <li><a href="href.html">Media Marketing</a></li>
              <li><a href="href.html">Email Marketing</a></li>
              <li><a href="href.html">Optimizing Solution</a></li>
              <li><a href="href.html">SEO Marketing</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--  Info -->
      <div class="row footer__copyright">
        <div class="col-12">
          <hr class="footer__border">
          <p class="text-center"> © Copyright 2024 All Rights Reserved by <a href="href.html">4damsthemes</a> </p>
        </div>
      </div>
    </div>

    <div> <!--  shap start -->
      <img src="assets/icons/dots.png" alt="" class="dots__shap slide_top_down">
    </div> <!--  shap end -->
  </footer>
  <!--  End Footer -->

  <!--  Link jquery Js -->
  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <!--  Link Bootstrap Js -->
  <script src="assets/bootstrap/bootstrap.min.js"></script>

  <!--  Link custom Js -->
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from www.4damstheme.com/html/kulan/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Apr 2024 16:01:44 GMT -->

</html>