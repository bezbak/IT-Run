    <!--====================  scroll top ====================-->
    <a href="index-appointment.html#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
    <!-- End Toolbar -->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">

                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->


    <div class="footer-area-wrapper bg-gray">
        <div class="footer-copyright-area section-space--pb_30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <?php
                        $logo_id = carbon_get_theme_option('crb_logo');
                        if ($logo_id) :  ?>
                            <div class="header__logo top-logo">
                                <a href="http://it-run.loc/" width="80" height="48" class="img-fluid">
                                    <img src="<?php echo $logo_id; ?>" alt="logo" />
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <ul class="list ht-social-networks solid-rounded-icon">
                            <li class="item">
                                <a class=" social-link hint--black hint--bottom-left" aria-label="WhatsApp" href="https://wa.me/<?php echo carbon_get_theme_option('crb_whatsapp'); ?>" data-hover="WhatsApp" target="_blank">
                                    <i class="social-icon fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a class=" social-link hint--black hint--bottom-left" aria-label="Facebook" href="<?php echo carbon_get_theme_option('crb_facebook'); ?>" data-hover="Facebook" target="_blank">
                                    <i class="social-icon fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a class=" social-link hint--black hint--bottom-left" aria-label="Instagram" href="<?php echo carbon_get_theme_option('crb_instagram'); ?>" data-hover="Instagram" target="_blank">
                                    <i class="social-icon fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="index-appointment.html#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->
    </div>
    <?php wp_footer() ?>


    </body>

    </html>