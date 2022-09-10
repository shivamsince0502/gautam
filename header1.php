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
                    <a class="page-scroll" href="index.php#team">Works Gallary</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="">Work with us</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="index.php#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#blog">Contact</a>
                  </li>
                  
                  <?php 
                                     if(isset($_SESSION['email']))
                                     {
                                        ?>
                                    <h6 class="text-white mx-2"> Welcome <br><?php echo $_SESSION['name']; ?></h6>
                                    <button type="button" class="btn btn-primary"><a href="./logout.php" class="text-white">Log out</a></button>
                                    <?php
                                     }
                                     else
                                     {

                                     ?>

                                    <button type="button" class="btn btn-primary"><a href="./login.php" class="text-white">Login</a>
                                        </button>

                                        <?php
                                     }
                                     ?>
                                     
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