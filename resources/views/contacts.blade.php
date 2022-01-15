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
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}.rd-navbar-transparent.rd-navbar-static .rd-navbar-main{padding:16px 0 20px 0;}.form-input{border:1px solid gray}footer{
      margin: 5px;}.section-md{padding:0px;}</style>
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
            <li class="active">Contacto</li>
          </ul>
        </div>
      </section>
      <!-- Contacts-->
      <section class="section section-md">
        <div class="container">
          <h2>Contacto</h2>
          <div class="row row-40">
          
            <div class="col-md-10 col-lg-10">
              <h5></h5>
              <!--RD Mailform-->
              <form  method="post" action="" id="contactMail">
                  @csrf
                <div class="row row-10">
                  <div class="col-md-10">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">Nombre</label>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name" type="text" name="tel" data-constraints="@Required">
                      <label class="form-label" for="contact-last-name">Telefono/Celular</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Mensaje</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-7 col-xl-8">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-md-7 col-xl-8">
                    <div class="form-wrap">
                      <div class="g-recaptcha" data-sitekey="6Lf_qUEdAAAAACMwGKHvq2vFKGD5KjrQlKuyXT5b" data-callback="enabledSubmit"></div>
                    </div>
                  </div>    
                  <div class="col-md-5 col-xl-4">
                    <button class="button button-size-1 button-block button-primary p-3" type="submit" id="send" disabled="true">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      
        @component('footer')
        @endcomponent
        
        
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      function enabledSubmit(response) {
        return new Promise(function(resolve,reject,){
          if(document.getElementById('contact-email').value==""){
             document.getElementById('contact-message').style.border="1px solid #f5543f";
             grecaptcha.reset();
             return reject({});
          }else if(document.getElementById('contact-message').value==""){
            document.getElementById('contact-message').style.border="1px solid #f5543f";
            grecaptcha.reset();
            return reject({});
          }else if(document.getElementById('contact-last-name').value==""){
            document.getElementById('contact-last-name').style.border="1px solid #f5543f";
            grecaptcha.reset();
            return reject({});
          }else if(document.getElementById('contact-first-name').value==""){
            document.getElementById('contact-first-name').style.border="1px solid #f5543f";
            grecaptcha.reset();
            return reject({});
          }
          document.getElementById('contactMail').action = '/sendMail';
          document.getElementById('send').disabled = false;
        })
      }

      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
    let msg="<?php echo $msg;?>";
    if(msg){
      Toast.fire({
        icon: 'success',
        title: msg
      })
    }
    </script>
  </body>
</html>