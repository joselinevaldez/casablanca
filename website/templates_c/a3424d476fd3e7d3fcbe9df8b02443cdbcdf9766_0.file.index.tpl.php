<?php
/* Smarty version 3.1.33, created on 2022-07-01 19:00:27
  from 'C:\xampp\htdocs\casablanca\website\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62bf282b4462f1_67556224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3424d476fd3e7d3fcbe9df8b02443cdbcdf9766' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\website\\templates\\index.tpl',
      1 => 1656694825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bf282b4462f1_67556224 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $_smarty_tpl->tpl_vars['data']->value['store_name'];?>
</title>

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
     <style>
         .footer-widget ul.list-arrow li:hover {
            color: #999 !important;
          }
     </style>
</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><a href='https://goo.gl/maps/qS5x8U577VYG2u8h9'><i class="fas fa-map-marker-alt"></i> <p class="info-text"><?php echo $_smarty_tpl->tpl_vars['data']->value['store_name'];?>
</p></a>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url_facebook'];?>
">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      
                      <a title="Instagram" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url_instagram'];?>
">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="WhatsApp" href="https://api.whatsapp.com/send?phone=52<?php echo $_smarty_tpl->tpl_vars['data']->value['whatsapp'];?>
">
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
                      
                       <img src="backend/settings/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['logo_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['logo_path'];
} else { ?>logo_dark.jpg<?php }?>" style="height:70px">
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner', false, NULL, 'banners', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
        
  <div class="banner-carousel-item" style="background:linear-gradient(0deg,rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url(backend/banner/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['imagen_path'];?>
);background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft"><?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight"><?php echo $_smarty_tpl->tpl_vars['banner']->value['subtitle'];?>
</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                   
                                    </p>
              </div>
          </div>
        </div>
    </div>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
              <p><?php echo $_smarty_tpl->tpl_vars['data']->value['information'];?>
</p>
              <h2 class="into-title">Misión</h2>
              <p><?php echo $_smarty_tpl->tpl_vars['data']->value['mision'];?>
</p>
              <h2 class="into-title">Visión</h2>
              <p><?php echo $_smarty_tpl->tpl_vars['data']->value['vision'];?>
</p>
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
        <!--<a target='_blank' style="margin-bottom: 10px" class='btn btn-warning' href='https://goo.gl/maps/qS5x8U577VYG2u8h9'>Abrir en google maps</a>-->
        
      </div>
    </div>
    <br>
    <div>
        
        <div class="google-map">
      <div id="googleMap" style="height:500px"></div>
    </div>
    </div>
  </section>


  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">REDES SOCIALES</h3>
            <img loading="lazy" width="120px" class="footer-logo"  src="backend/settings/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['logo_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['logo_path'];
} else { ?>logo_dark.jpg<?php }?>" alt="Casa Blanca" style="margin-bottom: 0px;">
           
            <div class="footer-social" style="margin-top:0px">
              <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url_facebook'];?>
" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url_instagram'];?>
" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=52<?php echo $_smarty_tpl->tpl_vars['data']->value['whatsapp'];?>
" aria-label="Instagram"><i
                      class="fab fa-whatsapp"></i></a></li>
                
              </ul>
            </div><!-- Footer social end -->
            <br>
            <i class='fas fa-phone'></i> <?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['phone_secondary'] != '') {?>, <?php echo $_smarty_tpl->tpl_vars['data']->value['phone_secondary'];
}?>
            <br><i class='fas fa-envelope'></i> <?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>

            <br>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['address'];?>

           
            
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">HORARIO DE ATENCIÓN</h3>
            <div>              
              Lunes: <span class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['h_lunes'];?>
 </span>
              <br>  Martes: <span class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['h_martes'];?>
 </span>
              <br> Miércoles: <span class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['h_miercoles'];?>
</span>
              <br> Jueves: <span class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['h_jueves'];?>
</span>
              <br> Viernes: <span class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['h_viernes'];?>
</span>
              <br> Sábado: <span class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['h_sabado'];?>
</span>
              <br> Domingo: <span class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['h_domingo'];?>
</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Servicios</h3>
            <ul class="list-arrow">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service', false, NULL, 'services', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
              <span>Copyright &copy; <?php echo '<script'; ?>
>
                  document.write(new Date().getFullYear())
                <?php echo '</script'; ?>
>, Diseño y desarrollo por <a href="https://themefisher.com">Joseline Valdez Gastelum</a></span>
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
  <?php echo '<script'; ?>
 src="public/plugins/jQuery/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- Bootstrap jQuery -->
  <?php echo '<script'; ?>
 src="public/plugins/bootstrap/bootstrap.min.js" defer><?php echo '</script'; ?>
>
  <!-- Slick Carousel -->
  <?php echo '<script'; ?>
 src="public/plugins/slick/slick.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/plugins/slick/slick-animation.min.js"><?php echo '</script'; ?>
>
  <!-- Color box -->
  <?php echo '<script'; ?>
 src="public/plugins/colorbox/jquery.colorbox.js"><?php echo '</script'; ?>
>
  <!-- shuffle -->
  <?php echo '<script'; ?>
 src="public/plugins/shuffle/shuffle.min.js" defer><?php echo '</script'; ?>
>

  <!-- Template custom -->
  <?php echo '<script'; ?>
 src="public/js/script.js"><?php echo '</script'; ?>
>
    <!-- Google Map API Key-->
  <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZwC5HHUTHvH5hZ6L5dBtnzYaHcy6gfgo" defer><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function() {
        initializeMap();
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
            
    function initializeMap() {
       
        var lat = 25.7503705;
        <?php if ($_smarty_tpl->tpl_vars['data']->value['lat'] <> '') {?>
            lat = '<?php echo $_smarty_tpl->tpl_vars['data']->value['lat'];?>
';
        <?php }?>
        var lon = -108.8148044;
        <?php if ($_smarty_tpl->tpl_vars['data']->value['lon'] <> '') {?>
            lon ='<?php echo $_smarty_tpl->tpl_vars['data']->value['lon'];?>
';
        <?php }?>
        // Configuración del mapa
        var mapProp = {
          center: new google.maps.LatLng(lat, lon),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Agregando el mapa al tag de id googleMap
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
       
        // Creando un marker en el mapa
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(lat,lon),
          map: map,
          title: 'Casa Blanca',
          draggable: false //que el marcador se pueda arrastrar
        });
    }
  <?php echo '</script'; ?>
>
  </div><!-- Body inner end -->
  </body>

  </html><?php }
}
