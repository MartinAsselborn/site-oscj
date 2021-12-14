<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<header class="section page-header rd-navbar-transparent-wrap">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="44px" data-xl-stick-up-offset="44px" data-xxl-stick-up-offset="44px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
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
                        <li class="rd-nav-item {{ (Request::path()=='/' )? 'active': ''}}"><a class="rd-nav-link" href="/">Inicio</a>
                        </li>
                        <li class="rd-nav-item {{ (Request::path()=='about' )? 'active': ''}}"><a class="rd-nav-link" href="/about">Sobre Nosotros</a>
                        </li>
                        <li class="rd-nav-item {{ (Request::path()=='contacts' )? 'active': ''}}"><a class="rd-nav-link" href="/contacts">Contacto</a>
                        </li>
                        @if(Auth::user())
                          @if(Auth::user()->rol_id==3)
                          <li  class="rd-nav-item {{ (Request::path()=='verplan' )? 'active': ''}}"><a class="rd-nav-link" style='margin: 15px;' href="/verplan">Plan Medico<n/a>
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
        <div class="rd-navbar-bg novi-background bg-image" style="background-image: url(images/bg-navbar.jpg)"></div>
 </header>