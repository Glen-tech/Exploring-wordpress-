<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

function seperate_templates()
{
	$our_title = get_the_title( get_option('page_for_posts', true) );
	
	switch($our_title){
		
		case "Home page":
		echo "Found home page";
		break;
		
		case "Button page":
		echo "Found button page";
		break;
	}
	
}



/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-page' );
	
	seperate_templates();

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
