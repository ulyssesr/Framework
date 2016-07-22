<?php
/*
Template Name: Search
*/

get_header(); ?>
<?php get_sidebar(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">			
					<h1 class="entry-title">Search</h1>
				</header>

				<div class="entry-content">

					<p><img src="http://ulyssesonline.com/wp-content/uploads/2014/12/A-Pirate-Ship-Open-Sail-to-the-Ocean-Coloring-Page.jpg" width="150"/></p>

					<p><?php get_search_form(); ?></p>

					<p>Ahoy!<br/>
						 Arr matey, ye've come to the right place!<br/>
					   Ye searchin for your next booty?<br/>
					   Plunder our <a href="/archives/">archives</a> for more hidden treasures.
					</p>
			
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>