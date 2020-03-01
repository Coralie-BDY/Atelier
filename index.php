
<?php
require_once("inc/init.php");


// Verif de l'acces à la base de données  
// $r = $pdo->query("SELECT * FROM cars");
// $bddcars = $r->fetch(PDO::FETCH_ASSOC);
// var_dump($bddcars);

$r = $pdo->query("SELECT * FROM cars WHERE purchase_date >= (SELECT DATE_ADD(NOW(), INTERVAL -2 MONTH  ))");
  while($cars = $r->fetch(PDO::FETCH_ASSOC)) {
  $content .= 
  "
<div class=\"item\">
   <div class=\"car-item\">
      <div class=\"car-image\">
         <img class=\"img-fluid\" src=\"$cars[imgs]\" style=\"height:10rem;\" alt=\"image de voiture\">
         <div class='car-overlay-banner'>
            <ul>
               <li><a href=\"descriptif_vehicule.php?id_car=$cars[id_car]\"><i class='fa fa-link'></i></a></li>
               <!--<li><a href=\"#\"><i class='fa fa-dashboard'></i></a></li>-->
            </ul>
         </div>
      </div>
      <div class=\"car-list\">
         <ul class=\"list-inline\">
            <li><i class=\"fa fa-registered\"></i> $cars[first_registration_car]</li>
            <li><i class=\"fa fa-cog\"></i> NAN </li>
            <li><i class=\"fa fa-dashboard\"></i> $cars[km]</li>
         </ul>
      </div>
      <div class=\"car-content\">
         <div class='star'><i class=\"fa fa-star orange-color\"></i><i class=\"fa fa-star orange-color\"></i><i class=\"fa fa-star orange-color\"></i><i class=\"fa fa-star orange-color\"></i><i class=\"fa fa-star-o orange-color\"></i></div>
         <a href=\"descriptif_vehicule.php?id_car=$cars[id_car]\">$cars[model_car]</a>
         <div class=\"separator\"></div>
         <div class=\"price\"><span class=\"old-price\">$cars[old_selling_price]</span><span class=\"new-price\">$cars[selling_price]</span></div>
      </div>
   </div>
</div>
";
}

?>



<!--=================================
 header -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="SH Auto - Achats et ventes de véhicules d'occasion" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>SH Auto - Achats et ventes de véhicules d'occasion</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />

<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />

<!-- revolution -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- logo font -->
<link href="https://fonts.googleapis.com/css?family=Sonsie+One" rel="stylesheet">
 
</head>

<body>
 
<!--=================================
  loading -->
  
 <div id="loading">
  <div id="loading-center">
      <img src="images/loader.gif" alt="">
 </div>
</div>

<!--=================================
  loading -->


<!--=================================
 header -->

<header id="header" class="defualt">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="topbar-left text-lg-left text-center">
           <ul class="list-inline">
             <li> <i class="fa fa-envelope-o"> </i> contact@lethauto.com</li> 
             <li> <i class="fa fa-clock-o"></i> Lun - Sam 9.00 - 19.00. Dim Fermé</li>
           </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="topbar-right text-lg-right text-center">
           <ul class="list-inline">
             <li> <i class="fa fa-phone"></i> (+33) 7 82 14 81 41</li> 
             <li><a href="https://www.facebook.com/sam.lethauto.39"><i class="fa fa-facebook"></i></a></li>   
             <li><a href="https://www.instagram.com/sam.shauto/"><i class="fa fa-instagram"></i></a></li>
           </ul>
        </div>
      </div>
    </div>
  </div>
</div>
 
