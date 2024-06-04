<?php
include ("includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title>Services | Webkye</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->

  <!--  Start Services 1 -->
  <section class="services_1 pt-5" id="services">
    <div class="container position-relative">
      <!-- Title start -->
      <div class="text-center title__area">
        <p class="transparent__btn">Our Services</p>
        <h2 class="t__40 pt__30"> What Services We Provide For Your Business </h2>
      </div>
      <!-- Title end -->
      <div class="wapper mt__50">
        <?php
        $services = mysqli_query($conn, "SELECT * FROM `services`");
        $sno = 1;
        while ($row = mysqli_fetch_assoc($services)) {
          ?>
          <div class="sr__card">
            <!-- Card start-->
            <img src="assets/img/services/<?php echo $row['img'] ?>" alt="<?php echo $row['alt'] ?>" />
            <div class="card__footer">
              <h5 class="t__22 no">0<?php echo $sno ?></h5>
              <h3 class="t__22"><?php echo $row['heading'] ?></h3>
              <div class="invisible__content">
                <p>
                  <?php echo $row['description'] ?>
                </p>
                <a href="service/<?php echo $row['seo_url'] ?>" class="d-flex align-items-center">
                  More Details <i class="ti-arrow-top-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Card End-->
          <?php $sno++;
        } ?>

      </div>
    </div>

    <div> <!-- shap start -->
      <img src="assets/icons/dots.png" alt="" class="dots__shap">

    </div> <!-- shap end -->
  </section>
  <!--  End Services 1 -->

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

  <!--  Start Testimonial -->
  <section class="testimonial py__130">
    <div class="container position-relative">
      <div class="slider">
        <div class="testimonial__slides">
          <?php
          $testimonial = mysqli_query($conn, "SELECT * FROM `testimonials` ORDER BY `timestamp` DESC");

          while ($row = mysqli_fetch_assoc($testimonial)) {
            ?>
            <div>
              <!-- slide 1 start -->
              <div class="ku__slide">
                <div class="content">
                  <div class="quote">
                    <img src="assets/img/review/quote.png" alt="" />
                  </div>

                  <p class="review">
                    <?php echo $row['comment'] ?>
                  </p>

                  <div class="user">
                    <img src="assets/img/review/<?php echo $row['profile'] ?>" alt="Client profile" />
                    <div>
                      <h5 class="t__22 mb-0"><?php echo $row['name'] ?></h5>
                      <p class="d-flex align-items-center"><img src="assets/img/review/<?php echo $row['country'] ?>"
                          alt="country_flag" class="avatar-sm " style="width: 20px;height: 15px; border-radius: 0;">&nbsp;
                        <?php echo $row['country_name'] ?>
                      </p>
                    </div>
                  </div>

                  <div class="rating">
                    <div class="d-flex align-items-center gap-2">
                      <p>Rating</p>
                      <img src="assets/img/review/rating.png" alt="" />
                    </div>
                    <div>
                      <img src="assets/img/review/comp_logo.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- slide 1 end -->
          <?php } ?>
        </div>
      </div>
    </div>

    <div>
      <!-- shap start -->
      <img src="assets/icons/rat_agal.png" alt="" class="rat__shap d-none d-xl-block" />
      <img src="assets/icons/dots_x.png" alt="" class="dots__shap" data-aos="fade-up" data-aos-delay="100"
        data-aos-offset="0" data-aos-duration="1000" />
      <img src="assets/icons/sun_white.png" alt="" class="sun__shap" data-aos="fade-down" data-aos-delay="100"
        data-aos-offset="0" data-aos-duration="1000" />
    </div>
    <!-- shap End -->
  </section>
  <!--  End Testimonial -->

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