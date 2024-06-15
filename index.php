<?php include_once 'includes/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>News/Article Website </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    
    <!-- links -->
    <?php include_once 'includes/csslinks.php' ?>
    <!-- links -->
  </head>
  <body>
    <!-- Navigation -->
    <?php include_once 'includes/nav.php' ?>
    <!-- Navigation -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='assets/img/carousel-2.jpg' style='width:100%; height:440px;' >">
          <img class="img-fluid" src="assets/img/carousel-2.jpg" style='width:100%; height:600px;' alt="">
          <div class="owl-carousel-inner">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-10 col-lg-8">
                  <p class="fs-5 fw-medium text-white mb-4 pb-3">Welcome to</p>
                  <h1 class=" text-success animated slideInDown">News/Article Website </h1>
                  <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->
    <!-- products Start -->
    <div id="news" class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h1 class="mb-4">MOST READ</h1>
          <h6 class="text-primary"><a href="products.php"> View All </a></h6>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded overflow-hidden">
            <img class="img-fluid " src="assets/img/articles/2.webp" style="width:100%; height:300px;" alt="" ></a>
            <div class="position-relative p-4 pt-0">
              <div class="service-icon">
                <i class="fa fa-pen fa-3x"></i>
              </div>
              <h4 class="mb-3">The False Escapism of Soft Girls and Tradwives</h4>
              <p>4 MIN READ</p>
              <a class="small fw-medium" href="#">FEBRUARY 28, 2024 • 9:06 AM EST<i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item rounded overflow-hidden">
          <img class="img-fluid " src="assets/img/articles/1.webp" style="width:100%; height:300px;" alt="" ></a>
          <div class="position-relative p-4 pt-0">
            <div class="service-icon">
              <i class="fa fa-pen fa-3x"></i>
            </div>
            <h4 class="mb-3">Texas Wildfires Declared as Spread Disaster  .</h4>
            <p>4 MIN READ</p>
            <a class="small fw-medium" href="#">FEBRUARY 28, 2024 • 9:06 AM EST<i class="fa fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded overflow-hidden">
        <img class="img-fluid " src="assets/img/articles/3.webp" style="width:100%; height:300px;" alt="" ></a>
        <div class="position-relative p-4 pt-0">
          <div class="service-icon">
            <i class="fa fa-pen fa-3x"></i>
          </div>
          <h4 class="mb-3">There's No Universal Case of Long COVID</h4>
          <p>4 MIN READ</p>
          <a class="small fw-medium" href="#">FEBRUARY 28, 2024 • 9:06 AM EST<i class="fa fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- products End -->
<div id="articles" class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
<div class="container px-lg-0">
  <div class="row mx-lg-0">
    <div class="col-12 py-5 wow fadeIn" data-wow-delay="0.1s">
      <h6 class="text-primary">Latest Updates</h6>
      <h1 class="mb-4">Popular Articles</h1>
      <div class="row">
        <!-- Article 1 -->
        <div class="col-md-4 mt-2  d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Boiling tap water can remove 80 per cent of the microplastics in it</h5>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <!-- Article 2 -->
        <div class="col-md-4 mt-2  d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Dishabituation: How to trick your brain to find more joy in life</h5>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <!-- Article 3 -->
        <div class="col-md-4 mt-2  mt-2 d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">We finally know why live music makes us so emotional</h5>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <!-- Article 4 -->
        <div class="col-md-4 mt-2  d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Electronic music appears to alter our state of consciousness</h5>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <!-- Article 5 -->
        <div class="col-md-4 mt-2  d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">How entropy and equilibrium can help explain consciousness</h5>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <!-- Article 6 -->
        <div class="col-md-4 mt-2  d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Dishabituation: How to trick your brain to find more joy in life</h5>
              <a href="" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature Start -->
<!-- Editor Choice Start -->
<div id="editor" class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container feature px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="p-lg-5 ps-lg-0">
          <h6 class="text-primary">Editor Choice!</h6>
          <h1 class="mb-4">Read More About These!</h1>
          
          <div class="row g-4">
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-landmark text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0"><a href="#">Politics</a></h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-cloud text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0">Weather</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-medal text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0">Sports</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-business-time text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0">Business</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-flask text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0">Science</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-satellite text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0">Space</h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-seedling text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0">Environment </h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="btn-lg-square bg-primary rounded-circle">
                  <i class="fa fa-virus text-white"></i>
                </div>
                <div class="ms-4">
                  <h5 class="mb-0">Health</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 300px;">
        <div class="position-relative h-100">
          <img class="position-absolute img-fluid w-100 h-100" src="assets/img/articles/1.jpg" style="object-fit: cover;" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Editor Choice End -->

<!-- footer -->
<?php include_once 'includes/footer.php' ?>
<!-- footer -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- js links -->
<?php include_once 'includes/jslinks.php' ?>
<!-- js links -->

</body>
</html>