<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.php"><img id="logo_img" src="images/logo2.png" alt="logo" style="filter: brightness(0) invert(1);"> </a>
                <p id="company-name" style="font-family: 'Sonsie One', cursive;color:white;text-align:center"> SH Auto </p>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li class="active"><a href="index.php"> Accueil</a>
            </li>
            <li><a href="listing-01.php">Voitures <i class="fa fa-angle-down fa-indicator"></i></a>
                  <ul class="drop-down-multilevel">
                    <li><a href="purchase.php">Achat</a></li>
                    <li><a href="listing-01.php">Vente</a></li>
                    <li><a href="car-demand.php">Demande précise</a></li>
                </ul>
            </li>

            <li><a href="contact.php"> Contact </a>
            </li>
            <li><a href="opinion.php">Avis </a> 
            </li>
            <li><a href="connexion.php"> backoffice </a> 
            </li>
            </ul>
           </div>
          </div>
         </div>
        </section>
       </nav>
      <!-- menu end -->
     </div>
    </header>



<!--=================================
 rev slider -->
<section class="slider">
    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="car-dealer-03" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.2.6 fullwidth mode -->
      <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.6">
    <ul>  <!-- SLIDE  -->
        <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
            <img src="revolution/assets/3176d-road-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-5-layer-6" 
           data-x="center" data-hoffset="" 
           data-y="270" 
                data-width="['auto']"
          data-height="['auto']"
          data-transform_idle="o:1;"
     
           data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:800;e:Power4.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
           data-mask_in="x:0px;y:0px;" 
          data-start="1400" 
          data-splitin="chars" 
          data-splitout="none" 
          data-responsive_offset="on" 

          data-elementdelay="0.05" 
          
          style="z-index: 5; white-space: nowrap; font-size: 30px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-align:center;text-transform:uppercase;"> Notre équipe vous souhaite la bienvenue dans notre garage ! </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-5-layer-7" 
           data-x="center" data-hoffset="" 
           data-y="center" data-voffset="-140" 
                data-width="['auto']"
          data-height="['auto']"
          data-transform_idle="o:1;"
     
           data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:800;e:Power4.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
          data-start="1700" 
          data-splitin="chars" 
          data-splitout="none" 
          data-responsive_offset="on" 

          data-elementdelay="0.05" 
          
          style="margin-top:20px;z-index: 6; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-align:center;text-transform:uppercase;">Achat / Vente</div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption button red tp-resizeme know-more" 
           id="slide-5-layer-10" 
           data-x="center" data-hoffset="" 
           data-y="bottom" data-voffset="130" 
                data-width="['auto']"
          data-height="['auto']"
          data-transform_idle="o:1;"
            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power0.easeIn;"
            data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"
     
           data-transform_in="y:bottom;s:600;e:Power2.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="3300" 
          data-splitin="none" 
          data-splitout="none" 
          data-responsive_offset="on" 

          
          style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 18px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;text-align:center;text-transform:uppercase;background-color:rgba(219, 45, 46, 1.00);padding:12px 20px 12px 20px;border-color:rgba(0, 0, 0, 1.00);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">En savoir plus </div>

        <!-- LAYER NR. 4 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-5-layer-12" 
           data-x="right" data-hoffset="70" 
           data-y="center" data-voffset="135" 
                data-width="['none','none','none','none']"
          data-height="['none','none','none','none']"
          data-transform_idle="o:1;"
     
           data-transform_in="x:-50px;opacity:0;s:800;e:Power2.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="620" 
          data-responsive_offset="on" 

          
          style="z-index: 8;"><img src="revolution/assets/4f45e-07-bmw-s2.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

        <!-- LAYER NR. 5 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-5-layer-11" 
           data-x="120" 
           data-y="center" data-voffset="130" 
                data-width="['none','none','none','none']"
          data-height="['none','none','none','none']"
          data-transform_idle="o:1;"
     
           data-transform_in="x:50px;opacity:0;s:800;e:Power2.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="200" 
          data-responsive_offset="on" 

          
          style="z-index: 9;"><img src="revolution/assets/e13ec-06-audi-s2.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
      </li>
      <!-- SLIDE  -->
        <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
            <img src="revolution/assets/3176d-road-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-6-layer-4" 
           data-x="3" 
           data-y="center" data-voffset="50" 
                data-width="['none','none','none','none']"
          data-height="['none','none','none','none']"
          data-transform_idle="o:1;"
     
           data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="2060" 
          data-responsive_offset="on" 

          
          style="z-index: 5;"><img src="revolution/assets/74231-04-audi.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-6-layer-5" 
           data-x="right" data-hoffset="-10" 
           data-y="center" data-voffset="60" 
                data-width="['none','none','none','none']"
          data-height="['none','none','none','none']"
          data-transform_idle="o:1;"
     
           data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="2060" 
          data-responsive_offset="on" 

          
          style="z-index: 6;"><img src="revolution/assets/35261-05-honda.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-6-layer-6" 
           data-x="center" data-hoffset="" 
           data-y="270" 
                data-width="['auto']"
          data-height="['auto']"
          data-transform_idle="o:1;"
     
           data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:300;e:Power4.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
           data-mask_in="x:0px;y:0px;" 
          data-start="3260" 
          data-splitin="chars" 
          data-splitout="none" 
          data-responsive_offset="on" 

          data-elementdelay="0.05" 
          
          style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-align:center;text-transform:uppercase;">Besoin d'une voiture? </div>

        <!-- LAYER NR. 4 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-6-layer-7" 
           data-x="center" data-hoffset="" 
           data-y="center" data-voffset="-140" 
                data-width="['auto']"
          data-height="['auto']"
          data-transform_idle="o:1;"
     
           data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:300;e:Power4.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
           data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
          data-start="4290" 
          data-splitin="chars" 
          data-splitout="none" 
          data-responsive_offset="on" 

          data-elementdelay="0.05" 
          
          style="z-index: 8; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-align:center;text-transform:uppercase;"><a href='listing-01.html'>Retrouver notre parc en cliquant ici! </a> </div>

        <!-- LAYER NR. 5 -->
        <div class="tp-caption button red  tp-resizeme know-more" 
           id="slide-6-layer-10" 
           data-x="center" data-hoffset="" 
           data-y="bottom" data-voffset="140" 
                data-width="['auto']"
          data-height="['auto']"
          data-transform_idle="o:1;"
            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power0.easeIn;"
            data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"
     
           data-transform_in="y:bottom;s:600;e:Power2.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="5329.8614501953" 
          data-splitin="none" 
          data-splitout="none" 
          data-responsive_offset="on" 

           data-end="8999.8614501953" 

          style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 18px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;text-align:center;text-transform:uppercase;background-color:rgba(219, 45, 46, 1.00);padding:12px 20px 12px 20px;border-color:rgba(0, 0, 0, 1.00);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"> En savoir plus </div>

        <!-- LAYER NR. 6 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-6-layer-3" 
           data-x="right" data-hoffset="159" 
           data-y="center" data-voffset="81" 
                data-width="['none','none','none','none']"
          data-height="['none','none','none','none']"
          data-transform_idle="o:1;"
     
           data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="1220" 
          data-responsive_offset="on" 

          
          style="z-index: 10;"><img src="revolution/assets/ec416-03-huydai.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

        <!-- LAYER NR. 7 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-6-layer-2" 
           data-x="202" 
           data-y="center" data-voffset="80" 
                data-width="['none','none','none','none']"
          data-height="['none','none','none','none']"
          data-transform_idle="o:1;"
     
           data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="1200" 
          data-responsive_offset="on" 

          
          style="z-index: 11;"><img src="revolution/assets/1fa45-02-bmw.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

        <!-- LAYER NR. 8 -->
        <div class="tp-caption   tp-resizeme" 
           id="slide-6-layer-1" 
           data-x="center" data-hoffset="" 
           data-y="center" data-voffset="100" 
                data-width="['none','none','none','none']"
          data-height="['none','none','none','none']"
          data-transform_idle="o:1;"
     
           data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:670;e:Power3.easeInOut;" 
           data-transform_out="opacity:0;s:300;" 
          data-start="500" 
          data-responsive_offset="on" 

          
          style="z-index: 12;"><img src="revolution/assets/95515-o1-kia.png" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
      </li>
    </ul>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
    </div>
  </section>  

