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

$text_slider = get_field( 'text_slider' );
//echo ('<pre>');
//
//print_r($text_slider);
//echo ('</pre>');

?>
    <main class="projectSinglePost__page">
        <div class="content_wrapper">
	        <?php if ( ! empty( $text_slider ) ) { ?>
                <section class="text__slider" id="text_slider">
                    <div class="headline">
                        <p><?=$text_slider['title']?></p>
                        <div class="slider__arrows">
                            <button class="slider__arrows__prev">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)" stroke="#9359F2" stroke-width="2"/>
                                    <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#9359F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button class="slider__arrows__next">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="29" stroke="#9359F2" stroke-width="2"/>
                                    <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435" stroke="#9359F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="swiper-wrapper" >
	                    <?php foreach ($text_slider['slider'] as $slide): ?>
                            <div class="swiper-slide">
                                <p class="slide__title"><?=$slide['slide']['title'] ?></p>
                                <div class="slide__text"><?=$slide['slide']['text']?></div>
                            </div>
	                    <?php endforeach; ?>
                    </div>
                </section>

	        <?php } ?>

            <section class="projects">
                <div class="headline"><?= __('Our cases')?></div>
                <div class="projects__items">
		            <?php while ( $projects_home_posts->have_posts() ) : $projects_home_posts->the_post();
			            get_template_part( 'template-parts/post-item', get_post_type() );
		            endwhile; ?>
                </div>
            </section>

        </div>
    </main>
<?php get_footer(); ?>