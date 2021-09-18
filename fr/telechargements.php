<?php
   $folder = 'files';
   if(isset($_GET['file']) && file_exists("{$folder}/".$_GET['file'])){
      $file = $_GET['file'];
      $type = filetype("{$folder}/{$file}");
      $size = filesize("{$folder}/{$file}");
      header("Content-Description: File Transfer");
      header("Content-Type:{$type}"); 
      header("Content-Length:{$size}");
      header("Content-Disposition: attachment; filename=$file"); 
      readfile("{$folder}/{$file}");
   exit;
   }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="../">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Téléchargements - FreeWebs</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->

    <!--Arc.io-->
    <script async src="https://arc.io/widget.min.js#2KZJhNb6"></script>

    <!--Tawk.to-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6124ff5ad6e7610a49b1c24b/1fds8auu1';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
</head>

<body style="visibility: hidden !important;">
    <!--Stop Adblock start-->
    <div id="babasbmsgx" style="visibility: visible !important;"><h1>ERREUR</h1><p>S'il vous plaît désactiver votre bloqueur de pubs ou de ressources pour voir cette page.</p></div>
    <!--Stop Adblock end-->

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/logo-color.webp" alt="logo" class="img-fluid" width="250" />
            <div class="preloader">
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
        </div>
    </div>
    <!--preloader end-->
    <!--header section start-->
    <header id="header" class="header-main">
        <!--main header menu start-->
        <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                    <!--logo start-->
                    <a class="navbar-brand pt-0" href="fr/accueil"><img src="assets/img/logo-white.webp" alt="logo" class="img-fluid" width="113"/></a>
                    <!--logo end-->

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="ti-menu"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto main-navbar-nav">
                            <!--home start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                                <a id="homeMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false">Accueil</a>

                                <!--home mega menu start-->
                                <div class="hs-mega-menu main-sub-menu w-100" aria-labelledby="homeMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-sm-6 col-12 gray-light-bg custom-radius-left">
                                            <div class="menu-item-wrap p-4">
                                                <h6>#1 Hébergement gratuit</h6>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>CPanel</strong> facile d'utilisation</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Bande passante</strong> illimitée</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Améliorations</strong> gratuites</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>99%</strong> Uptime garanti</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Support 24/7</strong> inclus</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>CloudFlare</strong> inclus</small></li>
                                                </ul>
                                                <a class="btn btn-brand-03 mt-3" href="fr/accueil">En savoir plus <span
                                                        class="fas fa-angle-right ml-2"></span></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-sm-6 col-12 custom-radius-right">
                                            <div class="row no-gutters p-4">
                                                <div class="col-12">
                                                    <span class="sub-menu-title pl-3">Nos principaux paratenaires</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="title-with-icon-item">
                                                        <a class="title-with-icon-link" href="https://byet.host">
                                                            <img src="assets/img/client-1-color.png" width="85" class="img-fluid" alt="client" />
                                                            <small class="u-header__promo-text">Byet</small>
                                                        </a>
                                                    </div>
                                                    <div class="title-with-icon-item">
                                                        <a class="title-with-icon-link" href="https://nanoheberg.fr">
                                                            <img src="assets/img/client-3-color.png" width="85" class="img-fluid" alt="client" />
                                                            <small class="u-header__promo-text">NanoHeberg</small>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="title-with-icon-item">
                                                        <a class="title-with-icon-link" href="https://myownfreehost.net" target="_blank">
                                                            <img src="assets/img/client-2-color.png" width="85" class="img-fluid" alt="client" />
                                                            <small class="u-header__promo-text">MyOwnFreeHost</small>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--home mega menu end-->
                            </li>
                            <!--home end-->

                            <!-- #pages start
                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                                #Pages - Submenu
                                <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="about-us">About Us</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="black-friday-coming">Black Friday Coming<span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="black-friday-sale-page">Black Friday Sale<span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="offer-single-page">Black Friday Single<span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="terms-condition">Terms & Condition<span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="privacy-policy">Privacy Policy<span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesPricing" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPricing">Pricing</a>

                                        <ul id="navSubmenuPagesPricing" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesPricing" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-default">Pricing Default</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-package">Pricing Packages</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-web-hosting">Web Hosting Packages</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-windows-hosting">Windows Hosting</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="pricing-comparision">Pricing Comparison</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="vps-pricing">VPS Pricing</a></li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesBlog" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesBlog">Blog</a>

                                        <ul id="navSubmenuPagesBlog" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesBlog" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="blog-grid">Blog Grid</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="blog-details">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesSpecialty" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                                        <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="domain-search-result">Search Search Result <span class="badge badge-warning ml-2">New</span></a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="cover-page">Cover Page</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="coming-soon">Coming Soon</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="thank-you">Thank You</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="404">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                                        <ul id="navSubmenuPagesLogin" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="login">Login</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link" href="sign-up">Signup</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link" href="password-reset">Recover Account</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                #End Pages - Submenu
                            </li>
                            pages end-->


                            <!--hosting start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Hébergement</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu main-sub-menu" style="width: 715px" aria-labelledby="hostingMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/hebergement-web">
                                                        <div class="media align-items-center">
                                                            <div class="menu-item-icon rounded-circle primary-bg">
                                                                <i class="fas fa-globe"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">Hébergement web</span>
                                                                <small class="u-header__promo-text">À partir de <strong>0.00€</strong></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/hebergement-vps">
                                                        <div class="media align-items-center">
                                                            <div class="menu-item-icon rounded-circle accent-bg">
                                                                <i class="fas fa-server"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">Hébergement de VPS</span>
                                                                <small class="u-header__promo-text">À partir de <strong>9.99€</strong></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->

                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/hebergement-serveurs">
                                                        <div class="media align-items-center">
                                                            <div class="menu-item-icon rounded-circle secondary-bg">
                                                                <i class="fas fa-server"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">Hébergement de serveurs dédiés</span>
                                                                <small class="u-header__promo-text">À partir de <strong>149.99€</strong></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/hebergement-wordpress">
                                                        <div class="media align-items-center">
                                                            <div class="menu-item-icon rounded-circle dribbble-bg">
                                                                <i class="fab fa-wordpress"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">Hébergement WordPress</span>
                                                                <small class="u-header__promo-text">À partir de <strong>0.00€</strong></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/hebergement-jeux" target="_blank">
                                                        <div class="media align-items-center">
                                                            <div class="menu-item-icon rounded-circle twitter-bg">
                                                                <i class="fas fa-gamepad"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">Hébergement de serveurs de jeux</span>
                                                                <small class="u-header__promo-text">À partir de <strong>2.25€</strong></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Mega Menu Banner -->
                                    <div class="u-header__product-banner bg-image" data-overlay="8">
                                        <div class="background-image-wraper custom-radius-bottom" style="background: url('assets/img/hero-8.jpg')no-repeat center center / cover; opacity: 1;"></div>
                                        <div class="u-header__product-banner-content position-relative z-index text-center text-white">
                                            <div class="mb-4">
                                                <h5 class="text-white">Réduction de 15% chez NanoHeberg</h5>
                                                <div class="clock menu-countdown my-4"></div>
                                            </div>
                                            <a class="btn btn-brand-03" href="https://nanoheberg.fr" target="_blank">C'est parti !<span class="ti-arrow-right pl-2"></span></a>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu Banner -->
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--hosting end-->

                            <!--domain start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="domainMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Domaine</a>
                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu main-sub-menu" style="width: 660px" aria-labelledby="domainMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="menu-item-wrap p-3">
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/recherche-de-domaine">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i class="fas fa-globe mr-2 color-primary"></i>
                                                            <span class="u-header__promo-title">Recherche de domaine</span>
                                                        </div>
                                                        <small class="u-header__promo-text">Trouvez le domaine parfait pour votre entreprise</small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/tranfert-de-domaine">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i class="fas fa-exchange-alt mr-2 color-accent"></i>
                                                            <span class="u-header__promo-title">Transfert de domaine</span>
                                                        </div>
                                                        <small class="u-header__promo-text">Transférez votre domaine facilement à l'aide de notre outil</small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                                <!--menu title with subtitle and icon item start-->
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="fr/enregistrer-un-domaine">
                                                        <div class="d-flex align-items-center pb-1">
                                                            <i class="fas fa-copyright mr-2 instagram-color"></i>
                                                            <span class="u-header__promo-title">Enregistrement de domaine</span>
                                                        </div>
                                                        <small class="u-header__promo-text">Enregistrez votre nom de domaine</small>
                                                    </a>
                                                </div>
                                                <!--menu title with subtitle and icon item end-->
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6 gray-light-bg custom-radius-right">
                                            <div class="menu-item-wrap p-4">
                                                <h6>#1 Hébergement gratuit</h6>
                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>CPanel</strong> facile d'utilisation</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>99%</strong> uptime garanti</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>Petits</strong> prix</small></li>
                                                    <li class="py-1"><small><span class="fas fa-check-circle text-success mr-2"></span><strong>47</strong> extensions possibles</small></li>
                                                </ul>
                                                <a class="btn btn-brand-03 mt-3" href="fr/recherche-de-domaine">En savoir plus<span
                                                        class="fas fa-angle-right ml-2"></span></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--domain end-->

                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="fr/affiliation">Affiliation</a>
                            </li>

                            <!--about start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Autre</a>

                                <!--about submenu start-->
                                <div class="hs-mega-menu main-sub-menu" style="width: 320px" aria-labelledby="aboutMegaMenu">
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="fr/a-propos-de-nous">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/community.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">À propos de nous</span>
                                                    <small class="u-header__promo-text">Nous sommes les leader de l'hébergement gratuit</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="fr/nous-contacter">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Nous contacter</span>
                                                    <small class="u-header__promo-text">Vous faîtes face à un problème, contactez-nous</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="fr/nos-partenaires">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/partner.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Nos partenaires</span>
                                                    <small class="u-header__promo-text">Retourvez nos partenaires de confiance</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="fr/reseau">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/network.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Notre réseau</span>
                                                    <small class="u-header__promo-text">Découvrez l'étendue de notre réseau</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="fr/blog">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/blog.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Blog</span>
                                                    <small class="u-header__promo-text">Nos dernières nouvelles</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                </div>
                                <!--about submenu end-->
                            </li>
                            <!--about end-->

                            <!--button start-->
                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="btn btn-brand-03 animated-btn" href="fr/espace-client">
                                    <span class="fa fa-user pr-2"></span> Espace Client
                                </a>
                            </li>
                            <!--button end-->
                        </ul>
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        <!--main header menu end-->
    </header>
    <!--header section end-->

    <div class="main">

        <!--hero section start-->
        <section class="ptb-120 gradient-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-8">
                        <div class="hero-content-wrap text-white text-center position-relative">
                            <h1 class="text-white">Télécharements</h1>
                            <p class="lead">Nous vous mettons à dispositions de nombreux outilis en téléchargements gratuit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--our partners section start-->
        <section class="our-partner-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <?php 
                    foreach (glob("files/*.*") as $v) {
                    $link = basename($v);
                    $name = pathinfo($v, PATHINFO_FILENAME);
                    $pathinfo = pathinfo($v);
                    $extension = $pathinfo['extension'];
                    $filesize = filesize($v);
                    $filesize = round($filesize / 1024 / 1024, 2);
                    echo '<div class="col-md-4 col-lg-3"><div class="single-partner-wrap card-bottom-line bg-white border rounded text-center p-4 mt-4"><div class="partner-logo mb-3"><img src="assets/img/files/'.$extension.'.svg" alt="Fichier - FreeWebs" class="img-fluid" /></div><div class="partner-heading mb-2"><h5 class="mb-0">'.$name.'</h5><h6><strong>'.$filesize.' Mo</strong></h6></div><div class="partner-info"><p>Type de fichier: '.$extension.'</p><a href="https://links.freewebs.ml/serve/sitelinks/?id=700243&url=https://www.freewebs.ml/fr/telechargements?file='.$link.'" class="view-details-link" target="_blank"><span class="fas fa-download"></span> Télécharger</a></div></div></div>';
                    }
                    ?>
                    
                </div>
            </div>
        </section>
        <!--our partners section end-->

        <!--call to action section start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">Meilleur <br> hébergement web</h2>
                            <p>Obtenez votre site web gratuitement, pas besoin de carte bancaire, on vous le jure tout est gratuit, et ça le restera à vie! </p>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="fr/hebergement-web" class="btn btn-brand-03"> C'est parti! </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/server-room.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->

        <!--faq section start-->
        <section id="faq" class="ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Questions fréquament posées</h2>
                            <p>Vous avez une question? Peut être que la réponse se trouve ici.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12">
                        <div id="accordion" class="accordion faq-wrap">
                            <div class="card mb-3">
                                <a class="card-header " data-toggle="collapse" href="#collapse0" aria-expanded="false">
                                    <h6 class="mb-0 d-inline-block">Comment devenir partenaire?</h6>
                                </a>
                                <div id="collapse0" class="collapse show" data-parent="#accordion" style="">
                                    <div class="card-body white-bg">
                                        <p>Vous voulez devenir partenaire? Contactez-nous via notre adresse e-mail, le serveur Discord ou encore le Chat Bot, en nous donnant plus d'informations sur votre demande: nombre de personnes / utilisateurs, adresse du site / serveur Discord, avantages pour la direction de FreeWebs, etc... </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                    <h6 class="mb-0 d-inline-block">Serais-je mis en avant sur votre site?</h6>
                                </a>
                                <div id="collapse1" class="collapse " data-parent="#accordion" style="">
                                    <div class="card-body white-bg">
                                        <p>La réponse est oui, vous serez référencé sur cette page, ainsi que notre serveur Discord.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq section end-->

    </div>

    <!--footer section start-->
    <footer class="footer-1 ptb-60 gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="#" class="navbar-brand mb-2">
                        <img src="assets/img/logo-white.webp" alt="logo" class="img-fluid" width="113">
                    </a>
                    <br>
                    <p>Inventer un hébergement gratuit plus durable et égal pour tous</p>
                    <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                        <li class="list-inline-item"><a class="twitter" href="https://twitter.com/freewebshost" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="https://www.youtube.com/channel/UC6Il8wdL4aBx1ezlbhy2yCA" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="instagram" href="https://instagram.com/freewebshost"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row mt-0">
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Ressources</h6>
                            <ul>
                                <li>
                                    <a href="fr/plan-du-site">Plan du site</a>
                                </li>
                                <li>
                                    <a href="fr/evenements">Evénements</a>
                                </li>
                                <li>
                                    <a href="https://github.com/FreeWebsOff" target="_blank">Code source</a>
                                </li>
                                <li>
                                    <a href="fr/telechargements">Téléchargements</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Principaux partenaires</h6>
                            <ul>
                                <li>
                                    <a href="https://byet.host/" target="_blank">Byet</a>
                                </li>
                                <li>
                                    <a href="https://myownfreehost.net" target="_blank">MyOwnFreeHost</a>
                                </li>
                                <li>
                                    <a href="https://nanoheberg.fr" target="_blank">NanoHeberg</a>
                                </li>
                                <li>
                                    <a href="#">Coming soon</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Compagnie</h6>
                            <ul>
                                <li>
                                    <a href="fr/a-propos-de-nous">À propos de nous</a>
                                </li>
                                <li>
                                    <a href="fr/notre-experience">Notre expérience</a>
                                </li>
                                <li>
                                    <a href="fr/nous-aider">Nous aider</a>
                                </li>
                                <li>
                                    <a href="fr/notre-equipe">Notre équipe</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h6 class="font-weight-normal">Support</h6>
                            <ul>
                                <li>
                                    <a href="fr/faq">FAQ</a>
                                </li>
                                <li>
                                    <a href="https://wiki.freewebs.ml" target="_blank">Wiki</a>
                                </li>
                                <li>
                                    <a href="fr/nous-contacter">Nous contacter</a>
                                </li>
                                <li>
                                    <a href="https://status.freewebs.ml" target="_blank">Statut des services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script>, FreeWebs, tous droits réservés</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="small-text" href="fr/termes-&-conditions">Termes et conditions</a></li>
                            <li class="list-inline-item"><a class="small-text" href="fr/politique-de-confidentialite">Politique de confidentialité</a></li>
                            <li class="list-inline-item"><a class="small-text" href="fr/mentions-legales">Mention légales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-chevron-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/vendors/hs.megamenu.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/antiadblock.js"></script>
    <!--endbuild-->
</body>

</html>