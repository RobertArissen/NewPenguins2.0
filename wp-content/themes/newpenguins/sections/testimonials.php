<!-- start testimonial section -->
<section id="testimonial" class="section-main">
    <section class="testimonial">
        <div class="bg-image testimonial-bg" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)" data-bottom-top="transform: translate3d(0px, -75%, 0px)"></div>

        <div class="overlay overlay-four">
            <div class="section-common-space space-image">
                <div class="testimonial-content-start">

                    <!-- start testimonial slider -->
                    <div class="slider-item testimonials styled-paginantion colorsch-black" data-action="testimonialSlider">

                      <?php

                      $args = array(
                          'post_type'=> 'testimonials',
                          'order'    => 'ASC'
                      );

                      $the_query = new WP_Query( $args );
                      if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

                      ?>

                        <!-- start single testimonial -->
                        <div class="text-center single-testimonial">

                            <!-- start testimonial thumbnail -->
                            <div class="recomenders-thumb">
                                <img src="<?php echo get_field('avatar'); ?>" alt="">
                            </div>
                            <!-- end testimonial thumbnail -->

                            <div class="recomenders-info">
                                <!-- testimonial text -->
                                <p><?php the_content(); ?></p>

                                <!-- recommender name and designation -->
                                <div><span class="recomenders-name"><?php the_title(); ?></span></div>
                            </div>
                        </div>
                        <!-- end single testimonial -->

                        <?php endwhile;endif; wp_reset_postdata(); ?>

                    </div>
                    <!-- end testimonial slider -->
                </div>
            </div>
        </div>
    </section>
    <section class="secondary-bg-color clients">
        <div class="section-common-space">
            <div class="container">
                <div class="row">
                    <div class="clients-content-start">
                        <div class="slider-items client-slider styled-paginantion colorsch-white" data-action="clientSlider">
                            <div class="col-sm-3">
                                <div class="single-clients">
                                    <img src="http://placehold.it/360x240" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-clients">
                                    <img src="http://placehold.it/360x240" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-clients">
                                    <img src="http://placehold.it/360x240" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-clients">
                                    <img src="http://placehold.it/360x240" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-clients">
                                    <img src="http://placehold.it/360x240" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-clients">
                                    <img src="http://placehold.it/360x240" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-clients">
                                    <img src="http://placehold.it/360x240" alt="Client Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </section>
  <!-- end testimonial section -->
