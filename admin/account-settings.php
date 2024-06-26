<?php
include ("includes/connection.php");
include ("includes/function.php");
?>

<!doctype html>
<html lang="en">

<head>

    <?php include ('includes/head.php') ?>
    <title>Account Setting | Webkye</title>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include ("includes/top.php"); ?>
        <!-- ========== App Menu ========== -->
        <?php include ("includes/sidebar.php") ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Settings</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Accounts</a></li>
                                        <li class="breadcrumb-item active">Settings</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form action="#!">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="fs-16">Personal Information</h5>
                                <p class="text-muted mb-lg-0">Personal Identifiable Information (PII) is defined as: Any
                                    representation of information that permits the identity of an individual to whom the
                                    information applies to be reasonably inferred by either direct or indirect means.
                                </p>
                            </div><!--end col-->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="firstName" class="form-label">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="firstName"
                                                        placeholder="Enter your first name" value="Raquel">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="lastName" class="form-label">Last Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="lastName"
                                                        placeholder="Enter your last name" value="Murillo">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="emailInput" class="form-label">Email Address <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="emailInput"
                                                        placeholder="name@toner.com" value="raquel@toner.com">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="phoneInput" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phoneInput"
                                                        placeholder="Enter phone number" value="+(235) 01234 5678">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="birdthdatInput" class="form-label">Joining Date</label>
                                                    <input type="text" class="form-control" data-provider="flatpickr"
                                                        id="birdthdatInput" data-date-format="d M, Y"
                                                        data-deafult-date="24 Nov, 2021" placeholder="Select date"
                                                        readonly>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="designationInput" class="form-label">Designation</label>
                                                    <input type="text" class="form-control" id="designationInput"
                                                        placeholder="Designation" value="Sales & Marketing Manager">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="websiteInput1" class="form-label">Website</label>
                                                    <input type="text" class="form-control" id="websiteInput1"
                                                        placeholder="www.example.com" value="www.toner.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="cityInput" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="cityInput"
                                                        placeholder="City" value="Phoenix">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="countryInput" class="form-label">Country</label>
                                                    <input type="text" class="form-control" id="countryInput"
                                                        placeholder="Country" value="United States">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="zipcodeInput" class="form-label">Zip Code</label>
                                                    <input type="text" class="form-control" minlength="5" maxlength="6"
                                                        id="zipcodeInput" placeholder="Enter zipcode" value="90011">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-secondary">Update
                                                        Profile</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div><!--edn row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="fs-16">Social Media</h5>
                                <p class="text-muted mb-lg-0">Personal Identifiable Information (PII) is defined as: Any
                                    representation of information that permits the identity of an individual to whom the
                                    information applies to be reasonably inferred by either direct or indirect means.
                                </p>
                            </div><!--end col-->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="facebook" class="form-label">Facebook</label>
                                                    <input type="text" class="form-control" id="facebook"
                                                        placeholder="Username" value="Raquel">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="whatsappInput" class="form-label">Whatsapp</label>
                                                    <input type="text" class="form-control" id="whatsappInput"
                                                        placeholder="+(235) 01234 5678" value="+(253) 98765 4321">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="twitterInput" class="form-label">Twitter <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="twitterInput"
                                                        placeholder="Username" value="@raquel_morillo">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="emailInput2" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="emailInput2"
                                                        placeholder="example@toner.com" value="raquelmurillo@toner.com">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Change Social
                                                        Media</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div><!--edn row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="fs-16">Change Password</h5>
                                <p class="text-muted mb-lg-0">Personal Identifiable Information (PII) is defined as: Any
                                    representation of information that permits the identity of an individual to whom the
                                    information applies to be reasonably inferred by either direct or indirect means.
                                </p>
                            </div><!--end col-->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="oldpasswordInput" class="form-label">Old
                                                        Password*</label>
                                                    <input type="password" class="form-control" id="oldpasswordInput"
                                                        placeholder="Enter current password">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5 password-input"
                                                        onpaste="return false" placeholder="Enter password"
                                                        id="password-input" aria-describedby="passwordInput"
                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                    <button
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                        type="button" id="password-addon"><i
                                                            class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <label class="form-label" for="confirm-password-input">Confirm
                                                    Password</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5 password-input"
                                                        onpaste="return false" placeholder="Confirm password"
                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                        id="confirm-password-input" required>
                                                    <button
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                        type="button" id="confirm-password-input"><i
                                                            class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div>
                                                    <a href="javascript:void(0);"
                                                        class="link-primary text-decoration-underline">Forgot Password
                                                        ?</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div id="password-contain"
                                                class="p-3 bg-danger-subtle text-danger  mb-2 rounded">
                                                <h5 class="fs-15 mb-3">Password must contain:</h5>
                                                <p id="pass-length" class="invalid fs-13 mb-2">Minimum <b>8
                                                        characters</b></p>
                                                <p id="pass-lower" class="invalid fs-13 mb-2">At <b>lowercase</b> letter
                                                    (a-z)</p>
                                                <p id="pass-upper" class="invalid fs-13 mb-2">At least <b>uppercase</b>
                                                    letter (A-Z)</p>
                                                <p id="pass-number" class="invalid fs-13 mb-0">A least <b>number</b>
                                                    (0-9)</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success">Change
                                                        Password</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="fs-16">Application Notifications:</h5>
                                <p class="text-muted mb-lg-0">An app notification is a message or alert sent by an
                                    application to the device user. They include push notifications and in-app
                                    notifications.</p>
                            </div><!--end col-->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">

                                        <h6 class="fs-16">By Email</h6>
                                        <p class="text-muted">Receive the latest news, update and industry tutorials for
                                            us.</p>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="ExclusiveProduct">
                                                    <label class="form-check-label" for="ExclusiveProduct">
                                                        Exclusive product offers
                                                    </label>
                                                    <p class="text-muted">Used or owned by only one person or group, and
                                                        not shared with anyone else.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="dailyMessages">
                                                    <label class="form-check-label" for="dailyMessages">
                                                        Daily Messages
                                                    </label>
                                                    <p class="text-muted">Today is hard, tomorrow will be worse, but the
                                                        day after tomorrow will be sunshine.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="weeklyActivity" checked>
                                                    <label class="form-check-label" for="weeklyActivity">
                                                        Weekly activity summary
                                                    </label>
                                                    <p class="text-muted">Open the activity app on the watch and scroll
                                                        down to the bottom and tap on "Weekly Summary"</p>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="fs-16 mt-4">Notification from Us</h6>
                                        <p class="text-muted">Receive the latest news, update and industry tutorials for
                                            us.</p>

                                        <div class="row g-3">
                                            <div class="col-lg-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="news&Upates" checked>
                                                    <label class="form-check-label" for="news&Upates">
                                                        News & Updates
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="bestTrips">
                                                    <label class="form-check-label" for="bestTrips">
                                                        Best Trips
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="userResearch">
                                                    <label class="form-check-label" for="userResearch">
                                                        User Research
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="fs-16 mt-4">Comments</h6>
                                        <p class="text-muted">Receive the latest news, update and industry tutorials for
                                            us.</p>

                                        <div class="row g-3">
                                            <div class="col-lg-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="commentsList"
                                                        id="donotNotifyme">
                                                    <label class="form-check-label" for="donotNotifyme">
                                                        Do not notify me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="commentsList"
                                                        id="mentionsOnly">
                                                    <label class="form-check-label" for="mentionsOnly">
                                                        Mentions only
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="commentsList"
                                                        id="allcomment" checked>
                                                    <label class="form-check-label" for="allcomment">
                                                        All comments
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="fs-16">Privacy & Security</h5>
                                <p class="text-muted mb-lg-0">Security is about the safeguarding of data, whereas
                                    privacy is about the safeguarding of user identity. The specific differences,
                                    however, are more complex, and there can certainly be areas of overlap between the
                                    two.</p>
                            </div><!--end col-->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                                            <div class="flex-grow-1">
                                                <h6 class="fs-16 mb-1">Two-factor Authentication</h6>
                                                <p class="text-muted">Two-factor authentication is an enhanced security
                                                    meansur. Once enabled, you'll be required to give two types of
                                                    identification when you log into Google Authentication and SMS are
                                                    Supported.</p>
                                            </div>
                                            <div class="flex-shrink-0 ms-sm-3">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable
                                                    Two-facor Authentication</a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                            <div class="flex-grow-1">
                                                <h6 class="fs-16 mb-1">Secondary Verification</h6>
                                                <p class="text-muted">The first factor is a password and the second
                                                    commonly includes a text with a code sent to your smartphone, or
                                                    biometrics using your fingerprint, face, or retina.</p>
                                            </div>
                                            <div class="flex-shrink-0 ms-sm-3">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set up
                                                    secondary method</a>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                            <div class="flex-grow-1">
                                                <h6 class="fs-16 mb-1">Backup Codes</h6>
                                                <p class="text-muted mb-sm-0">A backup code is automatically generated
                                                    for you when you turn on two-factor authentication through your iOS
                                                    or Android Twitter app. You can also generate a backup code on
                                                    twitter.com.</p>
                                            </div>
                                            <div class="flex-shrink-0 ms-sm-3">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate
                                                    backup codes</a>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="card-title text-decoration-underline mb-3">Delete This Account:
                                            </h5>
                                            <p class="text-muted">Go to the Data &amp; Privacy section of your profile
                                                Account. Scroll to "Your data &amp; privacy options." Delete your
                                                Profile Account. Follow the instructions to delete your account :</p>
                                            <div>
                                                <input type="password" class="form-control" id="passwordInput"
                                                    placeholder="Enter your password" value="make@321654987"
                                                    style="max-width: 265px;">
                                            </div>
                                            <div class="hstack gap-2 mt-3">
                                                <a href="javascript:void(0);" class="btn btn-soft-danger">Close &amp;
                                                    Delete This Account</a>
                                                <a href="javascript:void(0);" class="btn btn-soft-dark">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form><!--end form-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Toner.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted fs-17 mx-4 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-notification">Yes, Delete
                            It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <a class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block" data-bs-toggle="collapse"
        href="#chatBot" role="button" aria-expanded="false" aria-controls="chatBot">Online Chat</a>
    <div class="collapse chat-box" id="chatBot">
        <div class="card shadow-lg border-0 rounded-bottom-0 mb-0">
            <div class="card-header bg-success d-flex align-items-center border-0">
                <h5 class="text-white fs-16 fw-medium flex-grow-1 mb-0">Hi, Raquel Murillo 👋</h5>
                <button type="button" class="btn-close btn-close-white flex-shrink-0" onclick="chatBot()"
                    data-bs-dismiss="collapse" aria-label="Close"></button>
            </div>
            <div class="card-body p-0">
                <div id="users-chat-widget">
                    <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 280px;">
                        <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                            <li class="chat-list left">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="../assets/images/logo-sm.png" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Welcome to Themesbrand. We are here to
                                                    help you. You can also directly email us at Support@themesbrand.com
                                                    to schedule a meeting with our Technology Consultant.</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i
                                                            class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:07 am</small>
                                            <span class="text-success check-message-icon"><i
                                                    class="ri-check-double-line align-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                            <li class="chat-list right">
                                <div class="conversation-list">
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Good morning, How are you? What about our
                                                    next meeting?</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i
                                                            class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:08 am</small>
                                            <span class="text-success check-message-icon"><i
                                                    class="ri-check-double-line align-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                            <li class="chat-list left">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="../assets/images/logo-sm.png" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting
                                                    tomorrow at 10.00 AM</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i
                                                            class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">09:10 am</small>
                                            <span class="text-success check-message-icon"><i
                                                    class="ri-check-double-line align-bottom"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- chat-list -->

                        </ul>
                    </div>
                </div>
                <div class="border-top border-top-dashed">
                    <div class="row g-2 mt-2 mx-3 mb-3">
                        <div class="col">
                            <div class="position-relative">
                                <input type="text" class="form-control border-light bg-light"
                                    placeholder="Enter Message...">
                            </div>
                        </div><!-- end col -->
                        <div class="col-auto">
                            <button type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-secondary btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">

                    <!-- <h6 class="mb-1 fs-15 fw-semibold text-uppercase">View Website</h6>
                        <p class="text-muted">Choose your</p> -->

                    <div class="mb-4 hstack gap-2">
                        <a href="https://themesbrand.com/toner/html/frontend/index.html" target="_blank"
                            class="btn btn-secondary">Visit Your Website</a>
                        <a href="https://themesbrand.com/toner/html/components/index.html" target="_blank"
                            class="btn btn-success">Components</a>
                    </div>

                    <h6 class="mb-1 fs-15 fw-semibold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row gy-3">
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-xl w-100" for="customizer-layout01">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-2">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-2"></span>
                                                <span class="bg-light d-block p-2 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-xl w-100" for="customizer-layout02">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn"
                                    class="form-check-input">
                                <label class="form-check-label p-0 avatar-xl w-100" for="customizer-layout03">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-2">
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-2"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-mode-light" value="light">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="layout-mode-light">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Light</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check card-radio dark customize-widget">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-xl w-100 bg-dark" for="layout-mode-dark">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light bg-opacity-10 d-block p-1"></span>
                                                    <span class="bg-light bg-opacity-10 d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget" data-bs-toggle="collapse"
                                    data-bs-target="#collapseLayoutWidth.show">
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="layout-width-fluid">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseLayoutWidth">
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="layout-width-boxed">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div class="collapse" id="collapseLayoutWidth">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Boxed Layout Body Images</h6>
                        <p class="text-muted">Choose image.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image"
                                        id="data-body-image-none" value="none">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-none">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">None</h5>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image"
                                        id="data-body-image-1" value="img-1">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-1">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3"
                                            style="background-image: url('../assets/images/sidebar/body-light-1.png');">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Img 1</h5>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image"
                                        id="data-body-image-2" value="img-2">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-2">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3"
                                            style="background-image: url('../assets/images/sidebar/body-light-2.png');">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Img 2</h5>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-body-image"
                                        id="data-body-image-3" value="img-3">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-3">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 border-start border-end px-3"
                                            style="background-image: url('../assets/images/sidebar/body-light-3.png');">
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Img 3</h5>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                                value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row gy-3">
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light"
                                    value="light">
                                <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-light">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark"
                                    value="dark">
                                <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-dark">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-dark d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Dark</h5>
                        </div>

                        <div class="col-6">
                            <div class="form-check card-radio customize-widget">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-brand"
                                    value="brand">
                                <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-brand">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-primary d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-14 text-center mt-2">Brand</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-default">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Default</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-compact">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Compact</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-small">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-small-hover">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-view-default">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-view-detached">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget"
                                    data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-color-light">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget"
                                    data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-color-dark">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-dark d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-6">
                                <button
                                    class="btn btn-link avatar-xl w-100 p-0 overflow-hidden border collapsed customize-widget"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient"
                                    aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                        <span class="d-flex align-items-center gap-1 ps-1">
                                            <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                            <span
                                                class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                        </span>
                                    </span>
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span
                                                    class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-14 text-center mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>


                        <div class="img-switch">
                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-none" value="none">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-none">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span
                                                        class="bg-light d-flex h-100 flex-column gap-1 p-2 d-flex align-items-center justify-content-center">
                                                        <i class="ri-close-fill fs-20"></i>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-01" value="img-1">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-01">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-1.jpg" alt=""
                                                        class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-02" value="img-2">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-02">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-2.jpg" alt=""
                                                        class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-03" value="img-3">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-03">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-3.jpg" alt=""
                                                        class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-04" value="img-4">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebarimg-04">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span
                                                        class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <img src="../assets/images/sidebar/img-4.jpg" alt=""
                                                        class="avatar-sm h-100 object-fit-cover">
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Preloader</h6>
                        <p class="text-muted">Choose a preloader.</p>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-preloader"
                                        id="preloader-view-custom" value="enable">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="preloader-view-custom">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <span class="d-flex align-items-center justify-content-center">
                                            <span class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                        </span>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Enable</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check sidebar-setting card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-preloader"
                                        id="preloader-view-none" value="disable">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="preloader-view-none">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span
                                                    class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span
                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Disable</h5>
                            </div>
                        </div>

                    </div><!-- end preloader-menu -->
                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>

    <!--Account init js-->
    <script src="../assets/js/pages/password-match.init.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>