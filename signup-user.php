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
            <div class="col-lg-12 d-flex justify-content-around py-2 px-5">
              <div class="section-heading">
                <center>
                <h2 class="text-dark mt-2">Register</h2>
                <div>
                  <h4 class="text-dark mb-2">(User Sign Up )</h4>
                </div></center>
                <div class="row ">
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
                    <form id="myForm" class="php-email-form mt-2" method="" action="">
                      <div class="row">
                        
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                            <label class="text-white"  for="name">Name</label>
                            <input type="text" name="name" class="form-control border-dark" placeholder="Your Name" required>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                            <label class="text-white"  for="login_id">Login ID</label>
                            <input name="login_id" type="text" class="form-control border-dark" placeholder="Your Login Id" required/>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                            <label class="text-white"  for="Email">Password</label>
                            <input type="Password" name="pw" class="form-control border-dark" placeholder="Your Password" required>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                            <label class="text-white"  for="Email">Email</label>
                            <input type="email" name="email" class="form-control border-dark" placeholder="Your Email" required>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                            <label class="text-white"  for="contact">Phone No</label>
                            <input name="contact" type="number" class="form-control border-dark" placeholder="Your Contact" required>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <div class="form-group">
                            <label class="text-white"  for="address">Address</label>
                            <input type="text" name="address" class="form-control border-dark" placeholder=" Your Address" required>
                          </div>
                        </div>
                        <div class="col-md-12 text-center">
                          <input type="hidden" name="role" value="3" />
                          <input type="hidden" name="register" value="1" />
                          <input class="btn btn-success m-2  mb-5" type="submit" id="saveBtn" name="register" value="Register">
                          <input type="reset" class="btn btn-danger m-2 mb-5" value="Reset">
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
  <!-- js links -->
  <?php include_once 'includes/jslinks.php' ?>
  <!-- js links -->
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