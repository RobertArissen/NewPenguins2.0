<!-- start contact section -->

<section id="contact" class="section-main contact devide-50 devide-bg">
    <div class="container">
        <div class="row">

            <!-- start contact left portion / contact address -->
            <div class="col-sm-6 contact-info-start">
                <div class="section-common-space">
                    <h2 class="title-sec">CONTACT</h2>
                    <div class="contact-info">
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-home"></i></span>
                            <address><?php echo get_option('global_bezoekadres'); ?></address>
                        </div>
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-markunread-mailbox"></i></span>
                            <address><?php echo get_option('global_postadres'); ?></address>
                        </div>
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-email"></i></span>
                            <address><?php echo get_option('global_email'); ?></address>
                        </div>
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-phone"></i></span>
                            <address><?php echo get_option('global_telefoon'); ?></address>
                        </div>
                    </div>
                </div>
            </div>
            <!--end left contact portion -->

            <!-- start right contact portion /contact form-->
            <div class="col-sm-6 contact-form-start">
                <div class="section-common-space">
                    <?php echo do_shortcode(get_field('contact_formulier')); ?>
                </div>
            </div>
            <!-- end right contact portion -->

        </div>
    </div>
    <!-- start map portion -->
    <div class="section bg-image-class maps">
        <div class="overlay">
            <div class="text-center map-content-start">
                <div class="map-buttons">
                    <button type="button" id="map-open" class="btn-active btn btn-block btn-tranparent btn-animated from-top zmdi zmdi-chevron-down">
                        <span>VIND ONS OP DE MAP</span>
                    </button>

                    <button type="button" id="map-close" class="btn btn-block btn-tranparent btn-animated from-bottom zmdi zmdi-chevron-up">
                        <span>Sluit de map</span>
                    </button>
                </div>
                <div class="map-wrapper">
                  <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end map portion -->
</section>
<!-- end contact section -->

<script>

  var template_directory = '<?php echo get_template_directory_uri(); ?>';
  var office_location = '<?php echo get_field('google_maps')['address']; ?>';
  var lat = '<?php echo get_field('google_maps')['lat']; ?>';
  var lng = '<?php echo get_field('google_maps')['lng']; ?>';

</script>
