<?php
include ("includes/conn.php");

if (isset($_GET['blog']) && $_GET['blog'] != '') {
  $blogUrl = mysqli_real_escape_string($conn, $_GET['blog']);
  $sqlcheck = mysqli_query($conn, "SELECT * FROM `blogs` WHERE `seo_url` = '$blogUrl'");
  if (mysqli_num_rows($sqlcheck) > 0) {
    $blogDetail = mysqli_fetch_assoc($sqlcheck);
  } else {
    header("Location: /blogs");
    die();
  }

} else {
  header("Location: /blogs");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title><?php echo $blogDetail['title'] ?></title>
  <meta name="description" content="<?php echo $blogDetail['meta_desc'] ?>">
  <meta name="keywords" content="<?php echo $blogDetail['meta_keywords'] ?>">
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->

  <!-- Blog Details -->
  <section class="blog__details py__130">
    <div class="wapper">
      <div class="container">
        <div class="first__para">
          <img src="assets/img/blogs/<?php echo $blogDetail['banner'] ?>" alt="" class="w-100 thumb__img">
          <ul class="d-flex align-items-center gap-4 pt__40">
            <li> <i class="fa fa-user"></i> by Webkye</li>
            <!-- <li> <i class="fa fa-mail-reply"></i> Comments 06</li> -->
            <li> <i class="fa fa-calendar"></i> <?php echo date('d F, Y', strtotime($blogDetail['timestamp'])); ?></li>
          </ul>
          <h2 class="t__40 pt__30"><?php echo $blogDetail['title'] ?></h2>

          <div class="blog_part">
            <?php echo $blogDetail['blog'] ?>
          </div>
        </div>
      </div>
    </div>

    <div> <!-- shap start-->
      <img src="assets/icons/rat_agal.png" alt="" class="rat__shap">
      <img src="assets/icons/dots.png" alt="" class="dots__shap">
    </div> <!-- shap end-->
  </section>
  <!-- Blog Details -->

  <!-- comments start -->
  <!-- <section class="comments pb__130">
    <div class="container">
      <h1 class="t__40">
        Comments
        <span>02</span>
      </h1>

      <div class="single__comment mt-5" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"
        data-aos-duration="1000">
        <div class="main__comment">
          <div class="d-flex justify-content-between align-items-center">
            <div class="user">
              <img src="assets/img/blogs/comt-1.png" alt="">
              <div>
                <h5 class="t__22">John Smith</h5>
                <p>Graphic Designer</p>
              </div>
            </div>
            <button class="reply">Reply</button>
          </div>
          <p class="text">
            Transfer details Choose the amount you want to send abroad,
            select how your receiver wants to get the money, and lastly,
            how you want to pay. You will always see our fees upfront,
          </p>
        </div>
        <span class="border__full"></span>
        <div class="reply__comment">
          <div class="d-flex justify-content-between align-items-center">
            <div class="user">
              <img src="assets/img/blogs/comt-2.png" alt="">
              <div>
                <h5 class="t__22">John Smith</h5>
                <p>Graphic Designer</p>
              </div>
            </div>
          </div>
          <p class="text">
            Transfer details Choose the amount you want to send abroad,
            select how your receiver wants to get the money, and lastly,
            how you want to pay. You will always see our fees upfront,
          </p>
        </div>
      </div>
      <div class="single__comment" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
        <div class="main__comment">
          <div class="d-flex justify-content-between align-items-center">
            <div class="user">
              <img src="assets/img/blogs/comt-2.png" alt="">
              <div>
                <h5 class="t__22">John Smith</h5>
                <p>Graphic Designer</p>
              </div>
            </div>
            <button class="reply">Reply</button>
          </div>
          <p class="text">
            Transfer details Choose the amount you want to send abroad,
            select how your receiver wants to get the money, and lastly,
            how you want to pay. You will always see our fees upfront,
          </p>
        </div>
      </div>
    </div>
  </section> -->
  <!-- comments end -->

  <!-- Relplay filed start -->
  <!-- Contact Start -->
  <!-- <section class=" replay pb__130">
    <div class="container">
      <h2 class="t__40">Leave A Reply</h2>

      <div class="contact ">
        <div class="contact__form pt__40">
          <form>
            <div class="row">
              <div class="col-md-6"> <input type="text" placeholder="Your Name"> </div>
              <div class="col-md-6"> <input type="email" placeholder="Your Email"> </div>

              <div class="col-12"> <textarea name="message" placeholder="Your Message"></textarea> </div>
              <div> <button class="common__btn"> <span>Send Your Message</span> <i class="ti-arrow-top-right"></i>
                </button> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Contact end -->
  <!-- Relplay filed end -->

  <!--  Start Blog -->
  <section class="blogs py__130" id="blogs">
    <div class="container">
      <!-- Title Start -->
      <div class="d-lg-flex justify-content-between align-items-center">
        <div class="title__area">
          <div class="transparent__btn">More Latest Blogs</div>
          <!-- <h2 class="t__40 pt__30">
            Read Our Insights and Ideas
          </h2> -->
        </div>
        <div class="mt-4 mt-lg-0">
          <a href="blogs" class="common__btn_yellow">
            Read All <i class="ti-arrow-top-right"></i></a>
        </div>
      </div>
      <!-- Title End -->

      <div class="wapper mt__50">
        <?php
        $blog = mysqli_query($conn, "SELECT * FROM `blogs` ORDER BY `timestamp` DESC  LIMIT 3");

        while ($row = mysqli_fetch_assoc($blog)) {
          ?>
          <div class="blg__card">
            <!-- Card 1 start-->
            <div class="card__header">
              <ul class="d-flex align-items-center gap-4">
                <!-- <li><i class="fa fa-user"></i> Admin</li> -->
                <li><i class="fa fa-calendar"></i> <?php
                $dateString = $row['timestamp'];
                $timestamp = strtotime($dateString);
                $formattedDate = date("F j, Y", $timestamp);

                echo $formattedDate;
                ?></li>
              </ul>
              <h3 class="t__22">
                <a href="#"><?php echo $row['short_desc'] ?></a>
              </h3>
            </div>
            <img src="assets/img/blogs/<?php echo $row['cover'] ?>" alt="<?php echo $row['cover_alt_text'] ?>"
              class="w-100" />
            <div class="card__footer">
              <p>
                <?php echo $row['title'] ?>
              </p>
              <div>
                <a href="blog/<?php echo $row['seo_url'] ?>" class="">
                  More Details <i class="ti-arrow-top-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Card 1 end-->
        <?php } ?>
      </div>
    </div>
    <div>
      <!--shap start-->
      <img src="assets/icons/sun_half.png" alt="" class="sun__shap" data-aos="fade-down" data-aos-delay="100"
        data-aos-offset="0" data-aos-duration="1000" />
    </div>
    <!--shap end-->
  </section>
  <!--  End Blog -->

  <!--  start Footer -->
  <?php include ("includes/footer.php") ?>
  <!--  End Footer -->

  <!--  start Footer -->
  <?php include ("includes/foot.php") ?>
  <!--  End Footer -->
</body>

<!-- Mirrored from www.4damstheme.com/html/kulan/blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Apr 2024 16:01:46 GMT -->

</html>