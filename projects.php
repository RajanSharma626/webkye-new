<?php include ("includes/conn.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title>Our Portfolio | Webkye</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->


  <!--  Start Projects 1 -->
  <section class="projects_1 all_projects overflow-hidden py__130">
    <div class="container">
      <div class="title__area"> <!-- Title start-->
        <div class="transparent__btn">View Our Latest Project</div>
        <h2 class="t__40 pt__30"> Our Latest Work</h2>
      </div> <!-- Title end-->

      <div class="row mt__50">
        <?php
        // Pagination variables
        $limit = 10; // Number of projects per page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
        $offset = ($currentPage - 1) * $limit; // Offset for SQL query
        
        // Fetch projects with pagination
        $projectQuery = "SELECT * FROM `project` ORDER BY `id` DESC LIMIT $limit OFFSET $offset";
        $projectResult = mysqli_query($conn, $projectQuery);

        while ($row = mysqli_fetch_assoc($projectResult)) {
          ?>
          <div class="col-lg-6 mb-4"> <!-- card start -->
            <div class="prj__card">
              <img src="assets/img/projects/<?php echo $row['cover'] ?>" alt="<?php echo $row['alt_text'] ?>">
              <div class="card__footer">
                <div>
                  <h5 class="t__22"><?php echo $row['title'] ?></h5>
                  <p class="last"><?php echo $row['cat'] ?></p>
                </div>
                <span class="border__full"></span>
                <div class="client__name fw-bold"> <small><a href="portfolio/<?php echo $row['seo_url'] ?>">View More</a></small>
                  <!-- <p></p> -->
                </div>
              </div>
            </div>
          </div> <!-- card end -->
          <?php
        }
        ?>
      </div>

      <div class="custom__pagination w-100 d-flex justify-content-center"> <!-- Pagination start -->
        <ul>
          <?php
          // Calculate total number of pages
          $totalProjectsQuery = "SELECT COUNT(*) AS total FROM `project`";
          $totalProjectsResult = mysqli_query($conn, $totalProjectsQuery);
          $totalProjectsRow = mysqli_fetch_assoc($totalProjectsResult);
          $totalPages = ceil($totalProjectsRow['total'] / $limit);

          // Display pagination links
          for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li" . ($i == $currentPage ? ' class="active-page"' : '') . "><a href='portfolio/$i'>$i</a></li>";
          }
          ?>
        </ul>
      </div> <!-- Pagination end -->
    </div>


  </section>

  <!--  End Projects 1 -->


  <!-- partner start -->
  <div class="container pb__130">
    <div class="partner">
      <div>
        <div class="  partner__wapper">
          <div class="partner__content">
            <div class="slide"><img src="assets/img/about/cmp1.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp2.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp3.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp4.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp5.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp1.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp2.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp3.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp4.svg" alt="alt" class="partner__logo"></div>
            <div class="slide"><img src="assets/img/about/cmp5.svg" alt="alt" class="partner__logo"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- partner End -->


  <!--  start Footer -->
  <?php include ("includes/footer.php") ?>
  <!--  End Footer -->

  <!--  start Footer -->
  <?php include ("includes/foot.php") ?>
  <!--  End Footer -->

</body>

</html>