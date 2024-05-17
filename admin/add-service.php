<?php
include ("includes/connection.php");
include ("includes/function.php");

$id = "";
$img = "";
$alt_text = "";
$title = "";
$desc = "";
$seo_url = "";


if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `services` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $img = $row['img'];
        $alt_text = $row['alt'];
        $title = $row['heading'];
        $desc = $row['description'];
        $seo_url = $row['seo_url'];
    }
}


if (isset($_POST["addService"]) && $_POST["addService"] != '') {

    $title = get_safe_value($conn, $_POST['title']);
    $desc = get_safe_value($conn, $_POST['desc']);
    $img = get_safe_value($conn, rand(11, 999) . "-" . $_FILES['img']['name']);
    $alt_text = get_safe_value($conn, $_POST['alt-text']);
    $seo_url = get_safe_value($conn, $_POST['seo_url']);
    move_uploaded_file($_FILES["img"]["tmp_name"], "../assets/img/services/" . $img);

    $sql = mysqli_query($conn, "INSERT INTO `services`(`img`,`alt`, `heading`, `description`,`seo_url`) VALUES ('$img','$alt_text','$title','$desc','$seo_url')");

    if ($sql) {
        header("Location: services");
    }
}

if (isset($_POST["UpdateService"]) && $_POST["UpdateService"] != '') {
    $id = $_POST['id'];
    $title = get_safe_value($conn, $_POST['title']);
    $desc = get_safe_value($conn, $_POST['desc']);
    $img = get_safe_value($conn, rand(11, 999) . "-" . $_FILES['img']['name']);
    $alt_text = get_safe_value($conn, $_POST['alt-text']);
    $seo_url = get_safe_value($conn, $_POST['seo_url']);

    $old_img = "";
    $sql_old_img = mysqli_query($conn, "SELECT `img` FROM `services` WHERE `id` = '$id'");
    if ($sql_old_img) {
        $row_old_img = mysqli_fetch_assoc($sql_old_img);
        $old_img = $row_old_img['img'];
    }

    if (!empty($_FILES['img']['name'])) {
        move_uploaded_file($_FILES["img"]["tmp_name"], "../assets/img/services/" . $img);
        $sql = mysqli_query($conn, "UPDATE `services` SET `img`='$img',`alt` = '$alt_text',`heading`='$title',`description`='$desc',`seo_url`= '$seo_url' WHERE `id` = '$id'");

        if ($sql) {
            if (!empty($old_img) && file_exists("../assets/img/services/" . $old_img)) {
                unlink("../assets/img/services/" . $old_img);
            }
            header("Location: services");
            exit();
        }
    } else {
        $sql = mysqli_query($conn, "UPDATE `services` SET `alt` = '$alt_text',`heading`='$title',`description`='$desc', `seo_url`='$seo_url' WHERE `id` = '$id'");

        if ($sql) {
            header("Location: services");
            exit();
        }
    }


}

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <?php include ('includes/head.php') ?>
    <title>Add Service | Webkye</title>

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
                                <h4 class="mb-sm-0">Add Service</h4>
                                <div>
                                    <a href="services.php" class="btn btn-warning" id="addproduct-btn"><i
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
                                                <h5 class="card-title mb-1">Service Information</h5>
                                                <p class="text-muted mb-0">Fill all information below.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Service title</label>
                                            <input type="text" class="form-control d-none" id="Service-id-input"
                                                name="id" value="<?php echo $id ?>">
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="title" value="<?php echo $title ?>"
                                                placeholder="Enter service title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Service description</label>
                                            <textarea name="desc" class="form-control"
                                                required><?php echo $desc ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Service Image</label>
                                            <input type="file" class="form-control" id="service-icon-input" name="img"
                                                <?php if (!isset($_GET['id'])) {
                                                    echo "required";
                                                } ?>>

                                            <?php if (!empty($img)) { ?>
                                                <img src="../assets/img/services/<?php echo $img ?>" class="img-fluid mt-1"
                                                    width="100px" alt="">
                                            <?php } ?>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Image Alt Text</label>
                                            <input type="text" class="form-control" value="<?php echo $alt_text ?>"
                                                id="service-icon-input" name="alt-text" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">SEO URL</label>
                                            <input type="text" class="form-control" value="<?php echo $seo_url ?>"
                                                id="service-icon-input" name="seo_url" required>
                                        </div>

                                    </div>
                                </div>
                                <!-- end card -->



                                <div class="text-end mb-3">
                                    <?php
                                    if (isset($_GET['id']) && !empty($_GET['id'])) {
                                        ?>
                                        <input type="submit" name="UpdateService" class="btn btn-success w-sm"
                                            value="Update">
                                    <?php } else { ?>
                                        <input type="submit" name="addService" class="btn btn-success w-sm" value="Submit">
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