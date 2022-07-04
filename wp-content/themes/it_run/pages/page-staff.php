<?php
/*
Template Name: Стафф
*/
get_header()
?>

<!-- ============ Team Member Wrapper Start =============== -->
<div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 ht-team-member-style-one">
                <div class="row">
                    <?php
                    $loop = new WP_Query(
                        array('post_type' => 'staff', 'posts_per_page' => -1)
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
                                        <a href="<?php the_permalink();?>" class="btn-text font-weight--bold small-mt__20">Подробнее<i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
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


<?php get_footer() ?>