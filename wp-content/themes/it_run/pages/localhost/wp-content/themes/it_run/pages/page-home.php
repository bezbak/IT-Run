<?php
/*
Template Name: Главная
*/
get_header()
?>

<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <!--============ Appointment Hero Start ============-->
        <div class="appointment-hero-wrapper appointment-hero-bg section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="appointment-hero-wrap wow move-up">
                            <div class="appointment-hero-text">
                                <h6 class="text-white"><?php the_field("mini_text_under_title") ?></h6>
                                <h1 class="font-weight--reguler text-white mb-30"><?php the_field("site_title") ?></span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 me-auto ms-auto col-md-6" id="submit">
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]') ?>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Appointment Hero End ============-->
        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading"><?php the_field("programming_title") ?> </h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__two">
                            <div class="row">
                                <?php
                                $loop = new WP_Query(
                                    array('post_type' => 'directions_of_prog', 'posts_per_page' => -1)
                                );
                                if ($loop->have_posts()) {
                                    while ($loop->have_posts()) {
                                        $loop->the_post();
                                        $short_descr = get_field('short_descr');
                                        $full_descr = get_field('full_descr');
                                ?>
                                        <div class="col-lg-4 col-md-6 wow move-up">
                                            <div class="ht-box-icon style-02 single-svg-icon-box">
                                                <div class="icon-box-wrap">
                                                    <div class="icon">
                                                        <div class="svg-icon" id="svg-1" data-svg-icon="assets/images/svg/linea-basic-heart.svg"></div>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading"><?php the_title(); ?></h5>
                                                        <div class="text"><?php echo $short_descr ?></div>
                                                        <div class="feature-btn">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <span class="button-text">Подробнее</span>
                                                                <i class="far fa-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php
                                }
                                wp_reset_query();

                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feature-list-button-box mt-30 text-center">
                            <a href="<?php home_url(); ?>#submit" class="ht-btn ht-btn-md">Пробный урок</a>
                            <a href="<?php home_url(); ?>#submit" class="ht-btn ht-btn-md ht-btn--outline">Связаться с нами</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->
        <!--======== Tabs Wrapper Start ======== -->
        <div class="tabs-wrapper bg-gray section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                            <?php $about_block = get_field('about'); ?>
                            <h3 class="section-title"><?php echo $about_block; ?></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    $about_block = get_field('how_are_we_different'); ?>
                    <div class="col-lg-12 ht-tab-wrap">
                        <div class="text-center  ">
                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">
                                <li class="tab__item nav-item active">
                                    <a class="nav-link active" id="nav-tab1" data-bs-toggle="tab" href="<?php home_url(); ?>#tab_list_06" role="tab" aria-selected="true">Чем мы отличаемся</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab2" data-bs-toggle="tab" href="<?php home_url(); ?>#tab_list_07" role="tab" aria-selected="false">Нашу курсы</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab2" data-bs-toggle="tab" href="<?php home_url(); ?>#tab_list_09" role="tab" aria-selected="false">Что вы получите обучаясь в академии IT-RUN?</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content ht-tab__content">

                            <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_40">
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="tab-history-image video-popup mt-30">
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="<?php echo esc_url($about_block['block_image']['url']); ?>" alt="<?php echo $about_block['block_title']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 offset-lg-1 ">
                                            <div class="tab-content-inner  mt-30">
                                                <div class="text mb-30"><?php echo $about_block['block_title']; ?></div>
                                                <ul class="check-list section-space--mb_40">
                                                    <?php echo $about_block['block_descr']; ?>
                                                </ul>

                                                <div class="tab-button">
                                                    <a class="btn-text" href="#">
                                                        <span class="button-text">Связаться с нами <i class="far fa-long-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_60">
                                    <div class="row">
                                        <?php
                                        $loop = new WP_Query(
                                            array('post_type' => 'directions_of_prog', 'posts_per_page' => -1)
                                        );
                                        if ($loop->have_posts()) {
                                            while ($loop->have_posts()) {
                                                $loop->the_post();
                                                $short_descr = get_field('short_descr');
                                                $full_descr = get_field('full_descr');
                                        ?>
                                                <div class="col-lg-4 col-md-6 wow move-up">
                                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                                        <div class="icon-box-wrap">
                                                            <div class="icon">
                                                                <div class="svg-icon" id="svg-1" data-svg-icon="assets/images/svg/linea-basic-heart.svg"></div>
                                                            </div>
                                                            <div class="content">
                                                                <h5 class="heading"><?php the_title(); ?></h5>
                                                                <div class="text"><?php echo $short_descr ?></div>
                                                                <div class="feature-btn">
                                                                    <a href="<?php the_permalink(); ?>">
                                                                        <span class="button-text">Подробнее</span>
                                                                        <i class="far fa-long-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php
                                        }
                                        wp_reset_query();

                                        ?>


                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="tab_list_09" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_20">
                                    <div class="row">
                                        <?php
                                        $loop = new WP_Query(
                                            array('post_type' => 'advantages_of_it_run', 'posts_per_page' => -1)
                                        );
                                        if ($loop->have_posts()) {
                                            while ($loop->have_posts()) {
                                                $loop->the_post();
                                                $full_descr = get_field('plus_descr');
                                        ?>
                                                <div class="col-lg-6">
                                                    <div class="ht-box-images style-08 move-up animate">
                                                        <div class="image-box-wrap">
                                                            <div class="content">
                                                                <h6 class="heading"><?php the_title(); ?></h6>
                                                                <div class="text"><?php echo $full_descr ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php
                                        }
                                        wp_reset_query();

                                        ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--======== Tabs Wrapper End ======== -->

        <!-- ============ Team Member Wrapper Start =============== -->
        <div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
            <div class="container">
                <div class="row">
                    <?php
                    $about_block = get_field('teaching_staff'); ?>
                    <div class="col-lg-4">
                        <div class="section-title section-space--mb_60">
                            <h3 class="heading"><?php echo $about_block['title'] ?></h3>
                            <p class="text mt-30"><?php echo $about_block['description'] ?></p>

                            <div class="sider-title-button-box mt-30">
                                <a href="<?php home_url(); ?>#submit" class="ht-btn ht-btn-md">Оставить заявку</a>
                                <a href="vse-uchitelya" class="btn-text font-weight--bold small-mt__20">Посмотреть всех учителей<i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 ht-team-member-style-one">
                        <div class="row">
                            <?php
                            $loop = new WP_Query(
                                array('post_type' => 'staff', 'posts_per_page' => 6)
                            );
                            if ($loop->have_posts()) {
                                while ($loop->have_posts()) {
                                    $loop->the_post();
                                    $teacher_image = get_field('teacher_image');
                                    $profession = get_field('profession');
                                    $teacher_short_descr = get_field('teacher_short_descr');
                                    $techer_descr = get_field('techer_descr');
                            ?>
                                    <div class="col-lg-6 col-md-6 wow move-up">
                                        <div class="grid-item">
                                            <div class="ht-team-member">
                                                <div class="team-image">
                                                    <img class="img-fluid" src="<?php echo esc_url($teacher_image['url']) ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <div class="team-info ">
                                                    <h5 class="name"><?php the_title(); ?></h5>
                                                    <div class="position"><?php echo $profession ?><?php echo $teacher_short_descr ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php
                            }
                            wp_reset_query();

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============ Team Member Wrapper End =============== -->






        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading"><?php echo get_field("trial_lesson") ?></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--two text-center">
                            <a href="<?php home_url(); ?>#submit" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->




        <!--====================  testimonial section ====================-->
        <div class="testimonial-slider-area bg-gray section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading"><?php echo get_field("reviews") ?></h3>
                        </div>
                        <div class="testimonial-slider">
                            <div class="swiper-container testimonial-slider__container">
                                <div class="swiper-wrapper testimonial-slider__wrapper">
                                        <?php
                                        $loop = new WP_Query(
                                            array('post_type' => 'reviews', 'posts_per_page' => -1)
                                        );
                                        if ($loop->have_posts()) {
                                            while ($loop->have_posts()) {
                                                $loop->the_post();
                                                $student_image = get_field('student_image');
                                                $student_course = get_field('student_course');
                                                $student_review = get_field('student_review');
                                        ?>
                                    <div class="swiper-slide">
                                                <div class="testimonial-slider__one wow move-up">

                                                    <div class="testimonial-slider--info">
                                                        <div class="testimonial-slider__media">
                                                            <img src="<?php echo esc_url($student_image['url']) ?>" class="img-new img-fluid" alt="<?php the_title(); ?>">
                                                        </div>

                                                        <div class="testimonial-slider__author">
                                                            <div class="author-info">
                                                                <h6 class="name"><?php the_title(); ?></h6>
                                                                <span class="designation"><?php echo $student_course ?></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="testimonial-slider__text"><?php echo $student_review ?></div>
                                                </div>
                                    </div>
                                                <?php } ?>
                                            <?php
                                        }
                                        wp_reset_query();

                                            ?>
                                </div>
                                <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of testimonial section  ====================-->
        <section class="testimonial-slider-area bg-gray section-space--ptb_100">
            <div class="container">
              <div class="row">
                <div class="section-title-wrap text-center section-space--mb_40">
                    <h3 class="heading">Наш офис</h3>
                </div>
              <div class="col-lg-8">
                <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
                <script type="text/javascript">
                    var map;
                    DG.then(function() {
                        map = DG.map('map', {
                            center: [42.8789958, 74.5934396],
                            zoom: 20
                        });

                        DG.marker([42.8789958, 74.5934396]).addTo(map).bindPopup("г.Ош,\nулица Ташкентская, 35/1,\nИнновационный колледж “Мурас\n");
                    });
                </script>
                <div id="map" class="mapbox-gl map-point-animate" style="width:100%; height:550px; margin-top: 30px; margin-bottom: 30px;"></div>
            </div></div>
        </section>
        <section class="testimonial-slider-area bg-gray section-space--ptb_100">
            <div class="container">
              <div class="row">
                <div class="section-title-wrap text-center section-space--mb_40">
                    <h3 class="heading">Тест</h3>
                </div>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdbFIToewe-2LMY7SZXt1piTE6ztxxTVQKnsadJYF3c0FKapQ/viewform?embedded=true" width="640" height="1766" frameborder="0" marginheight="0" marginwidth="0">Загрузка…</iframe>
                  </div>
            </div>
                </div>
        </section>
    </div>

    <?php get_footer() ?>