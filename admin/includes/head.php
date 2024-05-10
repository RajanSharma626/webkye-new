<?php
if(isset($_SESSION["Admin_login"]) && $_SESSION["Admin_login"] == true)
{

}else
{
    header("location: login");
    die();
}
?>
<meta charset="utf-8">
<!-- FavIcon -->
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
<link rel="manifest" href="assets/images/favicons/site.webmanifest">
<link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!-- jsvectormap css -->
<link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

<!--Swiper slider css-->
<link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

<!-- gridjs css -->
<link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

<!-- Layout config Js -->
<script src="assets/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!-- Icons Css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/icofont.min.css">
<!-- App Css-->
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
<!-- custom Css-->
<link href="assets/css/custom.min.css" rel="stylesheet" type="text/css">
<!-- icon Css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">