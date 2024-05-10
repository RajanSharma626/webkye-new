<?php
include ("includes/connection.php");
include ("includes/function.php");

$id = "";
$cover = '';
$cover_alt_text = '';
$heading = '';
$subheading = '';
$short_desc = '';
$desc = '';
$client_name = '';
$date = '';
$project_url = '';
$cat = '';
$seo_url = '';
$keywords = '';
$tag = '';


if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `project` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $cover = $row['cover'];
        $cover_alt_text = $row['alt_text'];
        $heading = $row['title'];
        $subheading = $row['subtitle'];
        $short_desc = $row['short_desc'];
        $desc = $row['long_desc'];
        $client_name = $row['client'];
        $date = $row['date'];
        $project_url = $row['url'];
        $cat = $row['cat'];
        $seo_url = $row['seo_url'];
        $keywords = $row['meta_keywords'];
        $serializedTags = unserialize($row['tags']);
        // Print the tags with commas
        $tag = implode(',', $serializedTags);
    }
}


if (isset($_POST["addProject"]) && $_POST["addProject"] != '') {

    $cover = get_safe_value($conn, rand(11, 999) . $_FILES['cover']['name']);
    $cover_alt_text = get_safe_value($conn, $_POST['cover_alt_text']);
    $heading = get_safe_value($conn, $_POST['heading']);
    $subheading = get_safe_value($conn, $_POST['subheading']);
    $short_desc = get_safe_value($conn, $_POST['short_desc']);
    $desc = get_safe_value($conn, $_POST['desc']);
    $client_name = get_safe_value($conn, $_POST['client_name']);
    $date = get_safe_value($conn, $_POST['date']);
    $project_url = get_safe_value($conn, $_POST['project_url']);
    $cat = get_safe_value($conn, $_POST['cat']);
    $seo_url = get_safe_value($conn, $_POST['seo_url']);
    $keywords = get_safe_value($conn, $_POST['meta_keywords']);

    $tagsInput = get_safe_value($conn, $_POST['tags']);
    $tagsArray = explode(',', $tagsInput);
    $serializedTags = serialize($tagsArray);


    move_uploaded_file($_FILES["cover"]["tmp_name"], "../assets/images/portfolio/" . $cover);
    $sql = mysqli_query($conn, "INSERT INTO `project`(`title`,`subtitle`, `short_desc`, `long_desc`, `client`, `url`,`cat`, `cover`, `alt_text`, `date`, `tags`, `seo_url`, `meta_keywords`) VALUES 
                                                     ('$heading','$subheading','$short_desc','$desc','$client_name','$project_url','$cat','$cover','$cover_alt_text','$date','$serializedTags','$seo_url','$keywords')");

    if ($sql) {
        $projectId = mysqli_insert_id($conn);

        // Insert additional images into the other table
        if (!empty($_FILES['moreImages']['name']) && is_array($_FILES['moreImages']['name'])) {
            foreach ($_FILES['moreImages']['name'] as $key => $image) {
                $moreImage = $_FILES['moreImages']['name'][$key];
                $moreImageTmp = $_FILES['moreImages']['tmp_name'][$key];
                $moreImageAltText = get_safe_value($conn, $_POST['moreImages_alt_text'][$key]);

                // Generate a unique name for the image
                $moreImageName = rand(111, 999) . "_" . $moreImage;

                // Move the uploaded file to the destination folder
                move_uploaded_file($moreImageTmp, "../assets/images/portfolio/" . $moreImageName);

                // Insert the image details into the project_images table
                $sql = mysqli_query($conn, "INSERT INTO `project_images` (`project_id`, `img`, `alt_text`) VALUES ('$projectId', '$moreImageName', '$moreImageAltText')");
                // You may want to handle error checking and logging here
            }
        }

        header("Location: projects");
        exit();
    }

}


if (isset($_POST["UpdateProject"]) && $_POST["UpdateProject"] != '') {
    $id = get_safe_value($conn, $_POST['id']);
    $cover = get_safe_value($conn, rand(11, 999) . $_FILES['cover']['name']);
    $cover_alt_text = get_safe_value($conn, $_POST['cover_alt_text']);
    $heading = get_safe_value($conn, $_POST['heading']);
    $subheading = get_safe_value($conn, $_POST['subheading']);
    $short_desc = get_safe_value($conn, $_POST['short_desc']);
    $desc = get_safe_value($conn, $_POST['desc']);
    $client_name = get_safe_value($conn, $_POST['client_name']);
    $date = get_safe_value($conn, $_POST['date']);
    $project_url = get_safe_value($conn, $_POST['project_url']);
    $cat = get_safe_value($conn, $_POST['cat']);
    $seo_url = get_safe_value($conn, $_POST['seo_url']);
    $keywords = get_safe_value($conn, $_POST['meta_keywords']);

    $tagsInput = get_safe_value($conn, $_POST['tags']);
    $tagsArray = explode(',', $tagsInput);
    $serializedTags = serialize($tagsArray);

    if ($_FILES['cover']['name'] != '') {

        move_uploaded_file($_FILES["cover"]["tmp_name"], "../assets/images/portfolio/" . $cover);

        $sql = mysqli_query($conn, "UPDATE `project` SET 
         `title`='$heading',
         `subtitle`='$subheading',
         `short_desc`='$short_desc',
         `long_desc`='$desc',
         `client`='$client_name',
         `url`='$project_url',
         `cat`='$cat',
         `cover`='$cover',
         `alt_text`='$cover_alt_text',
         `date`='$date',
         `tags`='$serializedTags',
         `seo_url`='$seo_url',
         `meta_keywords`='$keywords' WHERE `id` = '$id'");

        if ($sql) {

            if (!empty($_FILES['moreImages']['name']) && is_array($_FILES['moreImages']['name'])) {
                foreach ($_FILES['moreImages']['name'] as $key => $image) {
                    $moreImage = $_FILES['moreImages']['name'][$key];
                    $moreImageTmp = $_FILES['moreImages']['tmp_name'][$key];
                    $moreImageAltText = get_safe_value($conn, $_POST['moreImages_alt_text'][$key]);

                    if (!empty($moreImage) && !empty($moreImageTmp)) {
                        $moreImageAltText = get_safe_value($conn, $_POST['moreImages_alt_text'][$key]);

                        // Generate a unique name for the image
                        $moreImageName = rand(111, 999) . "_" . $moreImage;

                        // Move the uploaded file to the destination folder
                        move_uploaded_file($moreImageTmp, "../assets/images/portfolio/" . $moreImageName);

                        // Insert the image details into the project_images table
                        $sql = mysqli_query($conn, "INSERT INTO `project_images` (`project_id`, `img`, `alt_text`) VALUES ('$id', '$moreImageName', '$moreImageAltText')");
                        // You may want to handle error checking and logging here
                    }
                }
            }
            header("Location: projects");
            exit;
        }
    } else {

        $sql = mysqli_query($conn, "UPDATE `project` SET 
         `title`='$heading',
         `subtitle`='$subheading',
         `short_desc`='$short_desc',
         `long_desc`='$desc',
         `client`='$client_name',
         `url`='$project_url',
         `cat`='$cat',
         `alt_text`='$cover_alt_text',
         `date`='$date',
         `tags`='$serializedTags',
         `seo_url`='$seo_url',
         `meta_keywords`='$keywords' WHERE  `id` = '$id'");

        if ($sql) {

            if (!empty($_FILES['moreImages']['name']) && is_array($_FILES['moreImages']['name'])) {
                foreach ($_FILES['moreImages']['name'] as $key => $image) {
                    $moreImage = $_FILES['moreImages']['name'][$key];
                    $moreImageTmp = $_FILES['moreImages']['tmp_name'][$key];
                    $moreImageAltText = get_safe_value($conn, $_POST['moreImages_alt_text'][$key]);

                    if (!empty($moreImage) && !empty($moreImageTmp)) {
                        $moreImageAltText = get_safe_value($conn, $_POST['moreImages_alt_text'][$key]);

                        // Generate a unique name for the image
                        $moreImageName = rand(111, 999) . "_" . $moreImage;

                        // Move the uploaded file to the destination folder
                        move_uploaded_file($moreImageTmp, "../assets/images/portfolio/" . $moreImageName);

                        // Insert the image details into the project_images table
                        $sql = mysqli_query($conn, "INSERT INTO `project_images` (`project_id`, `img`, `alt_text`) VALUES ('$id', '$moreImageName', '$moreImageAltText')");
                        // You may want to handle error checking and logging here
                    }
                }
            }
            header("Location: projects");
            exit;
        }
    }


}


if (isset($_GET['removeimg']) && !empty($_GET['removeimg'])) {
    $imgRemoveId = $_GET['removeimg'];
    $deleteImg = mysqli_query($conn, "DELETE FROM `project_images` WHERE `id` = '$imgRemoveId'");

}
?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <?php include ('includes/head.php') ?>
    <title>Add Project | Webkye</title>

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
                                <h4 class="mb-sm-0">Add Project</h4>

                                <div>
                                    <a href="projects" class="btn btn-warning" id="addproduct-btn"><i
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
                                            <label class="form-label" for="Service-title-input">Cover Image</label>
                                            <input type="text" class="form-control d-none" id="Service-id-input"
                                                name="id" value="<?php echo $id ?>">
                                            <input type="file" class="form-control" name="cover" <?php echo isset($_GET['id']) ? "" : "required" ?>>
                                            <?php
                                            if ($cover != '') {
                                                ?>
                                                <img src="../assets/images/portfolio/<?php echo $cover; ?>" class="mt-2"
                                                    alt="" width="100px">
                                            <?php } ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Cover Alt Text</label>
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="cover_alt_text" value="<?php echo $cover_alt_text ?>"
                                                placeholder="Enter Alt Text" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Project Title</label>
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="heading" value="<?php echo $heading ?>"
                                                placeholder="Enter project title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="Service-title-input">Sub Title</label>
                                            <input type="text" class="form-control" id="service-title-input"
                                                name="subheading" value="<?php echo $subheading ?>"
                                                placeholder="Enter project sub title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Short Description</label>
                                            <textarea name="short_desc" placeholder="Write a short description..."
                                                class="form-control" required><?php echo $short_desc ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="desc" placeholder="Write a description..."
                                                class="form-control" required><?php echo $desc ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Client Name</label>
                                            <input type="text" class="form-control" name="client_name"
                                                value="<?php echo $client_name ?>" placeholder="Client Name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Project Date</label>
                                            <input type="date" class="form-control" name="date"
                                                value="<?php echo $date ?>" placeholder="Client Name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Project URL</label>
                                            <input type="url" class="form-control" id="service-icon-input"
                                                name="project_url" value="<?php echo $project_url ?>"
                                                placeholder="Past url...">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Project Category</label>
                                            <select name="cat" id="" class="form-control">
                                                <option value="" selected disabled>- Select -</option>
                                                <option value="UI/UX" <?php echo ($cat == "UI/UX") ? "selected" :""; ?>>UI/UX</option>
                                                <option value="website" <?php echo ($cat == "website") ? "selected" :""; ?>>Website
                                                </option>
                                                <option value="graphic" <?php echo ($cat == "graphic") ? "selected" :""; ?>>Graphic Design</option>
                                                <option value="Videos" <?php echo ($cat == "Videos") ? "selected" :""; ?>>Video Editing</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label" for="service-icon-input">More Images</label>
                                                <a id="add-img" class="btn btn-primary  btn-sm"
                                                    style="cursor: pointer;">+ Add</a>
                                            </div>
                                            <div id="inputFields">
                                                <?php if (!isset($_GET['id'])) { ?>
                                                    <input type="file" class="form-control mb-3" name="moreImages[]" <?php echo isset($_GET['id']) ? "" : "required" ?>>
                                                    <input type="text" class="form-control" name="moreImages_alt_text[]"
                                                        placeholder="Alt-text" <?php echo isset($_GET['id']) ? "" : "required" ?>>
                                                    <?php
                                                } else {
                                                    $moreImg = mysqli_query($conn, "SELECT * FROM `project_images` WHERE `project_id` = '$id'");
                                                    while ($row = mysqli_fetch_assoc($moreImg)) {
                                                        ?>
                                                        <div class="remove-div">
                                                            <div class="input-group mt-3">
                                                                <input type="file" class="form-control me-2"
                                                                    name="moreImages[]">
                                                                <input type="text" class="form-control me-2"
                                                                    name="moreImages_alt_text[]"
                                                                    value="<?php echo $row['alt_text']; ?>"
                                                                    placeholder="Alt-text" required="">
                                                                <div class="input-group-append"><a
                                                                        href="?id=<?php echo $_GET['id'] ?>&removeimg=<?php echo $row['id'] ?>"
                                                                        class="btn btn-danger"
                                                                        onclick="return confirm('Are you sure you want to remove this image?');"><i
                                                                            class="bi bi-trash3"></i></a>
                                                                </div>
                                                            </div>
                                                            <img src="../assets/images/portfolio/<?php echo $row['img']; ?>"
                                                                class="mt-2 uploaded-image" alt="" width="100px">
                                                        </div>

                                                    <?php }
                                                } ?>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Enter tags (separated by
                                                commas)</label>
                                            <input type="text" class="form-control" id="service-icon-input" name="tags"
                                                value="<?php echo $tag ?>" placeholder="Enter Tags...">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Keywords</label>
                                            <input type="text" class="form-control" id="service-icon-input"
                                                name="meta_keywords" value="<?php echo $keywords ?>"
                                                placeholder="Enter Tags...">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="service-icon-input">Seo Url</label>
                                            <input type="text" class="form-control" id="service-icon-input"
                                                name="seo_url" value="<?php echo $seo_url ?>"
                                                placeholder="Enter seo_url...">
                                        </div>
                                        <!-- end card -->



                                        <div class="text-end mb-3">
                                            <?php
                                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                                ?>
                                                <input type="submit" name="UpdateProject" class="btn btn-success w-sm"
                                                    value="Update">
                                            <?php } else { ?>
                                                <input type="submit" name="addProject" class="btn btn-success w-sm"
                                                    value="Submit">
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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add input fields dynamically
            $('#add-img').click(function () {
                var inputFields = '<div class="remove-div"><div class="input-group mt-3">' +
                    '<input type="file" class="form-control me-2" name="moreImages[]" required>' +
                    '<input type="text" class="form-control me-2" name="moreImages_alt_text[]" placeholder="Alt-text" required>' +
                    '<div class="input-group-append">' +
                    '<button class="btn btn-danger remove-input" type="button"><i class="bi bi-trash3"></i></button>' +
                    '</div>' +
                    '</div></div>';
                $('#inputFields').append(inputFields);
            });

            // Remove input field when remove button is clicked
            $(document).on('click', '.remove-input', function () {
                $(this).closest('.remove-div').remove();
            });
        });
    </script>
</body>

</html>