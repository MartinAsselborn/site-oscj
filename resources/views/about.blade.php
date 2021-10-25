<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>OSCJ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}.rd-navbar-transparent.rd-navbar-static .rd-navbar-main{padding:16px 0 20px 0;}.section-md{padding:0px;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="loader">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
    @component('header')
    @endcomponent
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image novi-background bg-primary">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Sobre Nosotros</li>
          </ul>
        </div>
      </section>
      <!-- Our Story-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h2><span class="text-light">Nuestra</span> Trayectoria</h2>
          <div class="row row-30 justify-content-xl-between">
            <div class="col-md-6 col-xl-6">
              <p class="big"><?php echo $webText[0]['textweb']; ?></p>
              <div class="box-shadow-2">
                <div class="box-shadow-header">
                  <div class="unit flex-column flex-md-row">
                    <div class="unit-left">
                      <div class="heading-5"><?php echo $webText[1]['textweb']; ?></div>
                    </div>
                    <div class="unit-body">
                      <p><?php echo $webText[2]['textweb']; ?></p>
                    </div>
                  </div>
                </div><img class="img-responsive" src="images/about-1-569x338.jpg" alt="" width="569" height="169"/>
              </div>
            </div>
            <div class="col-md-6 col-xl-5">
              <ul class="list-lg">
                <li>
                  <div class="heading-5"><?php echo $webText[3]['textweb']; ?></div>
                  <p class="p-offset-1"><?php echo $webText[4]['textweb']; ?></p>
                </li>
                <li>
                  <div class="heading-5"><?php echo $webText[5]['textweb']; ?></div>
                  <p class="p-offset-1"><?php echo $webText[6]['textweb']; ?></p>
                </li>
                <li>
                  <div class="heading-5"><?php echo $webText[7]['textweb']; ?></div>
                  <p class="p-offset-1"><?php echo $webText[8]['textweb']; ?></p>
                </li>
                <li><!--a class="button button-primary" href="#">Read more</a--></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Principles-->
      <section class="section section-lg bg-gray-100">
        <div class="container text-center text-lg-left">
          <h2><span class="text-light">Beneficios</span> OSCJ</h2>
          <div class="row row-30 number-counter-2">
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title"><?php echo $webText[9]['textweb']; ?></h5>
                  <div class="content"><?php echo $webText[10]['textweb']; ?></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title"><?php echo $webText[11]['textweb']; ?></h5>
                  <div class="content"><?php echo $webText[12]['textweb']; ?></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title"><?php echo $webText[13]['textweb']; ?></h5>
                  <div class="content"><?php echo $webText[14]['textweb']; ?></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title"><?php echo $webText[24]['textweb']; ?></h5>
                  <div class="content"><?php echo $webText[25]['textweb']; ?></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title"><?php echo $webText[26]['textweb']; ?></h5>
                  <div class="content"><?php echo $webText[27]['textweb']; ?></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title"><?php echo $webText[28]['textweb']; ?></h5>
                  <div class="content"><?php echo $webText[29]['textweb']; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Clients-->
      <!--section class="section section-lg bg-gray-800">
        <div class="container text-center text-xl-left">
          <h2>Our <span class="text-light">Clients</span></h2>
          <div class="owl-carousel owl-carousel-4 text-center" data-items="1" data-sm-items="3" data-md-items="4" data-lg-items="5" data-xl-items="6" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-1-133x65.png" alt="" width="133" height="32"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-2-117x61.png" alt="" width="117" height="30"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-3-147x70.png" alt="" width="147" height="35"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-4-139x64.png" alt="" width="139" height="32"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-5-123x67.png" alt="" width="123" height="33"/></a></div>
            <div class="item"><a class="link-image" href="#"><img src="images/brand-light-6-151x72.png" alt="" width="151" height="36"/></a></div>
          </div>
        </div>
      </section-->
      <!-- Our Team-->
      <section class="section section-lg bg-default">
        <div class="container text-center text-lg-left">
          <h2><span class="text-light">Nuestro</span> Equipo</h2>
          <div class="row row-40">
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="images/testimonials-1-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title"><?php echo $webText[15]['textweb']; ?></h5>
                    <div class="subtitle"><?php echo $webText[16]['textweb']; ?></div>
                  </div>
                </div>
                <div class="content"><?php echo $webText[17]['textweb']; ?></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="images/testimonials-2-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title"><?php echo $webText[18]['textweb']; ?></h5>
                    <div class="subtitle"><?php echo $webText[19]['textweb']; ?></div>
                  </div>
                </div>
                <div class="content"><?php echo $webText[20]['textweb']; ?></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img class="img" src="images/testimonials-3-138x138.jpg" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title"><?php echo $webText[21]['textweb']; ?></h5>
                    <div class="subtitle"><?php echo $webText[22]['textweb']; ?></div>
                  </div>
                </div>
                <div class="content" style="margin: 5px 0 20px 0;"><?php echo $webText[23]['textweb']; ?></div>
              </div>
            </div>
          </div>
        </div>
      </section>
        @component('footer')
        @endcomponent
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>