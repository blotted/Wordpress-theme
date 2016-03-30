<?php
// Custom Fields
$prelaunch_price  = get_post_meta( 15, 'prelaunch_price', true);
$launch_price  = get_post_meta( 15, 'launch_price', true);
$final_price  = get_post_meta( 15, 'final_price', true);
$site_url  = get_post_meta( 15, 'site_url', true);
$button_text  = get_post_meta( 15, 'button_text', true);

?>

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