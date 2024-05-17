<?php
include ("includes/conn.php");

if (isset($_GET['service']) && $_GET['service'] != '') {
  $serviceUrl = mysqli_real_escape_string($conn, $_GET['service']);
  $sqlcheck = mysqli_query($conn, "SELECT * FROM `services` WHERE `seo_url` = '$serviceUrl'");
  if (mysqli_num_rows($sqlcheck) > 0) {
    $serviceDetail = mysqli_fetch_assoc($sqlcheck);
  } else {
    header("Location: /services");
    die();
  }

} else {
  header("Location: /services");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title>Webkye <?php echo $serviceDetail['heading'] ?> Service </title>
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->

  <!--  start service details -->

  <section class="service__details pt__130">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-lg-0 order-1 mt-4 mt-lg-0"> <!-- side bar start -->
          <div class="ser__sidebar">
            <div class="more__service">
              <h3 class="t__22">More Services</h3>
              <ul>
                <?php
                $servicesList = mysqli_query($conn, "SELECT * FROM `services`");
                $sno = 1;
                while ($row = mysqli_fetch_assoc($servicesList)) {
                  if ($row['seo_url'] != $_GET['service']) {
                    ?>
                    <li><a href="service/<?php echo $row['seo_url'] ?>"><?php echo $row['heading'] ?></a></li>
                  <?php }
                } ?>
              </ul>
            </div>
            <div class="help">
              <h3 class="t__22">Need Your Help?</h3>
              <ul>
                <li> <i class="ti-comment-alt"></i>
                  <p>info@webkye.in</p>
                </li>
                <li> <i class="fa fa-whatsapp"></i>
                  <p>+91 8468027626</p>
                </li>
                <li> <i class="fa fa-map-marker"></i>
                  <p>New Delhi, India</p>
                </li>
              </ul>
            </div>
          </div>
        </div> <!-- side bar end -->
        <div class="col-lg-9"> <!-- service article start -->
          <img src="assets/img/services/<?php echo $serviceDetail['img'] ?>" alt="" class="w-100 thumb__img">
          <div class="first__para pt__60">
            <p class="transparent__btn pt__40">Service Details</p>
            <h2 class="t__40 pt__30" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0"
              data-aos-duration="1000">
              <?php echo $serviceDetail['heading'] ?>
            </h2>
            <div class="pt__35 text-light">
            <?php echo $serviceDetail['detail'] ?>
            </div>
          </div>
          <div class="second__para pt__60">
            <div class="d-flex justify-content-between">
              <div>
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="icon__box"><img src="assets/img/about/doller.png" alt="alt"></div>
                  <h5 class="t__22">Experience and Expertise</h5>
                </div>
              </div>
              <div class="">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="icon__box"><img src="assets/img/about/profile.png" alt="alt"> </div>
                  <h5 class="t__22">Customized Solutions</h5>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- service article end -->
      </div>
    </div>
    <div> <!-- shap start-->
      <img src="assets/icons/dots.png" alt="" class="dots__shap">
      <img src="assets/icons/rat_agal.png" alt="" class="rat__shap">
    </div> <!-- shap end-->
  </section>
  <!--  End service details -->


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
              <h3 class="t__22 d-flex align-items-center gap-3"><span class="no">02</span><span>Strategy</span></h3>
              <p>Based on the insights gathered, we develop a comprehensive SEO strategy is a tailored to your
                business's unique needs and objectives.</p>
            </li>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3"><span class="no">03</span><span>Strategy</span></h3>
              <p>Based on the insights gathered, we develop a comprehensive SEO strategy is a tailored to your
                business's unique needs and objectives.</p>
            </li>
            <li>
              <h3 class="t__22 d-flex align-items-center gap-3"><span class="no">04</span><span>Strategy</span></h3>
              <p>Based on the insights gathered, we develop a comprehensive SEO strategy is a tailored to your
                business's unique needs and objectives.</p>
            </li>
          </ul>
        </div> <!-- process list End-->

      </div>
    </div>

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