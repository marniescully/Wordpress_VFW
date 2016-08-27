<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section id="mainContentRow" class="row-fluid">
			<?php if (!(is_front_page())) : ?>
				<div id="imageSideBar" class="span3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Pages.jpg" alt="Palmerton, PA United Veterans Organization" class="pull-left hidden-phone" id="memorial">
				</div>

				<div id="mainCol" class="span6">
					<h1><?php the_title(); ?></h1>

			<?php else : ?>
				<div id="mainCol" class="span9">
			<?php endif; ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				<br class="clear">
			</article>
			<!-- /article -->
		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
			</div>
		<div id="testSideBar" class="span3">
		<?php if (!(is_page('Events'))): ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

		</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>