<?php
/* Template Name: custom landing101 */

get_header();
?>
	<!-- vari container -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				// stampa il post
				the_post();

				
				// function ("path", "template name", "additional arg")
				get_template_part( 'template-parts/content/content', 'page2' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

	
		</main><!-- #main -->
	</div><!-- #primary -->