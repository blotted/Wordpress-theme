<?php
/**
 * Template Name: Home Page
 */

// Custom Fields
$prelaunch_price  = get_post_meta( 15, 'prelaunch_price', true);
$launch_price  = get_post_meta( 15, 'launch_price', true);
$final_price  = get_post_meta( 15, 'final_price', true);
$site_url  = get_post_meta( 15, 'site_url', true);
$button_text  = get_post_meta( 15, 'button_text', true);
$optin_text = get_post_meta( 15, 'optin_text', true);
$optin_button_text = get_post_meta( 15, 'optin_button_text', true);

// Advanced Custom Fields
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_description = get_field('income_section_description');

$axe_feature_image = get_field('axe_feature_image');
$axe_section_title = get_field('axe_section_title');
$axe_section_body = get_field('axe_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');


get_header(); ?>

    <!-- HERO -->
    <section id="hero" data-type="background" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">

                    </div><!-- col -->
                    <div class="col-sm-7 hero-text">
                        <h1>The Story of Light</h1>
                        <p class="lead">
                            'The Story of Light', a new solo album of original material by virtuoso
                            guitarist and visionary composer Steve Vai. The title comes out on Favored
                            Nations Entertainment, the label Vai founded in 1999. Its sprawling and
                            expressive 12-song set continues a conceptual and cosmic narrative arc
                            begun on the artist's acclaimed 2005 album 'Real Illusions: Reflections'.
                        </p>
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                                <span><?= $prelaunch_price ?></span>
                            </div><!-- price-timeline -->
                            <div class="price">
                                <h4>Launch Price <small>Coming soon!</small></h4>
                                <span><?= $launch_price ?></span>
                            </div><!-- price-timeline -->
                            <div class="price">
                                <h4>Final Price <small>Coming soon!</small></h4>
                                <span><?= $final_price ?></span>
                            </div><!-- price-timeline -->

                            <p><a href="<?=$site_url ?>" class="btn btn-lg btn-danger" role="button"><?=$button_text ?></a></p>

                        </div><!-- col -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </article>
    </section><!-- hero -->

    <!-- OPT IN SECTION -->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?=$optin_text ?></p>
                </div><!-- col -->
                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                        <?=$optin_button_text?>
                    </button>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- optin -->


    <!-- BOOST YOUR INCOME -->
    <section id="boost-income">
        <div class="container">

            <div class="section-header">

                <?php if ( !empty($income_feature_image) ) : ?>

                    <img src="<?=$income_feature_image['url']?>" alt="<?=$income_feature_image['alt']?>">

                <?php endif; ?>

                <h2><?=$income_section_title ?></h2>
            </div><!-- section-header -->

            <p class="lead"><?=$income_section_description ?></p>

            <div class="row">
                <div class="col-sm-6">
                    <h3><?=$reason_1_title?></h3>
                    <p><?=$reason_1_description?></p>
                </div><!-- col -->
                <div class="col-sm-6">
                    <h3><?=$reason_2_title?></h3>
                    <p><?=$reason_2_description?></p>
                </div><!-- col -->
            </div><!-- row -->

        </div><!-- container -->
    </section>

    <!-- WHO BENEFITS -->
    <section id="who-benefits">
        <div class="container">

            <div class="section-header">

                <?php if ( !empty($axe_feature_image) ) : ?>

                    <img src="<?=$axe_feature_image['url']?>" alt="<?=$axe_feature_image['alt']?>">

                <?php endif; ?>

                <h2><?=$axe_section_title?></h2>
            </div><!-- section-header -->

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <?=$axe_section_body ?>

                </div><!-- col -->
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- who-benefits -->

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

                <?php endwhile; ?>

            </div><!-- row -->
        </div><!-- container -->

    </section><!-- course-features -->

    <!-- PROJECT FEATURES -->
    <section id="project-features">

        <div class="container">

            <h2>Final Project Features</h2>
            <p class="lead">Throughout this entire course, you work towards building
                an incredibly beautiful website. Want to see the website <strong>you
                </strong> are going to build? <em>You're looking at it</em> The
                website you're using right now is the website you will have built entirely
                by yourself, by the end of this course.</p>

            <div class="row">

                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
                    <h3>Sexy &amp; Modern Design</h3>
                    <p>You get to work with a modern, professional quality design &amp;
                        layout.</p>
                </div><!-- col -->

                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
                    <h3>Quality HTML5 &amp; CSS3</h3>
                    <p>You'll learn how hand-craft a stunning website with valid,
                        semantic and beautiful HTML5 &amp; CSS3.</p>
                </div><!-- col -->

                <div class="col-sm-4">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="Cms">
                    <h3>Easy-to-use CMS</h3>
                    <p>Allow your clients to easily update their websites by converting your
                        static websites to dynamic websites, using WordPress.</p>
                </div><!-- col -->

            </div><!-- row -->

        </div><!-- container -->

    </section><!-- project-features -->

    <!-- VIDEO FEATURETTE -->
    <section id="featurette">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Watch the song</h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/_Rxm99lO_us" frameborder="0" allowfullscreen></iframe>
                </div><!-- col -->
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- featurette -->

    <!-- INSTRUCTOR -->
    <section id="instructor">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Your Instructor <small>Steve Vai</small></h2>
                        </div><!-- col -->
                        <div class="col-lg-4">
                            <a href="http://vai.com" target="_blank" class="badge social twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="http://vai.com" target="_blank" class="badge social facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="http://vai.com" target="_blank" class="badge social gplus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div><!-- col -->
                    </div><!-- row -->

                    <p class="lead">A highly skilled professional, Steve Vai an American
                        guitarist, composer, singer, songwriter, and producer.</p>
                    <p>Steven Siro "Steve" Vai born and raised on Long Island, New York.
                        Vai was voted the 10th "Greatest Guitarist" by Guitar World magazine,
                        and has sold over 15 million records.</p>
                    <p>A three-time Grammy Award winner and fifteen-time nominee, Vai
                        started his music career in 1978 at the age of 18 as a
                        transcriptionist for Frank Zappa, and joined his band from 1980
                        to 1983.He embarked on a solo career in 1983 and has released eight
                        solo albums to date.</p>
                    <p>He has recorded and toured with Alcatrazz, David Lee Roth, Whitesnake,
                        as well as having recorded with artists such as Mary J. Blige,
                        Spinal Tap, and Ozzy Osbourne. Additionally, Vai has toured with
                        live-only acts G3, Zappa Plays Zappa, the Experience Hendrix tour,
                        as well as headlining international tours.</p>

                    <hr>

                    <h3>The Numbers <small>They Don't Lie</small></h3>

                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    1,500,000 <span>copies</span>
                                </div><!-- num-content -->
                            </div><!-- num -->
                        </div><!-- col -->
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    1635 <span>reviews</span>
                                </div><!-- num-content -->
                            </div><!-- num -->
                        </div><!-- col -->
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    8 <span>albums</span>
                                </div><!-- num-content -->
                            </div><!-- num -->
                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- col -->
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- instructor -->

    <!-- TESTIMONIALS -->
    <section id="kudos">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <h2>What People Are Saying About Steve</h2>

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
                        </div><!-- col -->
                        <div class="col-sm-8">
                            <blockquote>
                                Incredibly fast, clean, accurate, and an amazing songwriter.
                                Totally religious with the guitar. He goes to radical lengths and
                                uses crazy techniques to come up with songs and solos. A great speaker,
                                and demonstrator.
                                <cite>&mdash; He is a nice, mild mannered, humble guitarist.</cite>
                            </blockquote>
                        </div><!-- col -->
                    </div><!-- row -->

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Aj">
                        </div><!-- col -->
                        <div class="col-sm-8">
                            <blockquote>
                                His a genius.. He has done lots of Jimmy's stuff better than
                                him... I respect Jimmy Hendrix and not saying that Steve is
                                greater than him but yes his better than at least 15 guitarist
                                in this tally above him.. This man once said that true music
                                cannot be judged.. ! We should not judge these great talents
                                in this list we should just vote..
                                <cite>&mdash; But yes it's a great page to come guitar players...</cite>
                            </blockquote>
                        </div><!-- col -->
                    </div><!-- row -->

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
                        </div><!-- col -->
                        <div class="col-sm-8">
                            <blockquote>
                                Steve vai is greatest guitarist of the world. First of all he has dedicated
                                his whole life towards music. He is very original and he always works hard
                                to bring new techniques in guitar. He never become exhausted while contributing
                                and composing music. He has got great feel and respect towards music so he is
                                great guitarist of all time.
                                <cite>&mdash; ... great guitarist of all time.</cite>
                            </blockquote>
                        </div><!-- col -->
                    </div><!-- row -->

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
                        </div><!-- col -->
                        <div class="col-sm-8">
                            <blockquote>
                                He is the best guitar player I've ever heard in my life. He makes every single
                                note count, he is 100% accurate 99% of the time, and his emotion really comes
                                through with every lick. He needs to be number one! "for the love of god" live
                                is absolutely amazing.
                                <cite>&mdash; "for the love of god"</cite>
                            </blockquote>
                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- col -->
            </div><!-- row -->

        </div><!-- container -->
    </section><!-- kudos -->

<?php
get_footer();
?>