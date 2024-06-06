<?php
include ("includes/conn.php");

if (isset($_GET['project']) && $_GET['project'] != '') {
  $projectUrl = mysqli_real_escape_string($conn, $_GET['project']);
  $sqlcheck = mysqli_query($conn, "SELECT * FROM `project` WHERE `seo_url` = '$projectUrl'");
  if (mysqli_num_rows($sqlcheck) > 0) {
    $projectDetail = mysqli_fetch_assoc($sqlcheck);
  } else {
    header("Location: /portfolios");
    die();
  }

} else {
  header("Location: /portfolios");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title><?php echo $projectDetail['meta_title'] ?> | Webkye</title>
  <meta name="description" content="<?php echo $projectDetail['meta_desc'] ?>">
  <meta name="keywords" content="<?php echo $projectDetail['meta_keywords'] ?>">
  <link rel="canonical" href="https://webkye.in/<?php echo $_GET['project'] ?>">
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->

  <!--  project details start  -->
  <section class="project__details py__130">
    <div class="wapper">
      <div class="container">
        <div class="first__para">
          <div class="position-relative">
            <img src="assets/img/projects/<?php echo $projectDetail['banner']; ?>" alt="" class="w-100 thumb__img">
            <div class="info">
              <h3 class="t__22">Information</h3>
              <ul class="pt__30">
                <li>
                  <p>Client :</p> <span><?php echo $projectDetail['client'] ?></span>
                </li>
                <li>
                  <p>Date :</p> <span><?php echo date('d F, Y', strtotime($projectDetail['date'])); ?></span>
                </li>
                <li>
                  <p>Service :</p> <span><?php
                  if ($projectDetail['cat'] == 'UI/UX') {
                    echo "UI/UX";
                  } elseif ($projectDetail['cat'] == 'website') {
                    echo "Website Design & Development";
                  } elseif ($projectDetail['cat'] == 'graphic') {
                    echo "Graphic Designing";
                  } elseif ($projectDetail['cat'] == 'Videos') {
                    echo "Video Editing";
                  }
                  ?></span>
                </li>
                <?php if ($projectDetail['url'] != '') { ?>
                  <li>
                    <p>URL :</p> <span><a href="<?php echo $projectDetail['url']; ?>">Visit Link</a></span>
                  </li>
                <?php } ?>
                <!-- <li>
                  <p>Location:</p> <span>Wehner Tunnel 6/8 <br> Washington, D.C</span>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="pt__40">
            <p class="transparent__btn">Project Details</p>
            <h4 class="t__40 pt__30"><?php echo $projectDetail['title'] ?></h4>
          </div>

          <div class="pt__35 text-white">
            <?php echo $projectDetail['long_desc'] ?>
          </div>
        </div>
        <!-- <div class="second__para pt__35">
          <h3 class="t__22">Optimizing Solution</h3>
          <ul>
            <li>
              <img src="assets/icons/mark3.png" alt="">
              <p>Allow customers to choose from various payment methods and offer flexible billing options to
                accommodate their financial preferences.</p>
            </li>
            <li>
              <img src="assets/icons/mark3.png" alt="">
              <p>Deliver excellent customer service through various channels, including phone, email, live chat, and
                in-person assistance at physical locations.</p>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
    <div> <!-- shap start-->
      <img src="assets/icons/rat_agal.png" alt="" class="rat__shap">
      <img src="assets/icons/dots.png" alt="" class="dots__shap">
    </div> <!-- shap end-->
  </section>
  <!--  project details end  -->

  <!-- Start Work Process -->
  <section class="work_process work_process_3  py__130">
    <div class="container">
      <div class="wapper">
        <div> <!-- process title start-->
          <div class="title__area">
            <div class="transparent__btn">How It Work</div>
            <h2 class="t__40 pt__30">How Our Work Process For Our Marketing Customer</h2>
          </div>
          <img src="assets/img/work_prc_bg.png" alt="" class="bg__img">
        </div> <!-- process title end-->

        <div> <!-- process list start-->
          <ul>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3">
                <span class="no">01</span><span>Planning </span>
              </h3>
              <p>
                We start with a detailed discussion to understand your goals and requirements,
                followed by crafting a customized plan tailored to your needs.
              </p>
            </li>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3">
                <span class="no">02</span><span>Execution</span>
              </h3>
              <p>
                Our team implements the planned strategies across digital marketing, web development, design,
                and SEO, ensuring a seamless and efficient process.
              </p>
            </li>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3">
                <span class="no">03</span><span>Delivery</span>
              </h3>
              <p>
                Upon completion and your approval, we finalize the project and deliver the
                finished work, ready to help you achieve your digital goals.
              </p>
            </li>
          </ul>
        </div> <!-- process list End-->

      </div>
    </div>

    <div> <!-- shap start-->
      <img src="assets/icons/dots.png" alt="" class="dots__shap">
    </div> <!-- shap end-->
  </section>
  <!-- End Work Process -->

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
  <section class="contact  py__130 pt-0">
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