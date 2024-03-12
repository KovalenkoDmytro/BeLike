<?php

/**
 * Template name: HomePage Template
 *
 */

get_header();
$args = array(
	'post_type'     => 'projects',
    'posts_per_page' => 6,
);
$projects_home_posts = new WP_Query( $args );
?>
    <main class="projectSinglePost__page">
        <section class="content_wrapper">
            <div class="headline"><?= __('Our cases')?></div>
            <div class="projects">
	            <?= get_post_meta( get_the_ID(), 'homePage_description', true ) ?>

	            <?php while ( $projects_home_posts->have_posts() ) : $projects_home_posts->the_post();
		            get_template_part( 'template-parts/post-item', get_post_type() );
	            endwhile; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>