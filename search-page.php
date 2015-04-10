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
					<p>Arrr, matey, ye've come to the right place!</p>
					
					<p><img src="http://ulyssesonline.com/wp-content/uploads/2014/12/A-Pirate-Ship-Open-Sail-to-the-Ocean-Coloring-Page.jpg" width="150"/></p>

					<p>The web is a vast sea where many men have been lost.</p>

					<p>Find your way back home by typing in a keyword or two.</p>

					<p>You can plunder the <a href="/archives/">Archives</a> for more hidden treasures.</p>
								
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>