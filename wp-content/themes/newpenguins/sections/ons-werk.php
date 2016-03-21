<!-- start service section-->
<section id="service" class="section-main service servicev1" data-action="count-up">
    <!-- start secvice tab and content portion-->
    <!-- start portfolio section-->
    <section id="work" class="section-main portfolio">
        <div class="section-common-space">
            <div class="container">

                <!-- start section title -->
                <div class="text-center section-heading">
<<<<<<< HEAD
                    <h2 class="title-sec">Ons werk</h2>
=======
                    <h2 class="title-sec">Werk</h2>
>>>>>>> origin/master
                </div>
                <!-- end section title -->

                <div class="section-main-content-start" data-action="portfolio">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center portfolio-category-wrap">

                                <!-- start portfolio category items -->
                                <ul class="clearfix portfolio-category mdl-shadow--2dp">
<<<<<<< HEAD
                                    <li class="filter active" data-target="*">ALL</li>
                                    <li class="filter" data-target=".art">ART</li>
                                    <li class="filter" data-target=".accessories">ACCESSORIES</li>
                                    <li class="filter" data-target=".design">DESIGN</li>
                                    <li class="filter" data-target=".fashon">FASHION</li>
=======
                                  <li class="filter active" data-target="*">ALLE</li>
                                  <?php
                                    $taxonomy = 'portfolio';
                                    $terms = get_terms('category'); // Get all terms of a taxonomy
                                    if ( $terms ) :
                                    foreach ( $terms as $term ) {
                                      if ( $term->name != 'Geen categorie' ) { ?>
                                      <li class="filter" data-target="<?php echo '.'.$term->slug; ?>"><?php echo $term->name; ?></li>
                                  <?php } } endif;?>
>>>>>>> origin/master
                                </ul>
                                <!-- end portfolio category items -->

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- start portfolio items -->
                        <div class="clearfix protfolio-items">

<<<<<<< HEAD
                            <!-- start single portfolio item -->
                            <div id="portfolio-01" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio">
                                <div class="portfolio-item">
                                    <a href="<?php echo get_template_directory_uri(); ?>/portfolios/portfolio-01/portfolio.html" class="ajax-portfolio">

                                        <!-- start portfolio image -->
                                        <div class="protfolio-image">
                                            <img src="http://placehold.it/360x240" alt="portfolio">
                                        </div>
                                        <!-- end portfolio image -->

                                        <div class="text-center portfolio-meta">
                                            <i class="zmdi zmdi-plus-circle"></i>

                                            <!-- portfolio items caption -->
                                            <h3 class="portfolio-title">item name</h3>
                                        </div>
                                        <div class="pf-overlay"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- end single portfolio item -->

                            <!-- start single portfolio item-->
                            <div id="portfolio-02" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio art design accessories">
                                <div class="portfolio-item">
                                    <a href="<?php echo get_template_directory_uri(); ?>/portfolios/portfolio-02/portfolio.html" class="ajax-portfolio">

                                        <!-- start portfolio image -->
                                        <div class="protfolio-image">
                                            <img src="http://placehold.it/360x240" alt="portfolio">
                                        </div>
                                        <!-- end portfolio image -->

                                        <div class="text-center portfolio-meta">
                                            <i class="zmdi zmdi-plus-circle"></i>

                                            <!-- portfolio items caption -->
                                            <h3 class="portfolio-title">item name</h3>
                                        </div>
                                        <div class="pf-overlay"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- end single portfolio item-->

                            <!-- start single portfolio item-->
                            <div id="portfolio-03" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio art fashon">
                                <div class="portfolio-item">
                                    <a href="<?php echo get_template_directory_uri(); ?>/portfolios/portfolio-03/portfolio.html" class="ajax-portfolio">

                                        <!-- start portfolio image -->
                                        <div class="protfolio-image">
                                            <img src="http://placehold.it/360x240" alt="portfolio">
                                        </div>
                                        <!-- end portfolio image -->

                                        <div class="text-center portfolio-meta">
                                            <i class="zmdi zmdi-plus-circle"></i>

                                            <!-- portfolio items caption -->
                                            <h3 class="portfolio-title">item name</h3>
                                        </div>
                                        <div class="pf-overlay"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- end single portfolio item -->

                            <!-- start single portfolio item-->
                            <div id="portfolio-04" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio art accessories fashon">
                                <div class="portfolio-item">
                                    <a href="<?php echo get_template_directory_uri(); ?>/portfolios/portfolio-04/portfolio.html" class="ajax-portfolio">

                                        <!-- start portfolio image -->
                                        <div class="protfolio-image">
                                            <img src="http://placehold.it/360x240" alt="portfolio">
                                        </div>
                                        <!-- end portfolio image -->

                                        <div class="text-center portfolio-meta">
                                            <i class="zmdi zmdi-plus-circle"></i>

                                            <!-- portfolio items caption -->
                                            <h3 class="portfolio-title">item name</h3>
                                        </div>
                                        <div class="pf-overlay"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- end single portfolio item -->

                            <!-- start single portfolio item-->
                            <div id="portfolio-05" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio art accessories">
                                <div class="portfolio-item">
                                    <a href="<?php echo get_template_directory_uri(); ?>/portfolios/portfolio-01/portfolio.html" class="ajax-portfolio">

                                        <!-- start portfolio image -->
                                        <div class="protfolio-image">
                                            <img src="http://placehold.it/360x240" alt="portfolio">
