<?php
include ("includes/connection.php");
include ("includes/function.php");

// ================== Update Status and Delete =============
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($conn, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($conn, $_GET['id']);
        $delete = "DELETE FROM `testimonials` WHERE `id`='$id'";
        $res = mysqli_query($conn, "$delete");
        if ($res) {
            header("Location: reviews");
        }
    }
}


?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <?php include ('includes/head.php') ?>
    <title>Reviews | Webkye.in</title>

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
                                <h4 class="mb-sm-0">Reviews</h4>

                                <div>
                                    <a href="add-review" class="btn btn-success" id="addproduct-btn"> Add
                                        Review</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row" data-masonry='{"percentPosition": true }'>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM `testimonials` ORDER BY `id` DESC");
                        while ($row = mysqli_fetch_assoc($sql)) {
                            ?>
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <img src="../assets/img/review/<?php echo $row['profile'] ?>" alt=""
                                                class="avatar-sm rounded">

                                            <div>
                                                <a href="add-review?id=<?php echo $row['id'] ?>"
                                                    class="badge bg-success-subtle text-success">Edit</a>
                                                <a href="?type=delete&id=<?php echo $row['id'] ?>"
                                                    class="badge bg-danger-subtle text-danger">Delete</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/img/review/<?php echo $row['country'] ?>" alt="country_flag"
                                                class="avatar-sm rounded" style="width: 20px;"> &nbsp;
                                            <h5 class="mb-0 text-uppercase">
                                                <?php echo $row['name'] ?>
                                            </h5>

                                        </div>

                                        <p class=" text-muted fs-15">
                                            <?php echo $row['comment'] ?>
                                        </p>
                                        <h6 class="mb-0 text-uppercase">
                                            <?php echo $row['designation'] ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div><!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Webkye.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>




    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- nouisliderribute js -->
    <script src="assets/libs/nouislider/nouislider.min.js"></script>
    <script src="assets/libs/wnumb/wNumb.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>