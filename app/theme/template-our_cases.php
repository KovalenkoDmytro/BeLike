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
$our_cases_form               = get_field( 'our_cases_components');

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
            <?php if ( ! empty( $our_cases_form ) ) { ?>
                <section class="contact_form_section">
                    <?php if ( ! empty( $our_cases_form['title'] ) ) { ?>
                        <div class="form__section">
                            <div class="headline"><?= $our_cases_form['title'] ?></div>
                        </div>
                    <?php } ?>
	                <?php if ( ! empty( $our_cases_form['image'] ) ) { ?>
                        <div class="form__section __image">
                            <img class="image" src="<?= $our_cases_form['image']['url'] ?>" alt="picture">
                        </div>
	                <?php } ?>
                    <?php if ( ! empty( $our_cases_form['form_id'] ) ) { ?>
                        <div class="form__section"><?= do_shortcode( $our_cases_form['form_id'] ) ?></div>
                    <?php } ?>
                </section>
            <?php } ?>
        </div>
    </main>
<?php get_footer(); ?>