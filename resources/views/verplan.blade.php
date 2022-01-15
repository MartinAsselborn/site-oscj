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
    <style>.modal.show .modal-dialog {transform: translate(0,30%);}</style>
  
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
      <section class="section section-lg bg-default" >
        <div class="container"> 
        @if($legajo->getPlan())
          @if(strtolower($legajo->getObraSocial()->obra_social)=='osde')
            <div class="unit-left" style='margin:10px 0px; '><a href="http://www.osde.com.ar" target="_blank"><img  src="images/osde.jfif"  alt="" width="138" height="59"/></a></div>               
          @else
            <div class="unit-left" style='margin:20px 0px; '><a href="http://www.medicus.com.ar" target="_blank"><img  src="images/medicus.png"  alt="" width="138" height="59"/></a></div>               
          @endif
          @if($detector==0)  
           @endif         <embed src="{{$legajo->getPlan()?$legajo->getPlan()->getArchivo():'none';}}?{{rand(1231,40000);}}#toolbar=1&navpanes=1&scrollbar=1&pic={{random_int(163000,200000)}}" type="application/pdf" width="100%" height="600px" />
  
          <a style="text-decoration: underline;" href="{{$legajo->getPlan()?$legajo->getPlan()->getArchivo():'none';}}?pic={{random_int(163000,200000)}}" target="_blank">Mira tu PLan haciendo click Aqui</a>
        @else
          <h1>No tiene un plan asignado</h2>
        @endif  
        <div class="mt-10">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Cambiar contraseña
        </button>
        
        </div> 
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action='/cambiarContraseña' id="cambio" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Actual Contraseña</label>
                    <input type="text" class="form-control" name="old" placeholder="Actual Contraseña">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nueva Contraseña</label>
                    <input type="text" class="form-control" name="new" placeholder="Nueva Contraseña">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="modificar();" class="btn btn-primary">Modificar</button>
              </div>
              </form>
              
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
    <script>
      function modificar(){
        if(confirm("Seguro desea cambiar la contraseña? Debera volver a loguear.")){
          $("#cambio").submit();
        }
      }
    </script>
  </body>
</html>