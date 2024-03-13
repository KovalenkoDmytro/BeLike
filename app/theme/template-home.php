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
    <main class="home__page">
        <div class="content_wrapper">
            <section class="main">
                <div class="section__context">
	                <?php if (!empty(get_post_meta(get_the_ID(), 'homePage_main_title', true))) { ?>
                        <h1 class="mainLine"><?= get_post_meta(get_the_ID(), 'homePage_main_title', true) ?></h1>
	                <?php } ?>
	                <?php if (!empty(get_post_meta(get_the_ID(), 'homePage_subtitle', true))) { ?>
                        <h2 class="sub_mainLine"><?= get_post_meta(get_the_ID(), 'homePage_subtitle', true) ?></h2>
	                <?php } ?>
	                <?php if (!empty(get_post_meta(get_the_ID(), 'homePage_description', true))) { ?>
                        <div class="description"><?= get_post_meta(get_the_ID(), 'homePage_description', true) ?></div>
	                <?php } ?>
	                <?php if (!empty(get_post_meta(get_the_ID(), 'homePage_consultation_button_link', true))) { ?>
                        <a class="btn _main" target="_blank" href="<?= get_post_meta(get_the_ID(), 'homePage_consultation_button_link', true) ?>"><?= get_post_meta(get_the_ID(), 'homePage_consultation_button_title', true) ?? '' ?> </a>
	                <?php } ?>
                </div>
                <div class="section__image">
	                <?php if (!empty(get_post_meta(get_the_ID(), 'homePage_main_title', true))) { ?>
                        <img class="image" src="<?= wp_get_attachment_image_url('homePage_image', 'full')?>" alt="picture">
	                <?php } ?>
                    <ul class="social__media">
		                <?php if (isset($redux_demo['socialMedia-linkedin'])) { ?>
                            <li class="social__media__item"> <a href="mailto:<?= $redux_demo['socialMedia-linkedin'] ?>"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.042 17.0421H14.0783V12.4009C14.0783 11.2941 14.0586 9.86991 12.5368 9.86991C10.9934 9.86991 10.7568 11.0753 10.7568 12.3211V17.0421H7.79411V7.49758H10.6395V8.80152H10.679C11.2595 7.81001 12.3377 7.21767 13.4859 7.26005C16.49 7.26005 17.043 9.23617 17.043 11.8056L17.042 17.0421ZM4.44998 6.19265C3.49986 6.19265 2.73011 5.42289 2.73011 4.47278C2.73011 3.52266 3.49986 2.75291 4.44998 2.75291C5.40009 2.75291 6.16984 3.52266 6.16984 4.47278C6.16984 5.42289 5.40009 6.19265 4.44998 6.19265ZM5.93133 17.0421H2.96468V7.49758H5.93133V17.0421ZM18.5194 0.00112022H1.47544C0.670207 -0.00775016 0.00985598 0.637817 0 1.44305V18.557C0.00985598 19.3632 0.670207 20.0088 1.47544 19.9999H18.5194C19.3266 20.0097 19.9899 19.3642 20.0007 18.557V1.44206C19.9889 0.63486 19.3256 -0.010707 18.5194 0.000134579" fill="white"/>
                                    </svg>
                                </a></li>
		                <?php } ?>
		                <?php if (isset($redux_demo['socialMedia-facebook'])) { ?>
                            <li class="social__media__item"> <a href="mailto:<?= $redux_demo['socialMedia-facebook'] ?>"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 12.0608C22 17.082 18.3383 21.2446 13.5583 22V14.9885H15.8825L16.325 12.0876H13.5583V10.2054C13.5583 9.41144 13.945 8.63844 15.1833 8.63844H16.4408V6.16852C16.4408 6.16852 15.2992 5.97233 14.2083 5.97233C11.93 5.97233 10.4417 7.36156 10.4417 9.87592V12.0868H7.90917V14.9876H10.4417V21.9992C5.6625 21.2429 2 17.0811 2 12.0608C2 6.50472 6.4775 2 12 2C17.5225 2 22 6.50388 22 12.0608Z" fill="white"/>
                                    </svg>
                                </a></li>
		                <?php } ?>
		                <?php if (isset($redux_demo['socialMedia-instagram'])) { ?>
                            <li class="social__media__item"> <a href="mailto:<?= $redux_demo['socialMedia-instagram'] ?>"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 3.80167C14.67 3.80167 14.9867 3.81167 16.0408 3.86C17.1308 3.91 18.2533 4.15833 19.0475 4.9525C19.8492 5.75417 20.09 6.86583 20.14 7.95917C20.1883 9.01333 20.1983 9.33 20.1983 12C20.1983 14.67 20.1883 14.9867 20.14 16.0408C20.0908 17.125 19.8367 18.2583 19.0475 19.0475C18.2458 19.8492 17.135 20.09 16.0408 20.14C14.9867 20.1883 14.67 20.1983 12 20.1983C9.33 20.1983 9.01333 20.1883 7.95917 20.14C6.88333 20.0908 5.735 19.8308 4.9525 19.0475C4.155 18.25 3.91 17.1275 3.86 16.0408C3.81167 14.9867 3.80167 14.67 3.80167 12C3.80167 9.33 3.81167 9.01333 3.86 7.95917C3.90917 6.87917 4.16583 5.73917 4.9525 4.9525C5.7525 4.1525 6.86833 3.91 7.95917 3.86C9.01333 3.81167 9.33 3.80167 12 3.80167ZM12 2C9.28417 2 8.94333 2.01167 7.87667 2.06C6.33083 2.13083 4.79583 2.56083 3.67833 3.67833C2.55667 4.8 2.13083 6.33167 2.06 7.87667C2.01167 8.94333 2 9.28417 2 12C2 14.7158 2.01167 15.0567 2.06 16.1233C2.13083 17.6675 2.5625 19.2067 3.67833 20.3217C4.79917 21.4425 6.33333 21.8692 7.87667 21.94C8.94333 21.9883 9.28417 22 12 22C14.7158 22 15.0567 21.9883 16.1233 21.94C17.6683 21.8692 19.205 21.4383 20.3217 20.3217C21.4442 19.1992 21.8692 17.6683 21.94 16.1233C21.9883 15.0567 22 14.7158 22 12C22 9.28417 21.9883 8.94333 21.94 7.87667C21.8692 6.33083 21.4383 4.795 20.3217 3.67833C19.2025 2.55917 17.6642 2.13 16.1233 2.06C15.0567 2.01167 14.7158 2 12 2Z" fill="white"/>
                                        <path d="M12.0002 6.86523C9.1644 6.86523 6.86523 9.1644 6.86523 12.0002C6.86523 14.8361 9.1644 17.1352 12.0002 17.1352C14.8361 17.1352 17.1352 14.8361 17.1352 12.0002C17.1352 9.1644 14.8361 6.86523 12.0002 6.86523ZM12.0002 15.3336C10.1594 15.3336 8.6669 13.8411 8.6669 12.0002C8.6669 10.1594 10.1594 8.6669 12.0002 8.6669C13.8411 8.6669 15.3336 10.1594 15.3336 12.0002C15.3336 13.8411 13.8411 15.3336 12.0002 15.3336Z" fill="white"/>
                                        <path d="M17.3382 7.86143C18.0009 7.86143 18.5382 7.32417 18.5382 6.66143C18.5382 5.99868 18.0009 5.46143 17.3382 5.46143C16.6754 5.46143 16.1382 5.99868 16.1382 6.66143C16.1382 7.32417 16.6754 7.86143 17.3382 7.86143Z" fill="white"/>
                                    </svg>
                                </a></li>
		                <?php } ?>
                    </ul>
                </div>

            </section>

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