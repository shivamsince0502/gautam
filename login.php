<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">

  <!--====== Title ======-->
  <title>Puttam : Login</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

  <!--====== Animate CSS ======-->
  <link rel="stylesheet" href="assets/css/animate.css">

  <!--====== Magnific Popup CSS ======-->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">

  <!--====== Slick CSS ======-->
  <link rel="stylesheet" href="assets/css/slick.css">

  <!--====== Line Icons CSS ======-->
  <link rel="stylesheet" href="assets/css/LineIcons.css">

  <!--====== Font Awesome CSS ======-->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!--====== Bootstrap CSS ======-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!--====== Default CSS ======-->
  <link rel="stylesheet" href="assets/css/default.css">

  <!--====== Style CSS ======-->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
       $("#log").click(function() {
           $("#log").html("Login Data...");
            var email = $("#email").val();
            var password = $("#password").val();

          
           
             $.ajax({
                type: 'post',
                url: 'login_action.php',
                data: {
                   'email':email,
                    'password':password,
                },
                    
                 success: function(data) {
                    alert(data);
                    $("#log").html("Submit");
                    $("#msg").html(data);
                    $("#msg").slideDown("slow");
                    $("#msg").slideUp(8000);
                    window.location="index.php";
                }

            });

        });
    });
    </script>
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


  <!--====== PRELOADER PART START ======-->

  <div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====== PRELOADER PART ENDS ======-->

  <!--====== HEADER PART START ======-->

  <?php
    include("./header1.php");
    ?>

  <!--====== HEADER PART ENDS ======-->

  <!--====== BRAMD PART START ======-->

  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <img src="./assets/images/man-with-camera.jpg" alt="image">
              </div>
              <div class="col-lg-6 ">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
    style="width: 185px;" alt="logo"> -->
                    <h4 class="mt-1 mb-5 pb-1">Log in</h4>
                  </div>

                  <form>
                    <p></p>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Email id</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="" />

                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Password</label>
                      <input type="password" id="password" name="password" class="form-control" />

                    </div>

                    
                    <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success mx-3" id="log" name="log">log in</button>
                    <a class="text-muted" href="./forgotpsd.php">Forgot password?</a>

                </div>
                    

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2 mx-1">Don't have an account?</p>
                      <button type="button" class="btn btn-outline-danger"><a href="./register.php">create account</a></button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== BLOG PART ENDS ======-->

  <!--====== FOOTER PART START ======-->

  <?php
  include("./footer.php");
  ?>


  <!--====== FOOTER PART ENDS ======-->

  <!--====== BACK TOP TOP PART START ======-->

  <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

  <!--====== BACK TOP TOP PART ENDS ======-->

  <!--====== PART START ======-->

  <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

  <!--====== PART ENDS ======-->




  <!--====== Jquery js ======-->
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

  <!--====== Bootstrap js ======-->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!--====== Plugins js ======-->
  <script src="assets/js/plugins.js"></script>

  <!--====== Slick js ======-->
  <script src="assets/js/slick.min.js"></script>

  <!--====== Ajax Contact js ======-->
  <script src="assets/js/ajax-contact.js"></script>

  <!--====== Counter Up js ======-->
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>

  <!--====== Magnific Popup js ======-->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>

  <!--====== Scrolling Nav js ======-->
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/scrolling-nav.js"></script>

  <!--====== wow js ======-->
  <script src="assets/js/wow.min.js"></script>

  <!--====== Particles js ======-->
  <script src="assets/js/particles.min.js"></script>

  <!--====== Main js ======-->
  <script src="assets/js/main.js"></script>

</body>

</html>