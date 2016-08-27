<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="mainContentRow" class="row-fluid">
		<div id="mainCol" class="span12">

			<h1><?php _e( 'In The News', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>		
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
