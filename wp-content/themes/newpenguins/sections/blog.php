<!-- start blog section -->
<section id="<?php echo get_template_directory_uri(); ?>/blog" class="section-main">

    <!-- blog post portion -->
    <section class="primary-bg-color blog-posts">
        <div class="section-common-space">
            <div class="container">

                <!-- start section title -->
                <div class="text-center section-heading">
                    <h2 class="title-sec">BLOG POST</h2>
                </div>
                <!--end section title -->

                <div class="row">

                    <!-- start blog posts -->
                    <div class="clearfix blog-content-start">
                      <?php
                        $args = array( 'numberposts' => '3' );
                        $recent_posts = wp_get_recent_posts( $args );

                        foreach( $recent_posts as $recent ){
                      ?>
                        <!-- start single blog post-->
                        <article class="col-xxs-12 col-xs-6 col-sm-4 single-blog-post">
                            <div class="mdl-card jumbo-shadow mdl-shadow--2dp">
                                <div class="post-thumb-wrap">
                                    <!-- blog post thumbnail -->
                                    <img src="<?php the_field('afbeelding') ?>" alt="<?php echo $recent["post_title"]; ?>">
                                    <div class="post-meta-info">
                                        <!-- post date -->
                                        <span class="post-meta-date"><?php the_time('j F Y', $recent["post_date"]); ?></span>
                                    </div>
                                </div>
                                <div class="post-content-wrap">
                                    <!-- blog post title -->
                                    <h2 class="mdl-card__title-text"><a href="<?php echo get_permalink($recent["ID"]) ?>"><?php echo $recent["post_title"]; ?></a></h2>

                                    <!-- blog post content -->
                                    <div class="mdl-card__supporting-text">
                                        <p><?php echo substr($recent["post_content"], 0, 300); ?></p>
                                    </div>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">

                                    <!-- blog post comment number -->
                                    <a href="<?php echo get_permalink($recent["ID"]) ?>" class="blog-comments"><?php echo $recent["comment_count"]; ?> Reacties</a>
                                    <a id="post-1" class="blog-share"><i class="zmdi zmdi-share"></i></a>

                                    <!-- start blog post social icons -->
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect post-share-media" data-for="post-1">
                                        <li class="fb"><a href="#"><i class="zmdi zmdi-facebook-box"></i> <span>Facebook</span></a></li>
                                        <li class="tw"><a href="#"><i class="zmdi zmdi-twitter-box"></i> <span>Twitter</span></a></li>
                                        <li class="gplus"><a href="#"><i class="zmdi zmdi-google-plus-box"></i> <span>Google plus</span></a></li>
                                    </ul>
                                    <!-- end blog post social icons -->

                                </div>
                            </div>
                        </article>
                        <!-- end single blog post-->
                      <?php
                         }
                      ?>
                    </div>
                    <!-- end blog posts -->

                    <!-- view all blog page button  -->
                    <div class="text-center view-blog-post">
                        <a href="<?php echo get_template_directory_uri(); ?>/blog/blog-standard.html" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-highlight">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end post portion -->
