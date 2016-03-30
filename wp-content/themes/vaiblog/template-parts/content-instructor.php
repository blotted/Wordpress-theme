<?php
$instructor_section_title = get_field('instructor_section_title');
$instructor_name          = get_field('instructor_name');
$bio_expert               = get_field('bio_expert');
$full_bio                 = get_field('full_bio');
$twitter_username         = get_field('twitter_username');
$facebook_username        = get_field('facebook_username');
$google_plus_username     = get_field('google_plus_username');
$num_copies               = get_field('num_copies');
$num_reviews              = get_field('num_reviews');
$num_albums               = get_field('num_albums');
?>

<!-- INSTRUCTOR -->
<section id="instructor">
    <div class="container">

        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2><?=$instructor_section_title?> <small><?=$instructor_name?></small></h2>
                    </div><!-- col -->
                    <div class="col-lg-4">

                        <?php if ( !empty($twitter_username) ) : ?>
                            <a href="http://twitter.com/<?=$twitter_username?>" target="_blank" class="badge social twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        <?php endif; ?>

                        <?php if ( !empty($facebook_username) ) : ?>
                            <a href="http://facebook.com/<?=$facebook_username?>" target="_blank" class="badge social facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        <?php endif; ?>

                        <?php if ( !empty($google_plus_username) ) : ?>
                            <a href="http://plus.google.com/<?=$google_plus_username?>" target="_blank" class="badge social gplus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        <?php endif; ?>

                    </div><!-- col -->
                </div><!-- row -->

                <p class="lead"><?=$bio_expert?></p>

                <?=$full_bio?>

                <hr>

                <h3>The Numbers <small>They Don't Lie</small></h3>

                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?=$num_copies?> <span>copies</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?=$num_reviews?> <span>reviews</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?=$num_albums?> <span>albums</span>
                            </div><!-- num-content -->
                        </div><!-- num -->
                    </div><!-- col -->
                </div><!-- row -->

            </div><!-- col -->
        </div><!-- row -->

    </div><!-- container -->
</section><!-- instructor -->