<!--=================================
  rev slider -->


<!--=================================
 welcome -->

<section class="welcome-block objects-car page-section-ptb white-bg">
 <div class="objects-left left"><img class="img-fluid objects-1" src="images/objects/01.jpg" alt="" style="-webkit-transform: scaleX(-1);transform: scaleX(-1);"></div>
 <div class="objects-right right"><img class="img-fluid objects-2" src="images/objects/01.jpg" alt=""></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span>Bienvenu dans notre garage</span>
           <h2>SH Auto</h2>
           <div class="separator"></div>
           <!--<p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <strong>Amazing dealership website</strong>  developed especially for car sellers, dealers or auto motor retailers. You can use this template for creating website based on any framework and any language.</p> </div>-->

           <p> Notre équipe à le plaisir de vous accueillir du <strong>Lundi au Samedi, de 9h00 à 19h00 </strong> au <strong> Fontenay-aux-Roses</strong>. Forte d'une longue expérience en mécanique, notre équipe met à votre disposition un <strong>parc</strong> où vous y trouverez de bonnes <strong>occasions</strong> à des prix défiants toute concurrence.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-beetle"></i>
          </div>
          <div class="content">
            <h6>Ventes de véhicules</h6>
            <p>Nous disposons de nombreuses occasions à des prix divers, défiants toute concurrence.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-interface-1"></i>
          </div>
          <div class="content">
            <h6>Reprise de vos véhicules</h6>
            <p>Envie de changer ou tout simplement de revendre un véhicule, nous effectuons également des reprises.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-key"></i>
          </div>
          <div class="content">
            <h6>Réparations clef en main</h6>
            <p>Nos réparations sont garanties 3 mois, moteur et boîte inclus selon la réparation effectuée. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-wallet"></i>
          </div>
          <div class="content">
            <h6>Prix compétitifs</h6>
            <p>Chez SH Auto, nous nous efforçons de vous garantir qualité et prix défiant toute concurrence.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
       <div class="col-md-12">
          <div class="halp-call text-center">
            <img class="img-fluid" src="images/team/01.jpg" alt="">
            <span style="color:white;background-color: rgba(0, 0, 0, 0.4);margin-bottom:0">Une question ?</span>
            <h2 class="text-red" style="background-color: rgba(0, 0, 0, 0.4);padding:5px">(+33) 7 82 14 81 41</h2>
          </div>
       </div>
    </div>
  </div>
