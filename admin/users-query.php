<?php
include ("includes/connection.php");
include ("includes/function.php");
// ================== Update Status and Delete =============
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($conn, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($conn, $_GET['id']);
        $delete = "DELETE FROM `contact_form` WHERE `id`='$id'";
        $res = mysqli_query($conn, "$delete");
        if ($res) {
            header("Location: users-query");
        }
    }
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>
    <?php include ('includes/head.php') ?>
    <title>Users Query | WebKye</title>
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
                                <h4 class="mb-sm-0">Users Query</h4>
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
                                                    <th>User Name</th>
                                                    <th><i class="bi bi-phone"></i> Phone No.</th>
                                                    <th><i class="bi bi-envelope"></i> Email</th>
                                                    <th>Subject</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">

                                                <?php
                                                $query = mysqli_query($conn, "SELECT * FROM `contact_form` ORDER BY `id` DESC");
                                                $sno = 1;
                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <?php echo $sno; ?>
                                                        </th>
                                                        <td class="user_name">
                                                            <?php echo $row['name'] ?>
                                                        </td>
                                                        <td class="email_id">
                                                            <?php echo $row['phone'] ?>
                                                        </td>
                                                        <td class="email_id">
                                                            <?php echo $row['email'] ?>
                                                        </td>
                                                        <td class="email_id">
                                                            <?php echo $row['subject'] ?>
                                                        </td>
                                                        <td class="date">
                                                            <?php
                                                            // Convert timestamp string to DateTime object
                                                            $timestamp_str = $row['timestamp'];
                                                            $timestamp = new DateTime($timestamp_str);

                                                            // Format the DateTime object
                                                            $formatted_timestamp = $timestamp->format('d M, h:i A');

                                                            echo $formatted_timestamp;
                                                            ?>

                                                        </td>
                                                        <td class="status">
                                                            <?php
                                                            $readStatus = "bg-danger-subtle text-danger";
                                                            $MailIcon = "bi-envelope-fill";

                                                            if ($row['status'] == 1) {
                                                                $readStatus = "bg-primary-subtle text-primary";
                                                                $MailIcon = "bi-envelope-open";
                                                            }

                                                            ?>
                                                            <span class="badge <?php echo $readStatus; ?>  envelopeIcon"
                                                                id="envelopeIcon<?php echo $row['id'] ?>"
                                                                data-bs-toggle="modal" data-bs-target="#myModal"
                                                                style="cursor: pointer;"
                                                                data-mailId="<?php echo $row['id'] ?>"><i
                                                                    class="bi <?php echo $MailIcon ?>"
                                                                    id="mailIcon<?php echo $row['id'] ?>"></i></span>
                                                            <a href="?type=delete&id=<?php echo $row['id'] ?>"
                                                                class="badge bg-danger-subtle text-danger">Delete</a>
                                                        </td>

                                                    </tr>
                                                    <?php $sno++;
                                                } ?>
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

            <!-- Default Modals -->
            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
                style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Mail Box</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="fs-15" id="mailerName">

                            </h5>
                            <p class="text-muted" id="mailMessage"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary " id="markReadBtn"><i
                                    class="bi bi-envelope-open"></i> Mark Read</button>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

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

    <!-- list.js min js -->
    <!-- <script src="assets/libs/list.js/list.min.js"></script> -->
    <!-- <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script> -->

    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- <script src="assets/js/backend/users-list.init.js"></script> -->

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // JavaScript to handle fetching data and updating modal
        $('.envelopeIcon').on('click', function () {
            var mailId = this.getAttribute('data-mailId');
            $.ajax({
                url: 'ajax/fetch_mail.php',
                type: 'POST',
                data: { mailId: mailId },
                success: function (response) {
                    if (typeof response === 'string') {
                        response = JSON.parse(response);
                    }
                    $("#markReadBtn").attr("data-mailId", response.id);
                    $('#mailerName').text("Message By " + response.name);
                    $('#mailMessage').text(response.message);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $("#markReadBtn").on('click', function () {
            id = this.getAttribute('data-mailid');
            $.ajax({
                url: 'ajax/updateReadStatus.php',
                type: 'POST',
                data: { mailId: id, MarkRead: true },
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.success == true) {
                        console.log($("envelopeIcon" + id))
                        $("#envelopeIcon" + id).removeClass("bg-danger-subtle text-danger")
                        $("#mailIcon" + id).removeClass("bi-envelope-fill")
                        $("#envelopeIcon" + id).addClass("bg-primary-subtle text-primary")
                        $("#mailIcon" + id).addClass("bi-envelope-open")
                        $('#myModal').modal('hide');
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        })
    </script>
</body>

</html>