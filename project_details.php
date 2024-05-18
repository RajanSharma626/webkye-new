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
        <div class="second__para pt__35">
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
        </div>
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
            <h2 class="t__40 pt__30"> How Kulan Is Work Process For Our Marketing Customer</h2>
          </div>
          <img src="assets/img/work_prc_bg.png" alt="" class="bg__img">
        </div> <!-- process title end-->

        <div> <!-- process list start-->
          <ul>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3"><span class="no">01</span><span>Strategy</span></h3>
              <p>Based on the insights gathered, we develop a comprehensive SEO strategy is a tailored to your
                business's unique needs and objectives.</p>
            </li>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3"><span class="no">02</span><span>Implementation</span>
              </h3>
              <p>Based on the insights gathered, we develop a comprehensive SEO strategy is a tailored to your
                business's unique needs and objectives.</p>
            </li>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3"><span class="no">03</span><span>Analysis</span></h3>
              <p>Based on the insights gathered, we develop a comprehensive SEO strategy is a tailored to your
                business's unique needs and objectives.</p>
            </li>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3"><span class="no">04</span><span>Reporting</span></h3>
              <p>Based on the insights gathered, we develop a comprehensive SEO strategy is a tailored to your
                business's unique needs and objectives.</p>
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

  <!--  start Footer -->
  <?php include ("includes/footer.php") ?>
  <!--  End Footer -->

  <!--  start Footer -->
  <?php include ("includes/foot.php") ?>
  <!--  End Footer -->
</body>

</html>