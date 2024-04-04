<?php

/**
 * Template name: Services Template
 *
 */
get_header();
$components      = get_field( 'services_components' );
$args            = array(
	'post_type'      => 'projects',
	'posts_per_page' => 3,
);
$our_cases_posts = new WP_Query( $args );
$our_cases_form  = get_field( 'services_components')['contact_form'];
$our_cases_link  = get_field( 'services_components')['our_cases_link'];

?>
    <main class="service__page">
        <div class="content_wrapper">
            <section class="main_video">
                <video autoplay muted loop src="<?= $components['link_to_background_video'] ?>"></video>
	            <?php if ( ! empty( $components['main_text_section'] ) ) { ?>
                    <div class="main">
                        <div class="content_wrapper">
                            <div class="content">
	                            <?php if ( ! empty( $components['main_text_section']['title'] ) ) { ?>
                                    <h1 class="headline"><?= $components['main_text_section']['title'] ?></h1>
	                            <?php } ?>
	                            <?php if ( ! empty( $components['main_text_section']['description'] ) ) { ?>
                                    <div class="description"><?= $components['main_text_section']['description'] ?></div>
	                            <?php } ?>
                            </div>

                        </div>
                    </div>
	            <?php } ?>
            </section>

			<?php if ( ! empty( $components['thimbnail_sections'] ) ) { ?>
                <section class="thumbnail_sections__wrapper">
					<?php foreach ( $components['thimbnail_sections'] as $thumbnailSection ): ?>
                        <section class="thumbnail_sections">
                            <div class="slider__wrapper" id="thumbnails">
                                <div class="navigation__wrapper">
									<?php if ( ! empty( $thumbnailSection['title'] ) ) { ?>
                                        <p class="title"><?= $thumbnailSection['title'] ?></p>
									<?php } ?>
                                    <div class="slider__arrows">
                                        <button class="slider__arrows__prev" tabindex="0" aria-label="Previous slide"
                                                aria-controls="swiper-wrapper-252d380d1a00fa7d">
                                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)"
                                                        stroke="#9359F2"
                                                        stroke-width="2"></circle>
                                                <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565"
                                                      stroke="#9359F2"
                                                      stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                        <button class="slider__arrows__next" tabindex="0" aria-label="Next slide"
                                                aria-controls="swiper-wrapper-252d380d1a00fa7d">
                                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="30" cy="30" r="29" stroke="#9359F2"
                                                        stroke-width="2"></circle>
                                                <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435"
                                                      stroke="#9359F2"
                                                      stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
								<?php if ( ! empty( $thumbnailSection['thimbnails'] ) ) { ?>
                                    <div class="thumbnail__items swiper-wrapper">
										<?php foreach ( $thumbnailSection['thimbnails'] as $thumbnail ): ?>
                                            <div class="thumbnail__item swiper-slide">
                                                <div class="text__content">
													<?php if ( ! empty( $thumbnail['title'] ) ) { ?>
                                                        <p class="title"><?= $thumbnail['title'] ?></p>
													<?php } ?>
													<?php if ( ! empty( $thumbnail['short_description'] ) ) { ?>
                                                        <div class="description"><?= $thumbnail['short_description'] ?></div>
													<?php } ?>
                                                </div>


												<?php if ( ! empty( $thumbnail['image'] ) ) { ?>
                                                    <div class="image__wrapper">
                                                        <img src="<?= $thumbnail['image']['url'] ?>"
                                                             alt="<?= $thumbnail['image']['title'] ?>">
                                                    </div>

												<?php } ?>
                                            </div>

										<?php endforeach; ?>
                                    </div>
								<?php } ?>
                            </div>
                        </section>
					<?php endforeach; ?>
                </section>
			<?php } ?>
            <section class="projects">
                <div class="top">
	                <?= the_title( '<h1 class="headline pageTitle">', '</h1>' ); ?>
	                <?php if ( ! empty( $our_cases_link ) ) { ?>
                        <a class="btn _violetOutline" target="_blank"
                           href="<?= $our_cases_link['url'] ?>"><?= $our_cases_link['title'] ?? '' ?> </a>
	                <?php } ?>
                </div>

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
			        <?php if ( ! empty( $our_cases_form['form_code'] ) ) { ?>
                        <div class="form__section"><?= do_shortcode( $our_cases_form['form_code'] ) ?></div>
			        <?php } ?>
                </section>
	        <?php } ?>
        </div>
    </main>
<?php get_footer(); ?>