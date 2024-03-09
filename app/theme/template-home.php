<?php

/**
 * Template name: HomePage Template
 *
 */

get_header();

?>

    <main> HOME Page</main>

<?= get_post_meta( get_the_ID(), 'homePage_description', true ) ?>

<?php
$args                = array(
	'post_type' => 'post',
	'category_name'       => 'project'
);
$projects_home_posts = new WP_Query( $args );



while ( $projects_home_posts->have_posts() ) : $projects_home_posts->the_post();
get_template_part( 'template-parts/post-item', get_post_type() );
endwhile;

?>


<?php
get_footer(); ?>