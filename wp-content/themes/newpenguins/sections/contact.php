<!-- start contact section -->
<section id="contact" class="section-main contact devide-50 devide-bg">
    <div class="container">
        <div class="row">

            <!-- start contact left portion / contact address -->
            <div class="col-sm-6 contact-info-start">
                <div class="section-common-space">
                    <h2 class="title-sec">CONTACT US</h2>
                    <div class="contact-info">
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-home"></i></span>
                            <address>1600 Amphitheatre Parkway, Mountain View, CA 94043, US</address>
                        </div>
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-email"></i></span>
                            <address>info@coderpixel.com</address>
                        </div>
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-phone"></i></span>
                            <address>0088 1234 567890</address>
                        </div>
                        <div class="clearfix ci-items">
                            <span class="ci-icons"><i class="zmdi zmdi-globe"></i></span>
                            <address>www.coderpixel.com</address>
                        </div>
                    </div>
                </div>
            </div>
            <!--end left contact portion -->

            <!-- start right contact portion /contact form-->
            <div class="col-sm-6 contact-form-start">
                <div class="section-common-space">
                    <form id="contactForm" action="#" class="matx-form-valid contact-form">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" name="contactName" id="name" />
                                    <label class="mdl-textfield__label" for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" name="contactEmail" id="email" />
                                    <label class="mdl-textfield__label" for="email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" name="contactSubject" id="subject" />
                                    <label class="mdl-textfield__label" for="subject">Subject</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mdl-textfield mdl-js-textfield mdl-textarea">
                                    <textarea class="mdl-textfield__input" name="contactMessage" id="message" ></textarea>
                                    <label class="mdl-textfield__label" for="message">Message</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-left ">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" disabled>send</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                        <span>LOCATE US ON THE MAP</span>
                    </button>

                    <button type="button" id="map-close" class="btn btn-block btn-tranparent btn-animated from-bottom zmdi zmdi-chevron-up">
                        <span>Close the map</span>
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
