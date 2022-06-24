<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>{$data.store_name}</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="public/images/favicon.jpg">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="public/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="public/plugins/slick/slick.css">
  <link rel="stylesheet" href="public/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="public/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="public/css/style.css">
     <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><a href='https://goo.gl/maps/qS5x8U577VYG2u8h9'><i class="fas fa-map-marker-alt"></i> <p class="info-text">{$data.store_name}</p></a>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="{$data.url_facebook}">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      
                      <a title="Instagram" href="{$data.url_instagram}">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="WhatsApp" href="https://api.whatsapp.com/send?phone=52{$data.whatsapp}">
                          <span class="social-icon"><i class="fab fa-whatsapp"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
 

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item">
                      
                       <img src="backend/settings/files/{if $data.logo_path != ''}{$data.logo_path}{else}logo_dark.jpg{/if}" style="height:70px">
                      </li>
                      <li class="nav-item  active">
                          <a href="#" class="nav-link" data-toggle="dropdown">INICIO</a>
                         
                      </li>
                      <li class="nav-item  ">
                        <a href="#section-acerca" class="nav-link" data-toggle="dropdown">ACERCA DE NOSOTROS</a>
                       
                      </li>
                      <li class="nav-item  ">
                        <a href="#section-metodos" class="nav-link" data-toggle="dropdown">MÉTODOS DE PAGO</a>
                       
                      </li>
                      <li class="nav-item  ">
                        <a href="#section-mapa" class="nav-link" data-toggle="dropdown">UBICACIÓN</a>
                       
                      </li>

                      <li class="nav-item"><a class="nav-link" href="#footer">CONTACTO</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        

       
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background:linear-gradient(0deg,rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url(public/images/slider-main/bg1.jpg);background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">La mejor relación CALIDAD-SABOR-PRECIO</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Casa Blanca</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                   
                    <a href="tel:{$data.phone}" class="slider btn btn-primary border">ORDERNAR AHORA</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background:linear-gradient(0deg,rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url(public/images/slider-main/bg2.jpg);background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
            <div class="col-md-12 text-center">
              <h2 class="slide-title" data-animation-in="slideInLeft">Disfruta del mejor sabor</h2>
              <h3 class="slide-sub-title" data-animation-in="slideInRight">HAMBURGUESAS</h3>
               <p data-animation-in="slideInLeft" data-duration-in="1.2">
                   
                    <a href="tel:{$data.phone}" class="slider btn btn-primary border">ORDERNAR AHORA</a>
                </p>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background:linear-gradient(0deg,rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url(public/images/slider-main/bg4.jpg);background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
            <div class="col-md-12 text-center">
              <h2 class="slide-title" data-animation-in="slideInLeft">¿Ya los probaste?</h2>
              <h3 class="slide-sub-title" data-animation-in="slideInRight">ALITAS Y BONELESS</h3>
               <p data-animation-in="slideInLeft" data-duration-in="1.2">
                   
                    <a href="tel:{$data.phone}" class="slider btn btn-primary border">ORDERNAR AHORA</a>
                </p>
            </div>
          </div>
        </div>
    </div>
  </div>

</div>

<!--<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on construction</h3>
              </div>
          </div>
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#">Request Quote</a>
              </div>
          </div>
        </div>
    </div>
  </div>
</section>-->
<section  class="ts-features">
  <div class="container" >
    <div class="row text-center">
      <div class="col-12">
        
        <h3 class="into-sub-title" id="section-acerca">ACERCA DE NOSOTROS</h3>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
            
              <h2 class="into-title">Información</h2>             
              <p>{$data.information}</p>
              <h2 class="into-title">Misión</h2>
              <p>{$data.mision}</p>
              <h2 class="into-title">Visión</h2>
              <p>{$data.vision}</p>
          </div><!-- Intro box end -->

         

        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0" style="background-image: url(public/images/restaurant.png);background-size: cover;
        background-repeat: no-repeat;
        background-position: top center;height: 300px;">
         
        
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="main-container" class="main-container" style="padding-top:0px">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        
        <h3 class="section-sub-title" id="section-metodos">Métodos de pago</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-money-bill"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>EFECTIVO</h4>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-credit-card"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Tarjeta</h4>
            <p>Solicita la terminal</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-mobile mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Transferencia</h4>
            <p>Solicita nuestros datos</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->

    <div class="gap-60"></div>
    <div class="row text-center">
      <div class="col-12">
        
        <h3 class="section-sub-title" style='margin-bottom: 0px;' id="section-mapa">UBICACIÓN</h3>
        <a target='_blank' style="margin-bottom: 10px" class='btn btn-warning' href='https://goo.gl/maps/qS5x8U577VYG2u8h9'>Abrir en google maps</a>
        
      </div>
    </div>
    <div>
       
       <div id="map_picker" style='height: 400px; '></div>
    </div>
  </section>


  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">REDES SOCIALES</h3>
            <img loading="lazy" width="120px" class="footer-logo"  src="backend/settings/files/{if $data.logo_path != ''}{$data.logo_path}{else}logo_dark.jpg{/if}" alt="Casa Blanca" style="margin-bottom: 0px;">
           
            <div class="footer-social" style="margin-top:0px">
              <ul>
                <li><a href="{$data.url_facebook}" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                </li>
                <li><a href="{$data.url_instagram}" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=52{$data.whatsapp}" aria-label="Instagram"><i
                      class="fab fa-whatsapp"></i></a></li>
                
              </ul>
            </div><!-- Footer social end -->
            <br>
            <i class='fas fa-phone'></i> {$data.phone} {if $data.phone_secondary != ''}, {$data.phone_secondary}{/if}
            <br><i class='fas fa-envelope'></i> {$data.email}
            <br>
            {$data.address}
           
            
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">HORARIO DE ATENCIÓN</h3>
            <div>              
              Lunes: <span class="text-right">{$data.h_lunes} </span>
              <br>  Martes: <span class="text-right">{$data.h_martes} </span>
              <br> Miércoles: <span class="text-right">{$data.h_miercoles}</span>
              <br> Jueves: <span class="text-right">{$data.h_jueves}</span>
              <br> Viernes: <span class="text-right">{$data.h_viernes}</span>
              <br> Sábado: <span class="text-right">{$data.h_sabado}</span>
              <br> Domingo: <span class="text-right">{$data.h_domingo}</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Servicios</h3>
            <ul class="list-arrow">
              <li>Hamburguesas</li>
              <li>Tortas</li>
              <li>Alitas</li>
              <li>Boneless</li>
              <li>Papas fritas</li>
              <li>Dedos de queso</li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info text-center text-md-left">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Diseño y desarrollo por <a href="https://themefisher.com">Joseline Valdez Gastelum</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
             
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="public/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="public/plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="public/plugins/slick/slick.min.js"></script>
  <script src="public/plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="public/plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="public/plugins/shuffle/shuffle.min.js" defer></script>

  <!-- Template custom -->
  <script src="public/js/script.js"></script>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
<script src="public/plugins/google-map/Control.OSMGeocoder.js"></script>
    <script src="public/plugins/google-map/OSMLocationPicker.js"></script>
  <script>
    $(document).ready(function() {
                var map = OSMPICKER.initmappicker(25.7502315,-108.8144257, 100, {
                        addressId: "address",
                        latitudeId: "latitude",
                        longitudeId: "longitude",
                        radiusId: "radius",
                        mapId: "map_picker",
                        zoom:18
                });
      
                $('a[href^="#"]').click(function() {
                  var destino = $(this.hash);
                  if (destino.length == 0) {
                    destino = $('a[name="' + this.hash.substr(1) + '"]');
                  }
                  if (destino.length == 0) {
                    destino = $('html');
                  }
                  $('html, body').animate({ scrollTop: destino.offset().top }, 500);
                  return false;
                });
            });
  </script>
  </div><!-- Body inner end -->
  </body>

  </html>