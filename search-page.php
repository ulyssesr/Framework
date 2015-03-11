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
					<br/>
					<p>The web is a vast ocean. Many mariners have been lost while searching for hidden treasures.</p>

					<p>Avoid the same fate by typing a keyword or two to find your way back.</p>

					<p>You can also search the <a href="/archives/">Archives</a> for hidden treasures.</p>
								
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>