<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<header>
  <nav class="navbar navbar-sticky navbar-expand-lg"
    style="<?= ($current_page == 'purchase.php') ? 'background-color: #000' : '' ?>">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/LOGO-WHITE.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end ml-auto mr-5">
          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="#author">Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="#about">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'blogs.php') ? 'active' : '' ?>" href="blogs.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="#reviews">Reviews</a>
          </li>
        </ul>
        <div class="header-social-btns">
          <ul class="header-socials">
            <li><a href="#"><i class="lni lni-facebook"></i></a></li>
            <li><a href="#"><i class="lni lni-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
