<?php include ("includes/conn.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("includes/head.php") ?>
  <title>Our Blogs | Webkye Digital Marketing Agency</title>
  <meta name="description"
    content="Stay ahead with Webkye's digital marketing blogs. Expert insights on SEO, web dev, design, video, social media, and more!">
  <meta name="keywords" content="Webkye, digital marketing blogs, SEO, web development, design, video, social media, expert insights.">
  <link rel="canonical" href="https://webkye.in/blogs">
</head>

<body>
  <!--  Start Header  -->
  <?php include ("includes/navbar.php") ?>
  <!--  End Header  -->

  <!--  Start blog details  -->
  <section class="blogs py__130">
    <div class="title__area m-auto text-center"> <!-- Title start-->
      <div class="transparent__btn">Our Blogs & Articles</div>
      <h1 class="fs-2 t__40 pt__30"> Read our Insights and Ideas</h1>
    </div> <!-- Title end-->
    <div class="container">
      <div class="wapper mt__50">
        <?php
        // Pagination variables
        $limit = 9; // Number of blogs per page
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
        $offset = ($currentPage - 1) * $limit; // Offset for SQL query
        
        // Fetch blogs with pagination
        $blogQuery = "SELECT * FROM `blogs` ORDER BY `timestamp` DESC LIMIT $limit OFFSET $offset";
        $blogResult = mysqli_query($conn, $blogQuery);

        while ($row = mysqli_fetch_assoc($blogResult)) {
          ?>
          <div class="blg__card"> <!-- Card start -->
            <div class="card__header">
              <ul class="d-flex align-items-center gap-4">
                <li> <i class="fa fa-calendar"></i> <?php echo date('d F, Y', strtotime($row['timestamp'])); ?></li>
              </ul>
              <h3 class="t__22"> <a href="blog-detail/<?php echo $row['seo_url']; ?>"><?php echo $row['title']; ?></a> </h3>
            </div>
            <img src="assets/img/blogs/<?php echo $row['cover']; ?>" alt="<?php echo $row['cover_alt_text'] ?>"
              class="w-100 img-fluid">
            <div class="card__footer">
              <p><?php echo $row['short_desc']; ?></p>
              <div class="pt-2"> <a href="blog-detail/<?php echo $row['seo_url']; ?>" class=""> More Details <i
                    class="ti-arrow-top-right"></i></a></div>
            </div>
          </div> <!-- Card end -->
          <?php
        }
        ?>
      </div>

      <div class="custom__pagination w-100 d-flex justify-content-center"> <!-- Pagination start -->
        <ul>
          <?php
          // Calculate total number of pages
          $totalBlogsQuery = "SELECT COUNT(*) AS total FROM `blogs`";
          $totalBlogsResult = mysqli_query($conn, $totalBlogsQuery);
          $totalBlogsRow = mysqli_fetch_assoc($totalBlogsResult);
          $totalPages = ceil($totalBlogsRow['total'] / $limit);

          // Display pagination links
          for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li" . ($i == $currentPage ? ' class="active-page"' : '') . "><a href='blogs/$i'>$i</a></li>";
          }
          ?>
        </ul>
      </div> <!-- Pagination end -->
    </div>
  </section>

  <!--  End blog details  -->


  <!--  start Footer -->
  <?php include ("includes/footer.php") ?>
  <!--  End Footer -->

  <!--  start Footer -->
  <?php include ("includes/foot.php") ?>
  <!--  End Footer -->
</body>

</html>