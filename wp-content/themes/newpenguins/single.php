<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/matx-icon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/matx-icon/favicon-16x16.png" sizes="16x16" />
        <meta name="application-name" content="&nbsp;" />
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/matx-icon/mstile-144x144.png" />
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,400italic,500italic' rel='stylesheet' type='text/css'>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/mdl/material.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">


        <!-- Header Scripts -->

        <!--[if lt IE 9]>
            <script src="../assets/js/vendor/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body class="blog-page single-post-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php while ( have_posts() ) : the_post();
            $large_image = get_field('afbeelding');
            ?>
            <style>
              .single-page-bg {
                  background-image: url('<?php echo $large_image;?>');
              }
            </style>

        <!-- Overlay display while mobile navigation will open  -->
        <div class="nav-overlay-bg"></div>

        <!-- start banner -->
        <section class="banner-header section-main">

            <div class="bg-image single-page-bg" data-top="transform: translate3d(0px, 0px, 0px)" data-top-bottom="transform: translate3d(0px, 250px, 0px)"></div>

            <section class="section-main">
                <div class="overlay overlay-three">
                    <!-- start banner content -->
                    <div class="container">
                        <div class="section-common-space">
                            <div class="clearfix banner-content">
                                <div class="pull-left banner-content-inner">
                                    <!-- single page post title -->
                                     <h2><?php the_title() ?></h2>

                                    <!-- start single page post meta -->
                                    <div class="clearfix post-meta">
                                        <span>Door <?php the_author(); ?> </span>
                                        <span><?php the_time('j F Y'); ?></span>
                                        <span class="cm">5 Comments</span>
                                        <span><?php the_category( ', ' ); ?></span>
                                    </div>
                                    <!-- end single page post meta -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end banner content -->

                </div>
            </section>

            <!-- start site main header -->
            <header class="main-header">

                <!-- start desktop logo -->
                <a href="index.html" class="logos matx-logo">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/Penguin_logo.png" style="height:60px;" alt="logo">
                </a>
                <!-- end desktop logo -->

                <!-- start desktop nav -->
                <nav class="nav-typo main-nav">
                    <ul>
                        <li><a href="#home" data-target="#home" class="menu-smooth-scroll">Home</a></li>
                        <li><a href="#wat" data-target="#wat" class="menu-smooth-scroll">Wat</a></li>
                        <li><a href="#waarom" data-target="#waarom" class="menu-smooth-scroll">Waarom</a></li>
                        <li><a href="#hoe" data-target="#hoe" class="menu-smooth-scroll">Hoe</a></li>
                        <li><a href="#wie" data-target="#wie" class="menu-smooth-scroll">Wie</a></li>
                        <li><a href="#contact" data-target="#contact" class="menu-smooth-scroll">Contact</a></li>
                    </ul>
                </nav>
                <!-- end desktop nav -->

                <!-- start mobile logo -->
                <a href="index.html" class="logo matx-logo mobile-logo">
                    <img src="img/logo_lite.png" alt="logo">
                </a>
                <!-- end mobile logo -->

                <!-- toogle icons, which are responsible for display and hide menu in small layout -->
                <div class="mdl-layout__drawer-button mobile-menu-area">
                    <i id="menu-back-btn" class="mobile-menu-ctrl zmdi zmdi-arrow-right"></i>
                    <i id="menu-show-btn" class="mobile-menu-ctrl active zmdi zmdi-menu"></i>
                </div>

            </header>
            <!-- end mobile nav -->

        </section>
        <!-- end banner -->

        <!-- start main wrapper -->
        <main class="main-wrapper blog-single">
            <section class="section-main single-blog blog-bg">
                <div class="section-common-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <!-- start main post -->
                                <div class="main-post">

                                    <!-- start single page post start -->
                                    <article class="single-post-content">

                                        <!-- start single post content -->
                                        <div class="post-entry">
                                            <h3><?php the_title() ?></h3>
                                            <p><?php the_content() ?></p>
                                        </div>
                                        <!-- end single post content -->

                                        <!-- start share post -->
                                        <div class="clearfix tab-histry post-share">
                                            <span>Social Share</span>
                                            <ul class="pull-right clearfix social share-social">
                                                <li><a href=""><i class="zmdi zmdi-facebook"></i><span>12</span></a></li>
                                                <li><a href=""><i class="zmdi zmdi-twitter"></i><span>5</span></a></li>
                                                <li><a href=""><i class="zmdi zmdi-google-plus"></i><span>0</span></a></li>
                                            </ul>
                                        </div>
                                        <!-- end share post -->

                                    </article>
                                    <!-- end single page post start -->

                                    <!-- start comment section -->
                                    <div class="white-box comments-section">
                                        <h2 class="com-title">4 Comments</h2>
                                        <ul>
                                            <li>
                                                <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                    <div class="clearfix comment-thumb">
                                                        <a href="#" class="pull-left ctwr"><img src="<?php echo get_template_directory_uri(); ?>/img/comment-thumb/cr1.png" alt="User Image"></a>
                                                        <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                        <div class="comment-meta">
                                                            <a href="">CoderPixel says:</a>
                                                            <div class="date">October 24, 2015 at 07.50 am</div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                    </div>
                                                </div>

                                                <ul>
                                                    <li>
                                                        <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                            <div class="clearfix comment-thumb">
                                                                <a href="#" class="pull-left ctwr"><img src="<?php echo get_template_directory_uri(); ?>/img/comment-thumb/cr2.png" alt="User Image"></a>
                                                                <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                <div class="comment-meta">
                                                                    <a href="">EKHTIAR MAHMUD says:</a>
                                                                    <div class="date">October 24, 2015 at 07.50 am</div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                                    <div class="clearfix comment-thumb">
                                                                        <a href="#" class="pull-left ctwr"><img src="<?php echo get_template_directory_uri(); ?>/img/comment-thumb/cr3.png" alt="User Image"></a>
                                                                        <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                        <div class="comment-meta">
                                                                            <a href="">ANONYMOUS says:</a>
                                                                            <div class="date">October 24, 2015 at 07.50 am</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <div class="comment-text">Great Design! Like it :)</div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                            <div class="clearfix comment-thumb">
                                                                <a href="#" class="pull-left ctwr"><img src="<?php echo get_template_directory_uri(); ?>/img/comment-thumb/cr4.png" alt="User Image"></a>
                                                                <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                <div class="comment-meta">
                                                                    <a href="">JAMES BOND says:</a>
                                                                    <div class="date">October 24, 2015 at 07.50 am</div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                                            <div class="clearfix comment-thumb">
                                                                <a href="#" class="pull-left ctwr"><img src="<?php echo get_template_directory_uri(); ?>/img/comment-thumb/cr5.png" alt="User Image"></a>
                                                                <span class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right comment-reply">Reply</span>
                                                                <div class="comment-meta">
                                                                    <a href="">ROBERT DOWNEY says:</a>
                                                                    <div class="date">October 24, 2015 at 07.50 am</div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end comment section -->

                                    <!-- start comment comment form -->
                                    <div class="clearfix white-box comment-form cu-form">
                                        <h2 class="com-title">Leave a Reaply</h2>
                                        <div class="comment-form-group">
                                            <form action="#" class="matx-form-valid">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mdl-textfield mdl-js-textfield">
                                                            <input class="mdl-textfield__input" type="text" id="name" />
                                                            <label class="mdl-textfield__label" for="name">Name</label>
                                                          </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mdl-textfield mdl-js-textfield">
                                                            <input class="mdl-textfield__input" type="text" id="email" />
                                                            <label class="mdl-textfield__label" for="email">Email</label>
                                                          </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mdl-textfield mdl-js-textfield">
                                                            <input class="mdl-textfield__input" type="text" id="website" />
                                                            <label class="mdl-textfield__label" for="website">Website</label>
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mdl-textfield mdl-js-textfield mdl-textarea">
                                                            <textarea class="mdl-textfield__input" id="message" ></textarea>
                                                            <label class="mdl-textfield__label" for="message">Message</label>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-left">
                                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" disabled>send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end comment comment form -->

                                </div>
                                <!-- end main post -->
                            </div>
                            <!-- start sidebar -->
                            <div class="col-xs-12 col-sm-4 primary-sidebar">
                                <div class="sidebar-area">

                                    <!-- recent post widget-->
                                    <aside class="white-box widget">
                                        <h3 class="widget-title">Recente berichten</h3>
                                        <div class="widget-text">
                                            <ul class="recent-posts">
                                              <?php
                                                $args = array( 'numberposts' => '3' );
                                                $recent_posts = wp_get_recent_posts( $args );

                                                foreach( $recent_posts as $recent ){
                                              ?>
                                                <li class="recent-item">
                                                    <a href="<?php echo get_permalink($recent["ID"]) ?>"><?php echo $recent["post_title"]; ?></a>
                                                    <span><time datetime="2015-10-24"><?php the_time('j F Y', $recent["post_date"]); ?></time></span>
                                                </li>
                                                <?php
                                                   }
                                                ?>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!-- end sidebar -->
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- end main wrapper -->




      <?php endwhile; ?>

<?php get_footer() ?>
