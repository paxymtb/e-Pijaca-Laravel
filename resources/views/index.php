
  <!doctype html>
  <html lang="en">
    <head>
      <title>е-Пијаца</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="Free-Template.co" />
      <link rel="shortcut icon" href="ftco-32x32.png">
      
      <link rel="stylesheet" href="css/custom-bs.css">
      <link rel="stylesheet" href="css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="fonts/line-icons/style.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/animate.min.css">

      <!-- MAIN CSS -->
      <link rel="stylesheet" href="css/style.css">    
    </head>
    <body id="top">

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
      

  <div class="site-wrap">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->
      

      <!-- NAVBAR -->
      <header class="site-navbar mt-3">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="site-logo col-6"><a href="index.php">е-пијаца</a></div>
           
            <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link active">Почетна</a></li>     
              <li><a href="product-listings">Производи</a></li>           
              <li><a href="about">О нама</a></li>           
              <li><a href="contact">Контакт</a></li>
              <li class="d-lg-none"><a href="post-product"><span class="mr-2">+</span> Постави производ</a></li>
              <li class="d-lg-none"><a href="login">Улогуј се</a></li>
            </ul>
          </nav>
            
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
              <div class="ml-auto">
                <a href="post-product" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Постави производ</a>
                <a href="login" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Улогуј се</a>
              </div>
              <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>

          </div>
        </div>
      </header>

      <!-- HOME -->
      <section class="home-section section-hero overlay bg-image" style="background-image: url('images/back_ground.jpg');" id="home-section">

        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
              <div class="mb-5 text-center">
                <h1 class="text-white font-weight-bold">Прва е-пијаца у Србији.</p>
              </div>
              <form method="post" class="search-jobs-form">
                <div class="row mb-5">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <input type="text" class="form-control form-control-lg" placeholder="Шта тражите.">
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Изабери категорију">
                      <option>Воће</option>
                      <option>Поврће</option>
                      <option>Сочарство</option>
                      <option></option>
                      <option></option>
                    
                    </select>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Изаберите град">
                      <option>Београд</option>
                      <option>Крагујевац</option>
                    </select>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Претражи</button>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 popular-keywords">
                    <!-- <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Претражи</button> -->
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <a href="#next" class="scroll-button smoothscroll">
          <span class=" icon-keyboard_arrow_down"></span>
        </a>

      </section>
      
      <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/back_ground.jpg');">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-2 text-white">Изаберите регион</h2>
              <!-- <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p> -->
            </div>
          </div>
          <div class="mappAddInfos">
            <div class="map">
            <?php include("images/Srbija.svg"); ?>
            </div> 
            <div class="infos">
            <span id="infosRegion"></span>
            </div>
            </div>
          <!-- <div class="row pb-0 block__19738 section-counter">

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="1930">0</strong>
              </div>
              <span class="caption">Candidates</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="54">0</strong>
              </div>
              <span class="caption">Jobs Posted</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="120">0</strong>
              </div>
              <span class="caption">Jobs Filled</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="550">0</strong>
              </div>
              <span class="caption">Companies</span>
            </div>

              
          </div> -->
        </div>
      </section>

      

      <section class="site-section">
        <div class="container">

          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-2">Последњи додати производи</h2>
            </div>
          </div>
          
          <ul class="job-listings mb-5">
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
              <a href="product-single"></a>
              <div class="job-listing-logo">
                <img src="images/job_logo_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>

              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                  <h2>Кафа</h2>
                  <strong>Гранд</strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                  <span class="icon-room"></span> Топола
                </div>
                <div class="job-listing-meta">
                  <span class="badge badge-success">Погледај</span>
                </div>
              </div>
              
            </li>
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
              <a href="product-single"></a>
              <div class="job-listing-logo">
                <img src="images/job_logo_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>

              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                  <h2>Краставац</h2>
                  <strong>Назив</strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                  <span class="icon-room"></span> Лесковац
                </div>
                <div class="job-listing-meta">
                  <span class="badge badge-success">Погледај</span>
                </div>
              </div>
            </li>                      </ul>

          <div class="row pagination-wrap">
            <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
              <span>Прикажи 1-7 од 2,150 Производа</span>
            </div>
            <div class="col-md-6 text-center text-md-right">
              <div class="custom-pagination ml-auto">
                <a href="#" class="prev">Предходна</a>
                <div class="d-inline-block">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                </div>
                <a href="#" class="next">Следећа</a>
              </div>
            </div>
          </div>

        </div>
      </section>

        
      <footer class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
          <span class="icon-keyboard_arrow_up"></span>
        </a>

        <div class="container">
          <div class="row mb-5">
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Најтраженије</h3>
              <ul class="list-unstyled">
                <li><a href="#">Поврће</a></li>
                <li><a href="#">Воће</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Компанија</h3>
              <ul class="list-unstyled">
                <li><a href="#">О нама</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Подршка</h3>
              <ul class="list-unstyled">
                <li><a href="#">Подршка</a></li>
                <li><a href="#">Приватност</a></li>
                <li><a href="#">Услови коришћења</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
              <h3>Запратите нас</h3>
              <div class="footer-social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-12">
              <p class="copyright"><small>
                
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Сва задржана права |    <a href="#" target="_blank" >n_Dev</a>
              </small></p>
            </div>
          </div>
        </div>
      </footer>
    
    </div>

      <!-- SCRIPTS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/stickyfill.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      
      <script src="js/bootstrap-select.min.js"></script>
      
      <script src="js/custom.js"></script>
      <script src="js/interactive-map.js"></script>
      
    </body>
  </html>