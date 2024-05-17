<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="assets/images/webkye-black-text-logo.png" alt="webkye logo" height="26">
            </span>
        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a href="home" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span
                            data-key="t-dashboard">Dashboard</span> </a>
                </li>

                <li class="nav-item">
                    <a href="users-query" class="nav-link menu-link"> <i class="bi bi-chat-square-text"></i>
                        <span data-key="t-users-list">Users Query</span>
                        <?php
                        $mail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS `unread` FROM `contact_form` WHERE `status` = 0"));
                        if ($mail['unread'] > 0) { ?>
                            <span class="badge badge-pill bg-danger-subtle text-danger " data-key="t-hot">
                                <?php echo $mail['unread'] ?>
                            </span>
                        <?php }

                        ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="team" class="nav-link menu-link"> <i class="bi bi-people-fill"></i>
                        <span data-key="t-users-list">Team</span> </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="services">
                        <i class="bi bi-box-seam"></i> <span data-key="t-products">Services</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="reviews" class="nav-link menu-link"><i class="bi bi-star"></i> <span
                            data-key="t-reviews-ratings">Reviews</span></a>
                </li>
                <li class="nav-item">
                    <a href="projects" class="nav-link menu-link"><i class="bi bi-boxes"></i> <span
                            data-key="t-reviews-ratings">Projects</span></a>
                </li>
                <li class="nav-item">
                    <a href="blogs" class="nav-link menu-link"><i class="bi bi-newspaper"></i> <span
                            data-key="t-reviews-ratings">Blogs</span></a>
                </li>
                <li class="nav-item">
                    <a href="faq" class="nav-link menu-link"><i class="bi bi-patch-question"></i> <span
                            data-key="t-reviews-ratings">FAQ</span></a>
                </li>


                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSellers" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSellers">
                        <i class="bi bi-binoculars"></i> <span data-key="t-sellers">Clients</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSellers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="sellers-list-view.html" class="nav-link" data-key="t-list-view">List
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="sellers-grid-view.html" class="nav-link" data-key="t-grid-view">Grid
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="seller-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarInvoice" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarInvoice">
                        <i class="bi bi-archive"></i> <span data-key="t-invoice">Invoice</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoice">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="invoices-list.html" class="nav-link" data-key="t-list-view">List
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="invoices-details.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="invoices-create.html" class="nav-link" data-key="t-create-invoice">Create
                                    Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <li class="nav-item">
                    <a href="account" class="nav-link menu-link"><i class="bi bi-person-circle"></i>  <span
                            data-key="t-reviews-ratings">Accounts</span></a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAccounts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAccounts">
                        <i class="bi bi-person-circle"></i> <span data-key="t-accounts">Accounts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAccounts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="account.html" class="nav-link" data-key="t-my-account">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a href="account-settings.html" class="nav-link" data-key="t-settings">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-pass-reset-basic.html" class="nav-link"
                                    data-key="t-passowrd-reset">Password Reset</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-pass-change-basic.html" class="nav-link"
                                    data-key="t-create-password">Password Create</a>
                            </li>
                            <li class="nav-item">
                                <a href="logout" class="nav-link" data-key="t-logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li> -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>