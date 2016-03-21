<?php
/*
Template Name: Archives
*/

get_header(); ?>
<?php get_sidebar(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">			
					<?php the_post(); ?>
					<h1>Archives</h1>
				</header>

				<div class="container"> 
					<div class="entry-content">

						<h4>View by Month</h4>

						<div class="three-column">
							<?php wp_get_archives(array('type' => 'monthly', 'format' => 'custom', 'before' => '', 'after' => '<br/>')); ?>
						</div>

						<br/>
						<h4>View by Category:</h4>

						<div class="bycategories">
							<?php wp_list_categories('title_li='); ?>
						</div>
						<div style="clear:both"></div>

					</div>
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>