=======
                          <?php

                          $args = array(
                              'post_type'=> 'portfolio',
                              'order'    => 'ASC'
                          );

                          $the_query = new WP_Query( $args );
                          if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

                          ?>

                            <!-- start single portfolio item -->
                            <div id="portfolio-01" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio <?php foreach((get_the_category()) as $category) {
                                echo strtolower($category->cat_name) . ' ';
                            } ?>">
                                <div class="portfolio-item">
                                    <a href="<?php echo get_permalink(); ?>" class="ajax-portfolio">

                                        <!-- start portfolio image -->
                                        <div class="protfolio-image">
                                            <img src="<?php echo get_field('primaire_afbeelding')['sizes']['large'] ?>" alt="portfolio">
>>>>>>> origin/master
                                        </div>
                                        <!-- end portfolio image -->

                                        <div class="text-center portfolio-meta">
                                            <i class="zmdi zmdi-plus-circle"></i>

                                            <!-- portfolio items caption -->
<<<<<<< HEAD
                                            <h3 class="portfolio-title">item name</h3>
=======
                                            <h3 class="portfolio-title"><?php the_title() ?></h3>
>>>>>>> origin/master
                                        </div>
                                        <div class="pf-overlay"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- end single portfolio item -->

<<<<<<< HEAD
                            <!-- start single portfolio item-->
                            <div id="portfolio-06" class="col-xxs-6 col-xs-6 col-sm-4 single-portfolio art design">
                                <div class="portfolio-item">
                                    <a href="<?php echo get_template_directory_uri(); ?>/portfolios/portfolio-02/portfolio.html" class="ajax-portfolio">

                                        <!-- start portfolio image -->
                                        <div class="protfolio-image">
                                            <img src="http://placehold.it/360x240" alt="portfolio">
                                        </div>
                                        <!-- end portfolio image -->

                                        <div class="text-center portfolio-meta">
                                            <i class="zmdi zmdi-plus-circle"></i>

                                            <!-- portfolio items caption -->
                                            <h3 class="portfolio-title">item name</h3>
                                        </div>
                                        <div class="pf-overlay"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- end single portfolio item -->
=======
                          <?php endwhile;endif; wp_reset_postdata(); ?>
>>>>>>> origin/master

                        </div>
                        <!-- end portfolio items -->

                        <!-- Portfolio ajax div, it's a hidden div need for ajax loading -->
                        <div data-action="portfolioInitItem" class="portfolio-ajax-hidden-div"></div>

                        <!-- start portfolio load more button -->
                        <div class="text-center load-portfolio">
                            <button data-action="portfolioLoadItem" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-highlight">LOAD MORE</button>
                        </div>
                        <!-- end portfolio load more button -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section-->
    <!-- end secvice tab and content portion-->
