<?php
$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');
?>

<!-- COURSE FEATURES -->
<section id="course-features">

    <div class="container">
        <div class="section-header">

            <?php if ( !empty($features_section_image) ) : ?>

                <img src="<?=$features_section_image['url']?>" alt="<?=$features_section_image['alt']?>">

            <?php endif; ?>

            <h2><?=$features_section_title?></h2>

            <?php if ( !empty($features_section_body) ) : ?>
                <p class="lead"><?=$features_section_body?></p>
            <?php endif; ?>

        </div><!-- section-header -->

        <div class="row">

            <?php $loop = new WP_Query(array('post_type' => 'extra_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-sm-2">
                    <i class="<?php the_field('extra_feature_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div><!-- col -->

            <?php endwhile; wp_reset_query(); ?>


        </div><!-- row -->
    </div><!-- container -->

</section><!-- course-features -->
