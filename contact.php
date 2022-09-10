<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">

  <!--====== Title ======-->
  <title>Puttam : contact</title>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

</script>
  <script>
  $(document).ready(function() {
     $("#btn").click(function() {
         $("#btn").html("Submitting Data...");
          var fname = $("#fname").val();
          var lname = $("#lname").val();
          var email = $("#email").val();
          var phone = $("#phone").val();
          var msg= $("#msg").val();
        // alert(fname+lname+email+phone+msg);

          

          $.ajax({
              type: 'post',
              url: 'contact_action.php',
              data: {
                  'fname': fname,
                  'lname':lname,
                  'email':email,
                  'phone':phone,
                  'msg':msg,
             

              },

              success: function(data) {
                  alert(data);
                  $("#btn").html("Submit");
                  $("#msg").html(data);
                  $("#msg").slideDown("slow");
                  $("#msg").slideUp(8000);
                  location.reload();
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

  <header class="header-area">
    <div class="navbar-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.php">
              <img src="./assets/images/puttam-logo.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="index.php#features">Photographers</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="index.php#facts">Why us</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="index.php#team">works Gallary</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="index.php#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#blog">Contact</a>
                  </li>
                  <button type="button" class="btn btn-primary"><a href="./login.php" class="text-white">Login</a>
                                        </button>
                </ul>
              </div> <!-- navbar collapse -->

              
            </nav> <!-- navbar -->
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- navbar area -->

    <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/home-bg.png)">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="header-hero-content text-center">



            </div> <!-- header hero content -->
          </div>
        </div> <!-- row -->

      </div> <!-- container -->
      <div id="particles-1" class="particles"></div>
    </div> <!-- header hero -->
  </header>

  <!--====== HEADER PART ENDS ======-->

  <!--====== BRAMD PART START ======-->

  <div class="container">
                <div class="row ">
                    <div class="col-lg-7 mx-auto">
                        <div class="card mt-2 mx-auto p-4 bg-light">
                            <div class="card-body bg-light">

                                <div class="container">
                                    <form id="contact-form" role="form">

                                        <div class="controls">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name">Firstname *</label>
                                                        <input id="fname" type="text" name="name" class="form-control" placeholder="Enter your firstname" required="required" data-error="Firstname is required.">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Lastname *</label>
                                                        <input id="lname" type="text" name="surname" class="form-control" placeholder="Enter your lastname" required="required" data-error="Lastname is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email *</label>
                                                        <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email" required="required" data-error="Valid email is required.">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name">phone *</label>
                                                        <input id="phone" type="number" name="number" class="form-control" placeholder="Enter your phone no." required="required" data-error="phone no. is required.">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_message">Message *</label>
                                                        <textarea id="msg" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                    </div>

                                                </div>


                                                <div class="col-md-12">

                                                    <input type="submit" id="btn" class="btn btn-primary btn-send  pt-2 btn-block
                                                                         " value="Send Message">

                                                </div>

                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- /.8 -->

                    </div>
                    <!-- /.row-->

                </div>
            </div>

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