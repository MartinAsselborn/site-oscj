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
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}.section-md{padding:0px;}.swiper-pagination-bullet{
background: #516ca9 !important;
    }.swiper-pagination-bullet-active{
      background: #516ca9 !important;
    }
    .swiper-pagination .swiper-pagination-bullet:before {
     border: 1px solid rgb(80 76 165 / 60%);
    }
    </style>
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
      <header class="section page-header rd-navbar-transparent-wrap">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
     
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main-inner">
                <div class="rd-navbar-main">
                  <!--RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!--RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!--RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                      <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark" src="images/logo-default-293x44.png" alt="" width="146" height="22"/><img class="brand-logo-light" src="images/logo-inverse-310x44.png" alt="" width="155" height="22"/></a>
                    </div>
                  </div>
                  <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Inicio</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="/about">Sobre Nosotros</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="/contacts">Contacto</a>
                        </li>
                        @if(Auth::user())
                            @if(Auth::user()->rol_id>2)
                            <li  class="rd-nav-item {{ (Request::path()=='verplan' )? 'active': ''}}"><a class="rd-nav-link" href="/verplan">Plan Medico</a>
                            </li>
                            @endif
                          <li class="rd-nav-item"><a class="rd-nav-link" href="/logoutwelcome">Logout</a>
                          </li>
                        @else
                        <li class="rd-nav-item"><a class="rd-nav-link" href="/login">Login</a>
                        </li>
                        @endif
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-1 context-dark" data-loop="true" data-autoplay="5000" data-simulate-touch="false"
        style="
              text-shadow: -1px -1px 0.1px #000, 0.1px 0.1px 0.1px #000, -1px 0.1px 0.1px #000, 0.1px -1px 0.1px #000;
        "
      >
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="images/index-1-slider-1-1920x768.jpg">
            <div class="swiper-slide-caption section-lg">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                    <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100" style="color:#516ca9"><?php echo $webText[0]['textweb']; ?></span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200" style="color:#516ca9"><?php echo $webText[1]['textweb']; ?></span></h1>
                    <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350" style="color:#516ca9"><?php echo $webText[2]['textweb']; ?>.</p>
                    <div class="button-wrap-default" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary-text" href="/about" style="color:#516ca9; 
                                   text-shadow: 0px 0px 0px #516ca9, 0px 0px 0px #516ca9, 0px 0px 0px #516ca9, 0px 0px 0px #516ca9;
                    ">Leer mas...</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/index-1-slider-2-1920x768.jpg">
            <div class="swiper-slide-caption section-lg">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                    <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100" style="color:#516ca9"><?php echo $webText[3]['textweb']; ?></span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200" style="color:#516ca9"><?php echo $webText[4]['textweb']; ?></span></h1>
                    <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350" style="color:#516ca9"><?php echo $webText[5]['textweb']; ?>.</p>
                    <div class="button-wrap-default" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary-text" href="/about#equipo" style="color:#516ca9;
                                      text-shadow: 0px 0px 0px #516ca9, 0px 0px 0px #516ca9, 0px 0px 0px #516ca9, 0px 0px 0px #516ca9;
                      ">Leer mas...</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                                  <!-- MEGATLON-->

                  
          <div class="swiper-slide" data-slide-bg="images/index-1-slider-3-1920x768.jpg">
            <div class="swiper-slide-caption section-lg">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                    <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100" style="color:#516ca9"><?php echo $webText[6]['textweb']; ?></span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200" style="color:#516ca9"><?php echo $webText[7]['textweb']; ?></span></h1>
                    <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350" style="color:#516ca9"><?php echo $webText[8]['textweb']; ?></p>
                    <div class="button-wrap-default" data-caption-animate="fadeInUp" data-caption-delay="450"><a class="button button-secondary-text" href="#" style="color:#516ca9;
                                      text-shadow: 0px 0px 0px #516ca9, 0px 0px 0px #516ca9, 0px 0px 0px #516ca9, 0px 0px 0px #516ca9;
                    " data-toggle="modal" data-target="#MEGATLON">Leer mas...</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Swiper Pagination-->
        <div class="swiper-pagination-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Icon List 2-->
      <section class="section section-sm section-sm-bottom-100 bg-primary">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 wow fadeInUp">
              <div class="box-icon-2">
                <div class="icon novi-icon mercury-icon-card"></div>
                <h5 class="title"><?php echo $webText[9]['textweb']; ?></h5>
                <p class="text"><?php echo $webText[10]['textweb']; ?></p>
              </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="box-icon-2">
                <div class="icon novi-icon mercury-icon-touch"></div>
                <h5 class="title"><?php echo $webText[11]['textweb']; ?></h5>
                <p class="text"><?php echo $webText[12]['textweb']; ?></p>
              </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
              <div class="box-icon-2">
                <div class="icon novi-icon mercury-icon-time-sand"></div>
                <h5 class="title"><?php echo $webText[13]['textweb']; ?></h5>
                <p class="text"><?php echo $webText[14]['textweb']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
   
      <!-- Our Mission-->
      <section class="section bg-default section-md" style='padding:30px'>
        <div class="container">
          <div class="row row-30">
            <div class="col-md-6">
              <h2 class="title-icon"><span class="icon icon-default mercury-icon-target-2"></span><span>Nuestra <span class="text-light">Mision</span></span></h2>
              <p class="big"><?php echo $webText[15]['textweb']; ?></p>
              <!--ul class="list-marked-2">
                <li><?php echo $webText[16]['textweb']; ?></li>
                <li><?php echo $webText[17]['textweb']; ?></li>
                <li><?php echo $webText[18]['textweb']; ?></li>
              </ul-->
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">1805</div>
                    </div>
                    <p class="box-counter-title">Clientes Satisfechos</p>
                  </div>
                </div>
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">3</div>
                    </div>
                    <p class="box-counter-title">Miembros del Equipo</p>
                  </div>
                </div>
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <!--div class="counter"></div-->
                    </div>
                    <p class="box-counter-title"></p>
                  </div>
                </div>
                <div class="col-6">
                  <!--Box counter-->
                  <div class="box-counter">
                    <div class="box-counter-main">
                      <!--div class="counter"></div--><span></span>
                    </div>
                    <p class="box-counter-title"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--section class="section section-md bg-gray-800" style='padding:30px'>
        <div class="container text-center text-xl-left">
          <h2>Novedades <span class="text-light"></span></h2>
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
      <section class="section section-lg " style="background-color: #516ca9;padding: 5%;">
        <div class="container text-center text-lg-left bg-default" style="padding: 5%;" >
          <h2 class="title-icon"><span class="icon icon-default mercury-icon-news"></span><span class="text-light">Ultimas</span> Noticias</h2>
          <div class="row row-40">
           @foreach($noticias as $noticia)
            <div class="col-md-6">
              <div class="team-box-left">
                <div class="team-meta unit align-items-center">
                  <div class="unit-left"><img  src="<?php echo $noticia->getArchivo(); ?>" alt="" width="138" height="69"/>
                  </div>
                  <div class="unit-body">
                    <h5 class="title"><?php echo $noticia['titulo']; ?></h5>
                    <div class="subtitle"><?php echo $noticia['subtitulo']; ?></div>
                  </div>
                </div>
                <div class="content"><?php echo $noticia['noticia']; ?><a href="<?php echo $noticia['leermas']; ?>" target="_blank">...Leer Mas</a></div>
              </div>
            </div>
           @endforeach
        </div>
      </section>

      <div class="modal fade" id="MEGATLON" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body" 
          >
              <img src="/images/MEGATLON.jpg">
            </div>
      <div><center><form method="get" action="servicios/MEGATLON- Formulario de alta.xls" id="linkAltaMegatlon">
      <p> <a href="#" onclick="$('#linkAltaMegatlon').submit();">Formulario de ALTA</a> </p>
      </form></center></div>
      <div style="margin:10px"><center><form method="get" action="servicios/MEGATLON- Formulario de baja.xls" id="linkBajaMegatlon">
      <p> <a href="#" onclick="$('#linkBajaMegatlon').submit();">Formulario de BAJA</a> </p>
      </form></center></div>
          </div>
        </div>
      </div>
      <!--section class="parallax-container" data-parallax-img="images/parallax-1-1920x1026.jpg">
        <div class="parallax-content section-xl context-dark text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10 col-xl-9" -->
                <!--h2>Monthly <span class="text-light">Offer</span></h2-->
                <!--div class="heading-5 font-weight-normal">Get our FREE financial consultation for your business taxes</div-->
                <!--TimeCircles-->
                <!--
                      <div class="countdown" data-countdown data-to="2019-12-31">
                        <div class="countdown-block countdown-block-days">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-days="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-days="">00</div>
                            <div class="countdown-title">days</div>
                          </div>
                        </div>
                        <div class="countdown-block countdown-block-hours">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-hours="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-hours="">00</div>
                            <div class="countdown-title">hours</div>
                          </div>
                        </div>
                        <div class="countdown-block countdown-block-minutes">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-minutes="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-minutes="">00</div>
                            <div class="countdown-title">minutes</div>
                          </div>
                        </div>
                        <div class="countdown-block countdown-block-seconds">
                          <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-seconds="">
                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                          </svg>
                          <div class="countdown-wrap">
                            <div class="countdown-counter" data-counter-seconds="">00</div>
                            <div class="countdown-title">seconds</div>
                          </div>
                        </div>
                      </div>
                   
              </div>
            </div>
          </div>
        </div>
      </section-->
 
      <!-- Latest Articles-->

    <!--footer-->
    @component('footer')
    @endcomponent
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--coded by Starlight-->
  </body>
</html>