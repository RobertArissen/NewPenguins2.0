    <!-- start why choose us portion -->
    <section id="hoe" class="dark-secion why-choose-us overflow-hidden">

        <div class="bg-image what-we-do-bg" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)" data-bottom-top="transform: translate3d(0px, -75%, 0px)"></div>

        <div class="overlay overlay-six">
            <div class="section-common-space ">
                <div class="container">
                    <div class="row">
                        <!-- start section title -->
                        <div class="text-center section-heading">
                            <h2 class="title-sec">Hoe</h2>
                        </div>
                        <!-- end section title -->

                        <div class="why-choose-us-content-start" data-action="accordionWithImage">
                            <div class="col-sm-12 col-md-7 col-lg-offset-1 col-lg-5">
                                <ul class="wcu-collapse">

                                    <?php $i = 0; foreach ( get_field('hoe') as $item ) { ?>

                                      <li class="single-acc-item <?php if($i == 0){ echo 'collapse-open'; } ?>" data-image-src="<?php echo $item['afbeelding']; ?>">
                                          <div class="collapse-label">
                                              <div class="cllabelmain"><?php echo $item['heading']; ?></div>
                                              <div class="icwrap"><i class="zmdi zmdi-plus"></i></div>
                                          </div>
                                          <div class="collapse-content"><?php echo $item['content']; ?>
                                            <br/><a href="<?php echo $item['link']; ?>" style="margin-top:10px; margin-bottom:10px;" data-target="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-default btn-black pull-right"><?php echo $item['knop_tekst']; ?></a>
                                          </div>
                                      </li>

                                    <?php $i++; } ?>

                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-5">
                                <div class="wcu-thumb-wrap acc-thumb-area">
                                    <img src="<?php echo get_field('hoe')[0]['afbeelding']; ?>" alt="Accordion Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end why choose us portion -->
</section>
<!-- end about section-->
