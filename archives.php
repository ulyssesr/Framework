<?php
/*
Template Name: Archives
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">			
					<?php the_post(); ?>
					<h1>Archives</h1>
				</header>

				<div class="entry-content">
				
					<div class="three-column">
						<?php wp_get_archives(array('type' => 'monthly', 'format' => 'custom', 'before' => '', 'after' => '<br/>')); ?>
					</div>
				
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>