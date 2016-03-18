<?php while ( have_posts() ) : the_post(); ?>

<div class="matx-popup-start">

    <div class="popup-header">

        <!-- Popup Header -->
        <div class="clearfix popup-meta">
            <div class="pull-left item-description">
                <h3><?php the_title(); ?></h3>
            </div>

            <!-- Preview link -->
            <a href="<?php echo get_field('live_preview') ?>" target="blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect pull-right btn-default btn-black">Live preview</a>
            <div class="clearfix"></div>
        </div>
        <div class="item-screenshot">

            <!-- Popup Image -->
            <img src="<?php echo get_field('primaire_afbeelding')['sizes']['large']; ?>" alt="portfolio popup" id="prim_img">

        </div>
    </div>

    <div class="popup-body">
        <div class="row">
            <div class="col-sm-8">
                <div class="popup-left">
                    <div class="screenshot-module screenshot-preview">
                        <h4 class="title-third"><?php echo count(get_field('extra_afbeeldingen')) + 1; ?> SCREENSHOT<?php if(count(get_field('extra_afbeeldingen')) + 1 > 1) echo 'S'; ?></h4>

                        <!-- attachments screen shots list -->
                        <div class="clearfix screenshots-list">

                          <a onclick="swap_pics('<?php echo get_field('primaire_afbeelding')['sizes']['large']; ?>');">
                              <img src="<?php echo get_field('primaire_afbeelding')['sizes']['large']; ?>" alt="Portfolio Attachment Thumb">
                          </a>

                          <?php

                          if( have_rows('extra_afbeeldingen') ):
                            while ( have_rows('extra_afbeeldingen') ) : the_row(); ?>

                                <a onclick="swap_pics('<?php the_sub_field('afbeelding') ?>');">
                                    <img src="<?php the_sub_field('afbeelding'); ?>" alt="Portfolio Attachment Thumb">
                                </a>

                            <?php endwhile;

                          else :

                            // no rows found

                          endif;

                          ?>

                        </div>
                    </div>
                    <article class="screenshot-module popup-description">
                        <h4 class="title-third">BESCHRIJVING</h4>
                        <p><?php the_content(); ?></p>
                    </article>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="popup-right">
                    <div class="text-left screenshot-module">
                        <h4 class="title-third">SHARE WITH</h4>
                        <ul class="clearfix social popup-social hover-round">
                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-footer">
        <div class="text-right">

            <!-- Preview link -->
            <a href="<?php echo get_field('live_preview') ?>" target="blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black">Live preview</a>
        </div>
    </div>

</div>

<?php endwhile; ?>

<script>

    function swap_pics(link) {
        $('#prim_img').attr('src', link);
    }

</script>
