<?php 
include ("includes/connection.php"); 
include ("includes/function.php");
// ================== Update Status and Delete =============
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($conn, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($conn, $_GET['id']);
        $delete = "DELETE FROM `team` WHERE `id`='$id'";
        $res = mysqli_query($conn, "$delete");
        if ($res) {
            header("Location: team");
        }
    }
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>
    <title>Team | Webkye</title>
    <?php include ('includes/head.php') ?>
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
                                <h4 class="mb-sm-0">Team List</h4>

                                <div>
                                    <a href="add-member" class="btn btn-success" id="addproduct-btn"> Add
                                        Member</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



                    <div class="row" id="usersList">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        S.No.
                                                    </th>
                                                    <th class="sort desc" data-sort="user_name"> Name</th>
                                                    <th class="sort" data-sort="date">Designation</th>
                                                    <th data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <?php
                                                $team = mysqli_query($conn, "SELECT * FROM `team` ORDER BY `name`");
                                                $sno = 1;
                                                while ($row = mysqli_fetch_assoc($team)) {
                                                    ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <?php echo $sno ?>
                                                        </th>
                                                        <td class="user_name">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div class="flex-shrink-0">
                                                                    <img src="../assets/images/team/<?php echo $row['profile'] ?>" alt=""
                                                                        class="avatar-xs rounded-circle user-profile-img">
                                                                </div>
                                                                <span class="user-name"><?php echo $row['name'] ?></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <?php echo $row['designation'] ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <a href="add-member?id=<?php echo $row['id'] ?>"
                                                                    class="badge bg-success-subtle text-success">Edit</a>
                                                                <a href="?type=delete&id=<?php echo $row['id'] ?>"
                                                                    class="badge bg-danger-subtle text-danger">Delete</a>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © WebKye.
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


    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="assets/js/backend/users-list.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>