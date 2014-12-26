<?php
/*
Template Name: Search
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article>

				<header class="entry-header">			
					<h1>Search</h1>
				</header>

				<div class="entry-content">
				
					<?php get_search_form(); ?>
								
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>