</section>

<!--=================================
 welcome -->


<!--=================================
 feature-car -->

<section class="feature-car bg-2 bg-overlay-black-70 page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span class="text-white">Découvrez nos dernières occasions</span>
         <h2 class="text-white"> Petits prix </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-12">
     <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="4" data-md-items="4" data-sm-items="2" data-xs-items="1" data-space="20">


      <!-- RENDRE CETTE PARTIE DYNAMIQUE -->

      <?php 
      echo $content;
      ?>
      <!-- ALLER RECHERCHER EN BASE LES VOITURES RENTRÉES CES 2 DERNIERS MOIS ET DISPONIBLE (AVAILABILITY) -->

</section>   

<!--=================================
 feature-car -->
 

<!--=================================
 custom block -->

<!--=================================
 custom block -->


<!--=================================
 latest news -->

<section class="latest-blog objects-car white-bg page page-section-ptb">
 <div class="objects-left"><img class="img-fluid objects-1" src="images/objects/03.jpg" alt=""></div>
 <div class="objects-right"><img class="img-fluid objects-2" src="images/objects/04.jpg" alt=""></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
         <span>Votre budget</span>
         <h2> Besoin d'un véhicule en particulier? </h2>
         <div class="separator"></div>
      </div>
      </div>
    </div>
    <div class="blog-1">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid" src="images/blog/01.jpg" alt="">
        </div>
        <div class="col-md-6">
          <div class="blog-content">
            <a class="link" href="#"> Nous vous trouvons le véhicule en fonction de votre budget et vos besoins. </a>
            <span class="uppercase"> Budget  | <strong class="text-red"> Besoins </strong></span>
            <p> Parceque nous comprenons que vous avez un budget et des envies particulières, notre équipe est également à votre disposition pour trouver le véhicule de vôtre rêve auprès de nos fournisseurs.</p>
            <a class="button border" href="purchase.html">Envoyer votre demande</a>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
 latest news -->


