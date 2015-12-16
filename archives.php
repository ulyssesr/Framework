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

						<p><strong>By Category:</strong></p>

						<div class="bycategories">
							<?php wp_list_categories('title_li='); ?>
						</div>
						<div style="clear:both"></div>

						<br/>
						<p><strong>By Month:</strong></p>			

						<div class="three-column">
							<?php wp_get_archives(array('type' => 'monthly', 'format' => 'custom', 'before' => '', 'after' => '<br/>')); ?>
						</div>
				
					</div>
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>