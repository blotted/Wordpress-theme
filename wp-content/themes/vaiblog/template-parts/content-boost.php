<?php
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_description = get_field('income_section_description');
?>

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