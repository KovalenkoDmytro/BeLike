<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dk
 */

get_header();
?>

	<main class="blog__page">
        <div class="content_wrapper">
            <?= the_title( '<h1 class="headline pageTitle">', '</h1>' ); ?>
            <div class="blog__items">
	            <?php while ( have_posts() ) :
		            the_post();
		            get_template_part( 'template-parts/blog-item', get_post_type() );
	            endwhile; ?>
            </div>
        </div>
	</main>
<?php

get_footer();
