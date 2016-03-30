<?php
$axe_feature_image = get_field('axe_feature_image');
$axe_section_title = get_field('axe_section_title');
$axe_section_body = get_field('axe_section_body');
?>

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