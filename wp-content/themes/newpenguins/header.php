<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="matx no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>New Penguins</title>
        <meta name="description" content="Material Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- matx favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/matx-icon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/matx-icon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/matx-icon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/matx-icon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/matx-icon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/matx-icon/apple-touch-icon-152x152.png" />
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/Penguin_logo.ico" type="image/x-icon" />
        <meta name="application-name" content="&nbsp;" />
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/matx-icon/mstile-144x144.png"/>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700italic,700,500italic,900' rel='stylesheet' type='text/css'>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/mdl/material.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/sweetalert/sweet-alert.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/sweetalert/ie9.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/libs/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/libs/revolution/fonts/font-awesome/css/font-awesome.min.css">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/libs/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/libs/revolution/css/layers.css">
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/libs/revolution/css/navigation.css">



        <!-- Header Scripts -->
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Overlay display while mobile navigation will open  -->
        <div class="nav-overlay-bg"></div>

        <!-- start site main header -->
        <header class="main-header">

            <!-- start desktop logo -->
            <a href="index.html" class="logos matx-logo">
                <img class="logo-big" src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png" style="height:100px;" alt="logo">
                <img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/img/Penguin_logo.png" style="height:60px;" alt="logo">
            </a>
            <!-- end desktop logo -->

            <!-- start desktop nav -->
            <nav class="nav-typo main-nav">

                <ul>
                    <?php
                    

                   wp_nav_menu( array('theme_location' => 'header-menu' ));
                    ?>

                </ul>
            </nav>
            <!-- end desktop nav -->

            <!-- start mobile logo -->
            <a href="index.html" class="logo matx-logo mobile-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_lite.png" alt="logo">
            </a>
            <!-- end mobile logo -->

            <!-- toogle icons, which are responsible for display and hide menu in small layout -->
            <div class="mdl-layout__drawer-button mobile-menu-area">
                <i id="menu-back-btn" class="mobile-menu-ctrl zmdi zmdi-arrow-right"></i>
                <i id="menu-show-btn" class="mobile-menu-ctrl active zmdi zmdi-menu"></i>
            </div>

        </header>
        <!-- end site main header -->
        <!-- start mobile nav -->
        <nav class="nav-typo mobile-nav">
            <ul>
                <li><a href="#home" data-target="#home" class="menu-smooth-scroll">Home</a></li>
                <li><a href="#about" data-target="#about" class="menu-smooth-scroll">About</a></li>
                <li><a href="#service" data-target="#service" class="menu-smooth-scroll">Service</a></li>
                <li><a href="#work" data-target="#work" class="menu-smooth-scroll">Work</a></li>
                <li><a href="#team" data-target="#team" class="menu-smooth-scroll">Team</a></li>
                <li><a href="#blog" data-target="#blog" class="menu-smooth-scroll">Blog</a></li>
                <li><a href="#pricing" data-target="#pricing" class="menu-smooth-scroll">Pricing</a></li>
                <li><a href="#contact" data-target="#contact" class="menu-smooth-scroll">contact</a></li>
                <li><a target="_blank" href="<?php echo get_template_directory_uri(); ?>/rtl/index.html">RTL Version</a></li>
                <li class="menu-item-has-children">
                    <a href="#">More</a>
                    <ul class="sub-menu">
                        <li><a href="components.html">Extra Components</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog Pages</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/blog-standard.html">blog Standard</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/blog-masonry-sidebar.html">Blog Masonry Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Single Blog Pages</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/single/single.html">Image</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/single/single-audio.html">Audio</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/single/single-video-vimeo.html">Vimeo</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/single/single-video-youtube.html">Youtube</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/single/single-video.html">HTML5 Video</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/single/single-slider.html">Slider</a></li>
                                <li><a href="<?php echo get_template_directory_uri(); ?>/blog/single/single-quote.html">Quote</a></li>
                            </ul>
                        </li>
                        <li><a target="_blank" href="http://themeforest.net/item/matx-material-design-agency-template/13887396">Buy Now</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- end mobile nav -->
