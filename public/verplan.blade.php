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
      <!-- Breadcrumbs se queda tengo q ver q hago con esto-->
      <section class="breadcrumbs-custom bg-image novi-background bg-primary">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="/">Inicio</a></li>
            <li class="active">Ver Plan</li>
          </ul>
        </div>
      </section>
      <!-- Our Story-->
      <section class="section section-lg bg-default">
        <div class="container">
         <?php
          $miuseragent=trim(strtolower($_SERVER['HTTP_USER_AGENT']));
          $moviles=["mobile","iphone","ipod","blackberry","opera mini","sony","mot","nokia","samsung"];
          foreach($moviles as $movil){
            $detector=(strpos($miuseragent,trim($movil))!==false)?1:0;
            if($detector==1){
              break;
            }
          }
        ?> 
        @if($legajo->getPlan())
          @if($detector==0)  
            <embed src="public/{{$legajo->getPlan()?$legajo->getPlan()->getArchivo():'none';}}#toolbar=1&navpanes=1&scrollbar=1&pic={{random_int(163000,200000)}}" type="application/pdf" width="100%" height="600px" />
          @endif
          <a style="text-decoration: underline;" href="public/{{$legajo->getPlan()?$legajo->getPlan()->getArchivo():'none';}}?pic={{random_int(163000,200000)}}" target="_blank">Mira tu PLan haciendo click Aqui</a>
        @else
          <h1>No tiene un plan asignado</h2>
        @endif  
       
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