<!--=================================
 play-video -->

<!--=================================
 play-video -->
 

<!--=================================
 Counter -->

<section class="counter counter-style-1 light page-section-ptb">
    <div class="play-video-bg bg-3 bg-overlay-black-70">
  <div class="container">
   <div class="row">
     <div class="col-lg-3 col-md-6 text-center">
       <div class="counter-block">
          <i class="glyph-icon flaticon-beetle"></i>
          <h6 class="text-white">Véhicules en stock  </h6>
          <b class="timer" data-to="3968" data-speed="10000"></b>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 text-center">
      <div class="counter-block">
         <i class="glyph-icon flaticon-interface"></i>
          <h6 class="text-white">Retours Positifs</h6>
          <b class="timer" data-to="5568" data-speed="10000"></b>
       </div> 
     </div>
     <div class="col-lg-3 col-md-6 text-center">
      <div class="counter-block">
          <i class="glyph-icon flaticon-circle"></i>
          <h6 class="text-white">Clients satisfaits</h6>
          <b class="timer" data-to="8908" data-speed="10000"></b>
       </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="counter-block">
          <i class="glyph-icon flaticon-cup"></i>
          <h6 class="text-white">Véhicules entretenus</h6>
          <b class="timer" data-to="9968" data-speed="10000"></b>
       </div>
     </div>
    </div>
  </div>
</div>
</section>

 <!--=================================
 Counter -->
 <!--=================================
 testimonial -->

<section class="testimonial-1 white-bg page page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
         <span>Ce que nos clients disent sur nous</span>
         <h2>Vos témoignages </h2>
         <div class="separator"></div>
      </div>
      </div>
    </div>
   <div class="row">
    <div class="col-md-12">
     <div class="owl-carousel" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="20">
      <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image" style="height:155px">
             <img class="img-fluid" src="images/testimonial/02.jpg" alt="">
           </div> 
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/02.jpg" alt="">
               <h6>Natasha M.</h6>
               <span>Achat de véhicule</span>
             </div>
             <div class="testimonial-content">               
                <p>J'ai apprécié les services de SH Auto pour l'acquisition de mon dernier véhicule. Les véhicules y sont bien entretenus et révisés, aucune mauvaise suprise après achat !</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>
     <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image" style="height:155px">
             <img class="img-fluid" src="images/testimonial/01.jpg" alt="">
           </div> 
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/04.jpg" alt="">
               <h6>Francis D.</h6>
               <span>Réparations</span>
             </div>
             <div class="testimonial-content">               
                <p> Cela fait maintenant plus d'un an que j'ai fait l'acquisition d'un véhicule chez SH Auto et j'y entretiens depuis mes véhicules familiaux chez eux aussi. Service de qualité à prix abordables.</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>   
      <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image" style="height:155px">
             <img class="img-fluid" src="images/testimonial/03.jpg" alt="">
           </div> 
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/03.jpg" alt="">
               <h6>Khadija B.</h6>
               <span>Achat de véhicule</span>
             </div>
             <div class="testimonial-content">               
                <p>Nous étions assez éxigents mon mari et moi quant à l'achat d'une nouveau véhicule familiale, SH Auto a néanmoins réussi à répondre à nos attentes en peu de temps.</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image" style="height:155px">
             <img class="img-fluid" src="images/testimonial/04.jpg" alt="">
           </div> 
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/05.jpg" alt="">
               <h6>Sandra A.</h6>
               <span>Achat/Vente de véhicule</span>
             </div>
             <div class="testimonial-content">               
                <p>Je souhaitais changer de véhicule après avoir gardé longtemps la même, SH Auto m'a repris mon ancien véhicule pour m'en proposer une de mon choix. Equipe proche et au service du client.</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>
      </div>
     </div>
    </div>
   </div>
  </section>

 <!--=================================
 testimonial -->


<!--=================================
 footer -->

<?php

require_once("inc/footer.php");

?>
