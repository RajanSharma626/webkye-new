<?php
require ("includes/connection.php");
require ("includes/function.php");
$msg = '';


if (isset($_SESSION['Admin_login']) && isset($_SESSION['Admin_email'])) {
    header("Location: index");
    exit;
}

if (isset($_POST["admin-login"])) {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashpassword = md5($password);

    $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$hashpassword'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['Admin_login'] = true;
        $_SESSION['Admin_email'] = $email;
        header('Location: index');
        die();
    } else {
        $msg = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        Your <strong>Email and Password incorrect!</strong> Please Try Again.
      </div>";
    }

}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <meta charset="utf-8">
    <title>Log In | WebKye.in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <!-- FavIcon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <section
        class="auth-page-wrapper position-relative bg-light min-vh-100 d-flex align-items-center justify-content-between">
        <div class="auth-header position-fixed top-0 start-0 end-0 bg-body">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-2">
                        <a class="navbar-brand mb-2 mb-sm-0" href="index.html">
                            <img src="assets/images/webkye-black-text-logo.png" class="card-logo card-logo-dark"
                                alt="logo dark" height="22">
                            <img src="assets/images/webkye-black-text-logo" class="card-logo card-logo-light"
                                alt="webkye logo" height="22">
                        </a>
                    </div><!---end col-->
                </div><!--end row-->
            </div><!--end container-fluid-->

        </div>

        <div class="w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="auth-card mx-lg-3">
                            <!-- Error Message -->
                            <?php echo $msg ?>
                            <div class="card border-0 mb-0">
                                <div class="card-header my-theme-bg border-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-3">
                                            <img src="assets/images/auth/img-1.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-8 col-9">
                                            <h1 class="text-white lh-base fw-lighter">Welcome to Webkye.</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted fs-15">Sign in to continue to Webkye.</p>
                                    <div class="p-2">
                                        <form method="post">

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="username" name="email"
                                                    placeholder="Enter username" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5 password-input"
                                                        name="password" placeholder="Enter password" id="password-input"
                                                        required>
                                                    <button
                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                        type="button" id="password-addon"><i
                                                            class="bi bi-eye"></i></button>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn my-theme-bg w-100" type="submit"
                                                    name="admin-login">Log In</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-muted">©
                                    <script>document.write(new Date().getFullYear())</script> WebKye.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/pages/password-addon.init.js"></script>

</body>

</html>