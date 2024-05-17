<?php include ("includes/conn.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("includes/head.php") ?>
    <title>Contact Us</title>
</head>

<body>

    <!--  Start Header  -->
    <?php include ("includes/navbar.php") ?>
    <!--  End Header  -->

    <!-- Address start -->
    <div class="address py__130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 com-md-6">
                    <div class="add__card">
                        <div class="icon__box"> <i class="ti-comment-alt"></i> </div>
                        <div>
                            <p class="t__22">info@webkye.in</p>
                            <!-- <p class="t__22">helloinfo@gmail.com</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 com-md-6">
                    <div class="add__card">
                        <div class="icon__box"> <i class="fa fa-map-marker"></i> </div>
                        <div>
                            <p class="t__22">New Delhi, India</p>
                            <!-- <p class="t__22">New York, NY 101010</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 com-md-6">
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
    <section class="contact  ">
        <div class="container">
            <div class="text-center">
                <p class="transparent__btn">Contact Us</p>
                <h2 class="t__40 pt__30">Get in Touch</h2>
            </div>
            <div class="contact__form pt__40">
                <form>
                    <div class="row">
                        <div class="col-md-6"> <input type="text" placeholder="Your Name"> </div>
                        <div class="col-md-6"> <input type="email" placeholder="Your Email"> </div>
                        <div class="col-md-6"> <input type="text" placeholder="Your Subject"> </div>
                        <div class="col-md-6"> <input type="number" placeholder="Your Phone"> </div>
                        <div class="col-12"> <textarea name="message" placeholder="Your Message"></textarea></div>
                        <div class="d-flex justify-content-center">
                            <button class="common__btn"> <span>Send Message </span> <i class="ti-arrow-top-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact end -->



    <!--  Start Map  -->
    <div class="map py__130">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28616.60639112505!2d88.95574979644482!3d26.29164265582622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1701339556449!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--  End Map  -->

    <!--  start Footer -->
    <?php include ("includes/footer.php") ?>
    <!--  End Footer -->

    <!--  start Footer -->
    <?php include ("includes/foot.php") ?>
    <!--  End Footer -->

</body>

</html>