<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">

  <!--====== Title ======-->
  <title>Puttam : booknow</title>

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
       $("#book").click(function() {
           $("#book").html("Submitting Data...");
            var name = $("#name").val();
            var vanue = $("#vanue").val();
            var event_day_start = $("#event_day_start").val();
            var event_day_end = $("#event_day_end").val();
            var massage= $("#massage").val();
          // alert(name+vanue+event_day_start+event_day_end+massage);

            

            $.ajax({
                type: 'post',
                url: 'book_now_action.php',
                data: {
                    'name': name,
                    'vanue':vanue,
                    'event_day_start':event_day_start,
                    'event_day_end':event_day_end,
                    'massage':massage,
               

                },

                success: function(data) {
                    alert(data);
                    $("#book").html("Submit");
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

  <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Booking form</h3>
            </div>
            <form action="">
                <div class="row g-3">
                    <div class="col-md-6 mb-4">
                    <label class="form-label" for="form2Example11">Name</label>

                        <input type="text" id="name" name="name" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6 mb-4">
                    <label class="form-label" for="form2Example11">Vanue</label>
                        <input type="text" id="vanue" name="vanue" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6 mb-4">
                    <label class="form-label" for="form2Example11">Event Day Start</label>
                        <input type="date" id="event_day_start" name="event_day_start" class="form-control" placeholder="Event Day Start">
                    </div>
                    <div class="col-md-6 mb-4">
                    <label class="form-label" for="form2Example11">Event Day End</label>
                        <input type="date" id="event_day_end" name="event_day_end" class="form-control" placeholder="Event Day End">
                    </div>
          
                    <div class="col-12">
                        <textarea class="form-control" id="massage" name="massage" placeholder="massage"></textarea>
                    </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" id="book" name="book" class="btn btn-primary float-end">Book Now</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="mt-5">

</div>
 
  <?php
  include("./footer.php");
  ?>


  <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
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