<header class="header">

    <!--  Bottom header Start -->
    <div class="header__bottom">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a href="index.html" class="d-flex align-items-center header__bottom_logo">
                        <img src="assets/img/logo_black.png" alt="alt" />
                        <h5>Webkye</h5>
                    </a>
                </div>
                <nav class="header__bottom_navbar">
                    <ul class="d-xl-flex menu__list">
                        <li class="dropdown__container">
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <a href="/">Home</a>
                            </div>
                        </li>
                        <li class="dropdown__container">
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <a href="about-us">About Us</a>
                            </div>
                        </li>
                        <li class="dropdown__container">
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <a href="services.html">Services</a><i class="fa fa-angle-down"></i>
                            </div>
                            <ul class="dropdown__container_menu">
                                <?php
                                $services = mysqli_query($conn, "SELECT * FROM `services`");
                                $sno = 1;
                                while ($row = mysqli_fetch_assoc($services)) {
                                    ?>
                                    <li><a href="<?php echo $row['seo_url'] ?>"
                                            style="text-wrap: nowrap;"><?php echo $row['heading'] ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="dropdown__container">
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <a href="portfolio">Projects</a>
                            </div>
                        </li>
                        <li class="dropdown__container">
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <a href="blogs">Blog</a>
                            </div>
                        </li>
                        <li class="dropdown__container">
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <a href="contact-us">Contact Us</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="d-xl-block d-none">
                    <a href="href.html" class="common__btn"><span>Get Started Now</span><i
                            class="ti-arrow-top-right"></i></a>
                </div>
                <div class="menu__icon d-block d-xl-none">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
    <!--  Bottom header End -->
</header>