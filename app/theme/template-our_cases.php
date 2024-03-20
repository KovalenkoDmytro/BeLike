<?php

/**
 * Template name: Our cases Template
 *
 */
get_header();
$args                = array(
	'post_type'      => 'projects',
);
$our_cases_posts = new WP_Query( $args );


?>
    <main class="our_cases_posts__page">
        <div class="content_wrapper">
            <section class="projects">
	            <?= the_title( '<h1 class="headline pageTitle">', '</h1>' ); ?>
                <div class="projects__items">
					<?php while ( $our_cases_posts->have_posts() ) : $our_cases_posts->the_post();
						get_template_part( 'template-parts/post-item', get_post_type() );
					endwhile; ?>
                </div>
            </section>

        </div>
    </main>
<?php get_footer(); ?>