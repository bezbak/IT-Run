<?php get_header();
$short_descr = get_field('short_descr');
$full_descr = get_field('full_descr');
?>
<div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 ht-team-member-style-one">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wow move-up">
                        <div class="grid-item">
                            <div class="ht-team-member">
                                <div class="team-info ">
                                    <h5 class="name"><?php the_title(); ?></h5>
                                    <div class="position"><?php echo $full_descr ?></div>
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