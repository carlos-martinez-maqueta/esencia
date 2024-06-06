    <?php

    $socialObj = Folder::getSocialNetworks();

    ?>

    <footer class="footer_all mt-">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-12 list_alls">
                    <div class="row">
                        <div class="col-lg-3 col-6 bottom_ul">
                            <div>
                                <h4>SERVICES</h4>

                                <ul>
                                    <li><a href="vip-experience" class="hov">Vip Experience</a></li>
                                    <li><a href="events" class="hov">Events & Productions</a></li>
                                    <!-- <li><a href="vip-experience" class="hov">Vip Experience</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 bottom_ul">
                            <div>
                                <h4>ABOUT US</h4>

                                <ul>
                                    <li><a href="about" class="hov">About Us</a></li>
                                    <!-- <li><a href="#" class="hov">Blog & News</a></li> -->
                                    <!-- <li><a href="#" class="hov">Work with Us</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 bottom_ul">
                            <div>
                                <h4>TERMS</h4>

                                <ul>
                                    <!-- <li><a href="#" class="hov">Terms and Conditions</a></li> -->
                                    <li><a href="terms-of-service" class="hov">Terms of Service</a></li>
                                    <li><a href="privacy-policies" class="hov">Privacy Policies</a></li>
                                    <li><a href="cancellation-policies" class="hov">Cancellation Policies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div>
                                <h4>CONTACT</h4>

                                <ul>
                                    <li><a href="faq" class="hov">F.A.Q</a></li>
                                    <li><a href="#" class="hov">sales@esencia-house.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--                         <div class="col-lg-3 col-6 bottom_ul">
                            <div>
                                <h4>EXPERIENCE</h4>

                                <ul>
                                    <li><a href="reviews" class="hov">Reviews</a></li>
                                    <li><a href="gallery" class="hov">Gallery</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-lg-3 col-6">
                            <div>
                                <h4>USER</h4>

                                <ul>
                                    <li><a href="places" class="hov">Book Now</a></li>
                                    <!-- <li><a href="sign-in" class="hov">Sign In</a></li>
                                    <li><a href="sign-up" class="hov">Sign Up</a></li> -->
                                    <li>
                                        <ul class="d-flex idiomas_le">
                                            <li class="me-3"><a href="#">EN</a></li>
                                            <li class="me-3" style="color: #ffffff;"> / </li>
                                            <li class="me-3"><a href="#">ES</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div>
                                <!-- <h4>SOCIAL NETWORKS</h4> -->

                                <ul class="d-lg-flex redes_s">
                                    <li><a href="<?= $socialObj->instagram; ?>"><img class="me-5" src="assets/img/ig.svg"></a></li>
                                    <li><a href="<?= $socialObj->facebook ;?>"><img class="me-5" src="assets/img/fb.svg"></a></li>
                                    <li><a href="<?= $socialObj->linkedin ;?>"><img class="me-5" src="assets/img/lk.svg"></a></li>
                                    <li><a href="<?= $socialObj->linkedin ;?>"><img class="me-5" src="assets/img/st.svg"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row_mini_footer">
                <div class="col-lg-6 col-12">
                    <p>Development by <a href="dintecsolutions.com">DINTEC solutions</a></p>
                </div>
                <div class="col-lg-6 col-12 text-lg-end text">
                    <p>Copyright © 2024 Solistiq</p>
                </div>
            </div>
        </div>
    </footer>