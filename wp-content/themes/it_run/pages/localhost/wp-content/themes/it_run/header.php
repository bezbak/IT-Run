<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    
</head>

<body>



    <!--====================  header area ====================-->
    <div class="header-area header-sticky only-mobile-sticky"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <?php
                        $logo_id = carbon_get_theme_option('crb_logo');
                        if ($logo_id) :  ?>
                            <div class="header__logo top-logo">
                                <a href="http://it-run.loc/" width="100" height="48" class="img-fluid">
                                    <img src="<?php echo $logo_id; ?>" alt="logo" />
                                </a>
                            </div>
                        <?php endif; ?>


                        <div class="header-right flexible-image-slider-wrap">

                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <!-- Header Search Form -->
                                <div class="header-search-form d-md-none d-block">
                                    <form action="index-appointment.html#" class="search-form-top">
                                        <input class="search-field" type="text" placeholder="Search…">
                                        <button class="search-submit">
                                            <i class="search-btn-icon fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Header Top Info -->
                                <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                    <div class="swiper-wrapper header-top-info-inner default-color">
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title"><?php echo carbon_get_theme_option('crb_phone_number'); ?></h6><?php $email = carbon_get_theme_option('crb_email');
                                                                                                                                            if ($email) :  ?>

                                                        <div class="info-sub-title"><?php echo carbon_get_theme_option('crb_email'); ?></div>

                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-map-marker-alt"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">Центральный офис</h6>
                                                    <div class="info-sub-title"><?php echo carbon_get_theme_option('crb_adress'); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-clock"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">9:00 - 19:00</h6>
                                                    <div class="info-sub-title">Понедельник-Суббота</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-comment-alt-lines"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">Онлайн 24/7</h6>
                                                    <div class="info-sub-title"><?php echo carbon_get_theme_option('crb_phone_number'); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Header Social Networks -->
                                <div class="header-social-networks style-icons">
                                    <div class="inner">
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="WhatsApp" href="https://wa.me/<?php echo carbon_get_theme_option('crb_phone_number'); ?>" data-hover="WhatsApp" target="_blank">
                                            <i class="social-icon fab fa-whatsapp"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Facebook" href="<?php echo carbon_get_theme_option('crb_facebook'); ?>" data-hover="Facebook" target="_blank">
                                            <i class="social-icon fab fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Instagram" href="<?php echo carbon_get_theme_option('crb_instagram'); ?>" data-hover="Instagram" target="_blank">
                                            <i class="social-icon fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap bg-theme-default d-md-block d-none header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-bottom-inner position-relative">
                            <div class="header-bottom-left-wrap">
                                <!-- navigation menu -->
                                <div class="header__navigation d-none d-xl-block">
                                    <nav class="navigation-menu navigation-menu--text_white">

                                    </nav>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--====================  End of header area  ====================-->