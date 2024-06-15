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
      <div class="owl-carousel-item position-relative">
        <img  src="assets/img/carousel-2.jpg"  style="width:100%; height:640px;"  alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex " style="background: rgba(0, 0, 0, .2);">
            <div class="container mt-5">
              <div class="col-lg-12 d-flex justify-content-around px-5">
                <div class="section-heading">
                  <h2 class="text-white mt-5">Login</h2>
                  
                  <div>
                    <h4 class="text-white">Enter your login Id and password to login </h4>
                  </div>
                  <div class="row ">
                    <?php if(isset($_SESSION['MSG'])){echo $_SESSION['MSG']; unset($_SESSION['MSG']);} ?>
                    <div class="form-row justify-content-lg-center justify-content-md-center">
                      <div class="form-group col-lg-12 mt-3 ">
                        <div id="info"> </div>
                        <div id="loading" style="display:none;" class="card">
                          <div class="card-body">
                            <span> <i class="fas fa-spinner"></i> </span> <strong> Loading </strong>.....Please Wait....
                            <span class="glyphicon glyphicon-time"></span>
                          </div>
                        </div>
                      </div>
                      <form id="myForm" action="" method="">
                        <div class="row">
                          <div class="col-lg-10">
                            <fieldset>
                              <label class="text-dark"  for="login_id">Login ID</label>
                              <input type="text" class="form-control border-dark" name="login_id" id="login_id" placeholder="Enter Your User Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-10 mt-3">
                            <fieldset>
                              <label class="text-dark" for="password">Password</label>
                              <input type="password" name="password" id="password" placeholder="Enter Your Password" class="form-control border-dark" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-10 mt-3 text-center">
                            <fieldset>
                              <input type="hidden" name="login" value="1" />
                              <button class="btn btn-success mt-4" type="submit" id="saveBtn" name="login" value="Login">Login
                              </button>
                              <input type="reset" class="btn btn-danger mt-4 pl-5 " />
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- Carousel End -->
    <!-- footer -->
    <?php include_once 'includes/footer.php' ?>
    <!-- footer -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/jquery-sticky/jquery.sticky.js"></script>
    <script type="text/javascript" src="assets/fancybox/jquery.fancybox.min.js"></script>
    <link href="assets/fontawesome/js/all.min.js" rel="stylesheet">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script>
    $(function(){
    $("#myForm").submit(function()
    {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    $("#info").html("");
    $("#loading").show();
    $("#saveBtn").prop('disabled', true);
    $.ajax({
    url: 'account-controller.php',
    type: 'post',
    data: $('#myForm').serialize(),
    success: function(response)
    {
    $("#loading").hide();
    $("#info").html(response);
    $("#saveBtn").prop('disabled', false);
    }
    });
    return false;
    });
    });
    </script>
    
  </body>
</html>