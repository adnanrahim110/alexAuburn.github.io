<?php
$current_page = basename($_SERVER['PHP_SELF']);

if ($current_page == 'index.php') {
  $page_title = 'Home';
} elseif ($current_page == 'purchase.php') {
  $page_title = 'Purchase Book';
} elseif ($current_page == 'blogs.php') {
  $page_title = 'Blogs';
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title ?> - Alex Auburn</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link href="assets/lineicons-4.0-basic-free/web-font-files/lineicons.css" rel="stylesheet" />
</head>
