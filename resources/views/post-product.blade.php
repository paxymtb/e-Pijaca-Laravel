<!doctype html>
<html lang="en">

<head>
  <title>е-Пијаца</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/quill.snow.css">


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
              <li><a href="product-listings" class="nav-link active">Производи</a></li>           
              <li><a href="about">О нама</a></li>           
              <li><a href="contact">Контакт</a></li>
              <li class="d-lg-none"><a href="post-product"><span class="mr-2">+</span> Постави производ</a></li>
              <li class="d-lg-none"><a href="login">Улогуј се</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-product" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span
                  class="mr-2 icon-add"></span>Постави производ</a>
              <a href="login" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span
                  class="mr-2 icon-lock_outline"></span>Улогуј се</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/back_ground.jpg');"
      id="home-section">
      <div class="container">
        <!-- <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Постави производ</h1>
             <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
            </div>
          </div>
        </div> -->
      </div>
    </section>


    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Постави производ</h2>
              </div>
            </div>
          </div>
        
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" method="post">
              <h3 class="text-black mb-5 border-bottom pb-2">Детаљи производа</h3>

              <div class="form-group">
                <label for="job-region">Категорија производа</label>
                <select class="selectpicker border rounded" id="job-region" data-style="btn-black" data-width="100%"
                  data-live-search="true" title="Изаберите категорју производа">
                  <option>Воће</option>
                  <option>Поврће</option>
                  <option>Сточарство</option>
                </select>
              </div>

              

              <div class="form-group">
                <label for="job-title">Назив производа</label>
                <input type="text" class="form-control" id="job-title" placeholder="Прозивод">
              </div>      
              
              
              <div class="form-group">
                <label for="job-type">Округ </label>
                <select class="selectpicker border rounded" id="job-type" data-style="btn-black" data-width="100%"
                  data-live-search="true" title="Изаберите округ из ког дела Србије сте">
                  <option>Шумадијски</option>
                  <option>Београдски</option>
                </select>
              </div>

              <div class="form-group">
                <label for="job-location">Место</label>
                <input type="text" class="form-control" id="job-location" placeholder="Унесите место">
              </div>


              <div class="form-group">
                <label for="job-title">Количина</label>
                <input type="text" class="form-control" id="job-title" placeholder="Количина">
              </div>

           
              <div class="form-group">
                <label for="job-title">Цена производа</label>
                <input type="text" class="form-control" id="job-title" placeholder="Цена производа">
              </div>
              
              <div class="form-group">
                <label for="job-description">Опис производа</label>
                <div class="editor" id="editor-1">
                  <p>Напишите опис о проиводу</p>
                </div>
              </div>

              <div class="form-group">
                <label for="company-website-tw d-block">Додај слику</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Тражи документ<input type="file" hidden>
                </label>
              </div>
                     
              <h3 class="text-black my-5 border-bottom pb-2">Детаљи продавца</h3>
              <div class="form-group">
                <label for="company-name">Име</label>
                <input type="text" class="form-control" id="company-name" placeholder="Име">
              </div>
              
              <div class="form-group">
                <label for="email">Мејл</label>
                <input type="text" class="form-control" id="email" placeholder="ваш-мејл@gmail.com">
              </div>
              
              <div class="form-group">
                <label for="company-tagline"> Број телефона</label>
                <input type="text" class="form-control" id="company-tagline" placeholder="064 123 456 78">
              </div>


              <div class="form-group">
                <label for="company-website">Веб сајт</label>
                <input type="text" class="form-control" id="company-website" placeholder="https://">
              </div>

              <div class="form-group">
                <label for="company-website-fb">Фејсбук налог</label>
                <input type="text" class="form-control" id="company-website-fb" placeholder="Линк Фејсбук странице">
              </div>

            </form>
          </div>


        </div>
        <div class="row align-items-center mb-5">

          <div class="col-lg-4 ml-auto">
            <div class="row">
              <div class="col-6">
               
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Сачувај оглас</a>
              </div>
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
               
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> Сва задржана права | <a href="#" target="_blank">n_Dev</a>
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
  <script src="js/quill.min.js"></script>


  <script src="js/bootstrap-select.min.js"></script>

  <script src="js/custom.js"></script>



</body>

</html>