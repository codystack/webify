<?php
include ('./components/header.php');
include ('./components/navbaralt.php');
include ('./components/mobile_navbar.php');
?>

        <div class="content-wrap">
            <div class="py-160 bg-dark">
                <div class="container">
                    <div class="row justify-content-center text-white">
                        <div class="col-lg-10">
                            <h1 class="display-4 text-white mt-5 mb-130 show-on-scroll" data-show-duration="500" data-show-distance="10">Get in touch.</h1>
                            <form action="#">
                                <p class="lead font-weight-medium mb-30">Choose the types of project:</p>
                                <div class="row gh-xs gv-xs mb-n7">
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxWebDesign">
                                        <label for="checkboxWebDesign"><span>Web design</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="150">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxAppDesign" checked>
                                        <label for="checkboxAppDesign"><span>App design</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxLogoDesign" checked>
                                        <label for="checkboxLogoDesign"><span>Logo design</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="250">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxIllustration">
                                        <label for="checkboxIllustration"><span>Illustration</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="300">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxPhotography">
                                        <label for="checkboxPhotography"><span>Photography</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="350">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxWebDevelopment">
                                        <label for="checkboxWebDevelopment"><span>Web Development</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="400">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxAppDevelopment">
                                        <label for="checkboxAppDevelopment"><span>App Development</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="450">
                                        <input class="checkbox-btn" type="checkbox" id="checkboxBranding" checked>
                                        <label for="checkboxBranding"><span>Branding</span></label>
                                    </div>
                                </div>
                                <div class="row gh-1 gv-3 mt-30">
                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input class="form-control form-control-lg form-control-white" type="name" placeholder="Your Name *">
                                    </div>
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="150">
                                        <input type="email" class="form-control form-control-lg form-control-white" placeholder="Your Email *">
                                    </div>
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                                        <input type="phone" class="form-control form-control-lg form-control-white" placeholder="Your Phone *">
                                    </div>
                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="250">
                                        <input type="company" class="form-control form-control-lg form-control-white" placeholder="Company">
                                    </div>
                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="300">
                                        <input type="text" class="form-control form-control-lg form-control-white" placeholder="Title">
                                    </div>
                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="350">
                                        <textarea class="form-control form-control-lg form-control-white" rows="1" placeholder="Message *"></textarea>
                                    </div>
                                </div>
                                <p class="lead font-weight-medium mb-30 mt-60 pt-9">Choose the budget:</p>
                                <div class="row gh-xs gv-xs">
                                    <div class="col-auto show-on-scroll" data-show-distance="10" data-show-duration="500" data-show-delay="100">
                                        <input class="checkbox-btn" type="checkbox" id="checkbox&lt;10000">
                                        <label for="checkbox&lt;10000"><span>&lt; 10 000</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-distance="10" data-show-duration="500" data-show-delay="150">
                                        <input class="checkbox-btn" type="checkbox" id="checkbox10-20k">
                                        <label for="checkbox10-20k"><span>10 - 20k</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-distance="10" data-show-duration="500" data-show-delay="200">
                                        <input class="checkbox-btn" type="checkbox" id="checkbox20-30k" checked>
                                        <label for="checkbox20-30k"><span>20 - 30k</span></label>
                                    </div>
                                    <div class="col-auto show-on-scroll" data-show-distance="10" data-show-duration="500" data-show-delay="250">
                                        <input class="checkbox-btn" type="checkbox" id="checkbox&gt;30000">
                                        <label for="checkbox&gt;30000"><span>&gt; 30 000</span></label>
                                    </div>
                                </div>
                                <button class="btn btn-white btn-with-ball mt-90 show-on-scroll" type="button" name="button" data-show-distance="10" data-show-duration="500" data-show-delay="300">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('./components/footer.php'); ?>