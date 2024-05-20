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
    <section class="contact  ">
        <div class="container">
            <div class="text-center">
                <p class="transparent__btn">Contact Us</p>
                <h2 class="t__40 pt__30">Get in Touch</h2>
            </div>
            <div class="contact__form pt__40" id="contact-form">
                <form>
                    <div class="row">
                        <div class="col-md-6"> <input type="text" name="name" id="name" placeholder="Your Name"
                                required> </div>
                        <div class="col-md-6"> <input type="email" name="email" id="email" placeholder="Your Email"
                                required> </div>
                        <div class="col-md-6 mb-3 mb-sm-0">
                            <select name="subject" id="subject" class="py-2 h-100" required>
                                <option value="" selected disabled>I'm Looking for...</option>
                                <option value="Web development">Web development</option>
                                <option value="UI/UX">UI/UX</option>
                                <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)
                                </option>
                                <option value="Graphic Designing">Graphic Designing</option>
                                <option value="Video Editing">Video Editing</option>
                                <option value="Content Writing">Content Writing</option>
                                <option value="Email Marketing">Email Marketing</option>
                                <option value="Social Media Marketing">Social Media Marketing</option>
                                <option value="Social Media Optimization">Social Media Optimization</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6"> <input type="number" name="phone" id="phone" placeholder="Your Phone"
                                required>
                        </div>
                        <div class="col-12"> <textarea name="message" name="message" id="message"
                                placeholder="Your Message" required></textarea></div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" name="submit" id="contact-submit" class="common__btn"> <span>Send
                                    Message </span> <i class="ti-arrow-top-right"></i>
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