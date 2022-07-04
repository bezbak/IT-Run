<?php get_header();
$teacher_image = get_field('teacher_image');
$profession = get_field('profession');
$teacher_short_descr = get_field('teacher_short_descr');
$techer_descr = get_field('techer_descr');
?>
<div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 ht-team-member-style-one">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wow move-up">
                        <div class="grid-item">
                            <div class="ht-team-member">
                                <div class="team-image">
                                    <img class="img-fullwidth" src="<?php echo esc_url($teacher_image['url']) ?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="team-info ">
                                    <h5 class="name"><?php the_title(); ?></h5>
                                    <div class="position"><?php echo $profession ?></div>
                                    <?php echo $techer_descr ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer()
?>