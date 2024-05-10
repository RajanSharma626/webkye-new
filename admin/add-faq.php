<?php
include ("includes/connection.php");
include ("includes/function.php");

$id = "";
$question = "";
$answer = "";


if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `faq` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $question = $row['question'];
        $answer = $row['answer'];
    }
}


if (isset($_POST["addfaq"]) && $_POST["addfaq"] != '') {

    $question = get_safe_value($conn, $_POST['question']);
    $answer = get_safe_value($conn, $_POST['answer']);

    $sql = mysqli_query($conn, "INSERT INTO `faq`(`question`, `answer`) VALUES ('$question','$answer')");

    if ($sql) {
        header("Location: faq");
    }
}

if (isset($_POST["Updatefaq"]) && $_POST["Updatefaq"] != '') {
    $id = $_POST['id'];
    $question = get_safe_value($conn, $_POST['question']);
    $answer = get_safe_value($conn, $_POST['answer']);

    $sql = mysqli_query($conn, "UPDATE `faq` SET `question`='$question',`answer`='$answer' WHERE `id` = '$id'");

    if ($sql) {
        header("Location: faq");
    }
}

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <?php include ('includes/head.php') ?>
    <title>add Faq | Trift Point</title>

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
                                <h4 class="mb-sm-0">Add FAQ</h4>

                                <div>
                                    <a href="faq" class="btn btn-warning" id="addproduct-btn"><i
                                            class="bi bi-arrow-left"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form autocomplete="off" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm">
                                                    <div
                                                        class="avatar-title rounded-circle bg-light text-primary fs-20">
                                                        <i class="bi bi-box-seam"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-1">FAQ Information</h5>
                                                <p class="text-muted mb-0">Fill all information below.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Question</label>
                                            <input type="text" class="form-control d-none" id="Service-id-input"
                                                name="id" value="<?php echo $id ?>">
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="question" value="<?php echo $question ?>"
                                                placeholder="Enter Question" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Answer</label>
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="answer" value="<?php echo $answer ?>" placeholder="Enter Question"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->



                                <div class="text-end mb-3">
                                    <?php
                                    if (isset($_GET['id']) && !empty($_GET['id'])) {
                                        ?>
                                        <input type="submit" name="Updatefaq" class="btn btn-success w-sm" value="Update">
                                    <?php } else { ?>
                                        <input type="submit" name="addfaq" class="btn btn-success w-sm" value="Submit">
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                    </form>
                </div>
                <!-- End Page-content -->

                <?php include ('includes/footer.php') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
    </div>


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

    <!-- ckeditor -->
    <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- dropzone js -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>
    <!-- create-product -->
    <script src="assets/js/backend/create-product.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>