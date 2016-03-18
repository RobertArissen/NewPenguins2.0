<!-- start service section-->
<section id="service" class="section-main service servicev1" data-action="count-up">
    <!-- start secvice tab and content portion-->
    <!-- start portfolio section-->
    <section id="work" class="section-main portfolio">
        <div class="section-common-space">
            <div class="container">

                <!-- start section title -->
                <div class="text-center section-heading">
                    <h2 class="title-sec">Werk</h2>
                </div>
                <!-- end section title -->

                <div class="section-main-content-start" data-action="portfolio">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center portfolio-category-wrap">

                                <!-- start portfolio category items -->
                                <ul class="clearfix portfolio-category mdl-shadow--2dp">
                                  <li class="filter active" data-target="*">ALLE</li>
                                  <?php
                                    $taxonomy = 'portfolio';
                                    $terms = get_terms('category'); // Get all terms of a taxonomy
                                    if ( $terms ) :
                                    foreach ( $terms as $term ) {
                                      if ( $term->name != 'Geen categorie' ) { ?>
                                      <li class="filter" data-target="<?php echo '.'.$term->slug; ?>"><?php echo $term->name; ?></li>
                                  <?php } } endif;?>
                                </ul>
                                <!-- end portfolio category items -->

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- start portfolio items -->
                        <div class="clearfix protfolio-items">

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
                                        </div>
                                        <!-- end portfolio image -->

                                        <div class="text-center portfolio-meta">
                                            <i class="zmdi zmdi-plus-circle"></i>

                                            <!-- portfolio items caption -->
                                            <h3 class="portfolio-title"><?php the_title() ?></h3>
                                        </div>
                                        <div class="pf-overlay"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- end single portfolio item -->

                          <?php endwhile;endif; wp_reset_postdata(); ?>

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
