<?php
include ("includes/connection.php");
include ("includes/function.php");

$id = "";
$img = "";
$name = "";
$review = "";
$designation = "";
$flag = "";
$project = "";


if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `testimonials` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $img = $row['profile'];
        $name = $row['name'];
        $review = $row['comment'];
        $designation = $row['designation'];
        $flag = $row['country'];
        $project = $row['project'];
    }
}


if (isset($_POST["addReview"]) && $_POST["addReview"] != '') {

    $profile = get_safe_value($conn, rand(11, 999) . $_FILES['profile']['name']);
    $flag = get_safe_value($conn, rand(11, 999) . $_FILES['flag']['name']);
    $name = get_safe_value($conn, $_POST['name']);
    $review = get_safe_value($conn, $_POST['review']);
    $designation = get_safe_value($conn, $_POST['designation']);
    $project = get_safe_value($conn, $_POST['project']);

    move_uploaded_file($_FILES["profile"]["tmp_name"], "../assets/img/review/" . $profile);
    move_uploaded_file($_FILES["flag"]["tmp_name"], "../assets/img/review/" . $flag);
    $sql = mysqli_query($conn, "INSERT INTO `testimonials`(`name`, `designation`, `profile`, `country`, `comment`,`project`) VALUES ('$name','$designation','$profile','$flag','$review', '$project')");

    if ($sql) {
        header("Location: reviews");
    }
}


if (isset($_POST["UpdateReviewe"]) && $_POST["UpdateReviewe"] != '') {
    $id = get_safe_value($conn, $_POST['id']);
    $profile = get_safe_value($conn, rand(11, 999) . $_FILES['profile']['name']);
    $flag = get_safe_value($conn, rand(11, 999) . $_FILES['flag']['name']);
    $name = get_safe_value($conn, $_POST['name']);
    $review = get_safe_value($conn, $_POST['review']);
    $designation = get_safe_value($conn, $_POST['designation']);
    $project = get_safe_value($conn, $_POST['project']);

    if ($_FILES['profile']['name'] != '' && $_FILES['flag']['name'] != '') {

        move_uploaded_file($_FILES["profile"]["tmp_name"], "../assets/img/review/" . $profile);
        move_uploaded_file($_FILES["flag"]["tmp_name"], "../assets/img/review/" . $flag);

        $sql = mysqli_query($conn, "UPDATE `testimonials` SET `name`='$name',`designation`='$designation',`profile`='$profile',`country`='$flag ',`comment`='$review',`project`='$project' WHERE `id` = '$id'");

        if ($sql) {
            header("Location: reviews");
        }
    } elseif ($_FILES['profile']['name'] == '' && $_FILES['flag']['name'] != '') {

        move_uploaded_file($_FILES["flag"]["tmp_name"], "../assets/img/review/" . $flag);

        $sql = mysqli_query($conn, "UPDATE `testimonials` SET `name`='$name',`designation`='$designation',`country`='$flag ',`comment`='$review',`project`='$project' WHERE `id` = '$id'");

        if ($sql) {
            header("Location: reviews");
        }
    } elseif ($_FILES['profile']['name'] != '' && $_FILES['flag']['name'] == '') {
        move_uploaded_file($_FILES["profile"]["tmp_name"], "../assets/img/review/" . $profile);

        $sql = mysqli_query($conn, "UPDATE `testimonials` SET `name`='$name',`designation`='$designation',`profile`='$profile',`comment`='$review',`project`='$project' WHERE `id` = '$id'");

        if ($sql) {
            header("Location: reviews");
        }
    } else {

        $sql = mysqli_query($conn, "UPDATE `testimonials` SET `name`='$name',`designation`='$designation',`comment`='$review',`project`='$project' WHERE `id` = '$id'");

        if ($sql) {
            header("Location: reviews");
        }

    }


}


if (isset($_GET['removeimg']) && !empty($_GET['removeimg'])) {
    $imgRemoveId = $_GET['removeimg'];
    $deleteImg = mysqli_query($conn, "DELETE FROM `product_img` WHERE `id` = '$imgRemoveId'");

}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <?php include ('includes/head.php') ?>
    <title>Add Review | Webkye</title>

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
                                <h4 class="mb-sm-0">Add Review</h4>

                                <div>
                                    <a href="reviews.php" class="btn btn-warning" id="addproduct-btn"><i
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
                                                <h5 class="card-title mb-1">Review Information</h5>
                                                <p class="text-muted mb-0">Fill all information below.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Profile Image</label>
                                            <input type="text" class="form-control d-none" id="Service-id-input"
                                                name="id" value="<?php echo $id ?>">
                                            <input type="file" class="form-control" name="profile" <?php echo isset($_GET['id']) ? "" : "required" ?>>
                                            <?php
                                            if ($img != '') {
                                                ?>
                                                <img src="../assets/img/review/<?php echo $img; ?>" class="mt-2" alt=""
                                                    width="50px">
                                            <?php } ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Name</label>
                                            <input type="text" class="form-control d-none" id="Service-id-input"
                                                name="id" value="<?php echo $id ?>">
                                            <input type="text" class="form-control" id="service-title-input" name="name"
                                                value="<?php echo $name ?>" placeholder="Enter Name" required>
                                            <div class="invalid-feedback">Please enter a Name.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Review</label>
                                            <textarea name="review" placeholder="Write a review..." class="form-control"
                                                required><?php echo $review ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Designation</label>
                                            <input type="text" class="form-control" id="service-icon-input"
                                                name="designation" value="<?php echo $designation ?>"
                                                placeholder="Enter Designation">
                                            <div class="invalid-feedback">Please enter a Designation.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Country Flag</label>
                                            <input type="file" class="form-control" name="flag" <?php echo isset($_GET['id']) ? "" : "required" ?>>
                                            <?php
                                            if ($flag != '') {
                                                ?>
                                                <img src="../assets/img/review/<?php echo $flag; ?>" class="mt-2" alt=""
                                                    width="50px">
                                            <?php } ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Project</label>
                                            <select name="project" class="form-control">
                                                <option value="" selected disable>- Select -</option>
                                                <?php
                                                $projectsql = mysqli_query($conn, "SELECT * FROM `project` ORDER BY `id` DESC");
                                                while ($projectRow = mysqli_fetch_assoc($projectsql)) {
                                                    ?>
                                                    <option value="<?php echo $projectRow['id'] ?>" <?php echo ($project == $projectRow['id']) ? "selected" : ""; ?>>
                                                        <?php echo $projectRow['title'] ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>

                                    </div>
                                </div>
                                <!-- end card -->



                                <div class="text-end mb-3">
                                    <?php
                                    if (isset($_GET['id']) && !empty($_GET['id'])) {
                                        ?>
                                        <input type="submit" name="UpdateReviewe" class="btn btn-success w-sm"
                                            value="Update">
                                    <?php } else { ?>
                                        <input type="submit" name="addReview" class="btn btn-success w-sm" value="Submit">
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