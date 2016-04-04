<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Steve_Vai_Blog
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">That page can't be found</h1>
	</section>

	<div class="container">
		<div id="primary" class="row">

			<main id="content" class="col-sm-8">
				<div class="error-404 not-found">

					<div class="page-content">
						<h2>Let's get back!</h2>

						<h3>Resources</h3>
						<p>Perhaps you were looking for a specific resources?</p>

						<?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
						<div class="resource-row clearfix">

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php
								$resource_image = get_field('resources_image');
								$resource_url = get_field('resource_url');
								$button_text = get_field('button_text');
								?>
								<div class="resource">

									<img src="<?=$resource_image['url']?>" alt="<?=$resource_image['alt']?>">

									<h3><a href="<?=$resource_url?>"></a><?php the_title();?></h3>
									<?php the_excerpt();?>

									<?php if(!empty($button_text)): ?>

										<a href="<?=$resource_url?>" class="btn btn-success"><?=$button_text?></a>
									<?php endif; ?>
								</div><!-- resource -->
							<?php endwhile; ?>

						</div><!-- resource-row -->

						<h3>Categories</h3>
						<p>...or maybe a category?</p>

						<div class="widget widget_categories">
							<h4 class="widget-title">Most Used Categories</h4>
							<ul>
								<?php
									wp_list_categories( array(
										'orderby' => 'count',
										'order' => 'DESCt',
										'show_count' => 1,
										'title_li' => '',
										'number' => 10
									));
								?>
							</ul>
						</div>

						<h3>Archives</h3>
						<p>You can always sort through our archives...</p>
						<?php the_widget('WP_Widget_Archives')?>

						<p>...or, just head back to the <a href="<?=esc_url(home_url('/'))?>">home page</a></p>

					</div><!-- .page-content4 -->

				</div><!-- .error-404 -->
			</main><!-- #content -->

			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>

		</div><!-- #primary -->
	</div><!-- .container -->


<?php get_footer();?>










