

<?php if (isset($_SESSION['SESS_UTYPE'])): ?>
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
  <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
    <h2 class="m-0 text-primary">Multilingual News/Article Website</h2>
  </a>
  <p class=" text-danger mt-2 pt-2"> Welcome <b><?=(isset($_SESSION['SESS_NAME'])?ucfirst($_SESSION['SESS_UTYPE'])." (".ucfirst($_SESSION['SESS_NAME']).")":"Visitor")?></b> </p>
  
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="index.php" class="nav-item nav-link">Home</a>
      <a href="#news" class="nav-item nav-link">News</a>
      <a href="#articles" class="nav-item nav-link">Articles</a>
      <a href="#editor" class="nav-item nav-link">Editor Choice</a>
    </div>
    <a href="logout.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" data-bs-toggle="dropdown"> <i class="fa fa-arrow-right ms-3"></i> Logout</a>
  </div>
</nav>
<!-- Navbar End -->
<?php endif ?>

<?php if (!isset($_SESSION['SESS_UTYPE'])): ?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
  <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
    <h2 class="m-0 text-primary">Multilingual News/Article Website </h2>
  </a>
  <p class=" text-danger mt-2 pt-2"> Welcome <b><?=(isset($_SESSION['SESS_NAME'])?ucfirst($_SESSION['SESS_UTYPE'])." (".ucfirst($_SESSION['SESS_NAME']).")":"Visitor")?></b> </p>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="index.php" class="nav-item nav-link">Home</a>
      <a href="#news" class="nav-item nav-link">News</a>
      <a href="#articles" class="nav-item nav-link">Articles</a>
      <a href="#editor" class="nav-item nav-link">Editor Choice</a>
    </div>
    <div class="nav-item dropdown">
      <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" data-bs-toggle="dropdown"> <i class="fa fa-arrow-right ms-3"></i> Join Us</a>
      <div class="dropdown-menu bg-light p-0">
        <a href="login.php" class="dropdown-item">Sign In</a>
        <a href="signup-user.php" class="dropdown-item">Sign Up</a>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar End -->
<?php endif ?>