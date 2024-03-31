<?php

/**
 * Template name: HomePage Template
 *
 */
get_header();
$args                = array(
	'post_type'      => 'projects',
	'posts_per_page' => 6,
);
$projects_home_posts = new WP_Query( $args );
$second_section      = get_field( 'second_section' );
$text_contents       = get_field( 'text_contents' );
$services_sections   = get_field( 'services_sections' );

$case_slider               = get_field( 'Case_slider' );
$prices_section            = get_field( 'prices_section' );
$contact_form_section      = get_field( 'contact_form' );
$customer_opinions_section = get_field( 'customer_testimonials' );
$quiz_section              = get_field( 'quiz' );
$video_slider              = get_field( 'video_slider' );
$our_cases                 = get_field( 'our_cases' );
//echo( '<pre>' );
//
//print_r( $our_cases );
//echo( '</pre>' );

?>
    <main class="home__page">
        <div class="content_wrapper">
            <section class="main">
                <div class="section__context">
					<?php if ( ! empty( get_post_meta( get_the_ID(), 'homePage_main_title', true ) ) ) { ?>
                        <h1 class="mainLine"><?= get_post_meta( get_the_ID(), 'homePage_main_title', true ) ?></h1>
					<?php } ?>
					<?php if ( ! empty( get_post_meta( get_the_ID(), 'homePage_subtitle', true ) ) ) { ?>
                        <h2 class="sub_mainLine"><?= get_post_meta( get_the_ID(), 'homePage_subtitle', true ) ?></h2>
					<?php } ?>
					<?php if ( ! empty( get_post_meta( get_the_ID(), 'homePage_description', true ) ) ) { ?>
                        <div class="description"><?= get_post_meta( get_the_ID(), 'homePage_description', true ) ?></div>
					<?php } ?>
					<?php if ( ! empty( get_post_meta( get_the_ID(), 'homePage_consultation_button_link', true ) ) ) { ?>
                        <a class="btn _main" target="_blank"
                           href="<?= get_post_meta( get_the_ID(), 'homePage_consultation_button_link', true ) ?>"><?= get_post_meta( get_the_ID(), 'homePage_consultation_button_title', true ) ?? '' ?> </a>
					<?php } ?>
                </div>
                <div class="section__image">

                    <div class="video__wrapper">
						<?php if ( ! empty( get_post_meta( get_the_ID(), 'homePage_video', true ) ) ) { ?>
                            <video autoplay muted loop class="video"
                                   src="<?= get_post_meta( get_the_ID(), 'homePage_video', true ) ?>"></video>
						<?php } ?>
                    </div>

                    <ul class="social__media">
						<?php if ( isset( $redux_demo['socialMedia-linkedin'] ) ) { ?>
                            <li class="social__media__item"><a href="mailto:<?= $redux_demo['socialMedia-linkedin'] ?>">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.042 17.0421H14.0783V12.4009C14.0783 11.2941 14.0586 9.86991 12.5368 9.86991C10.9934 9.86991 10.7568 11.0753 10.7568 12.3211V17.0421H7.79411V7.49758H10.6395V8.80152H10.679C11.2595 7.81001 12.3377 7.21767 13.4859 7.26005C16.49 7.26005 17.043 9.23617 17.043 11.8056L17.042 17.0421ZM4.44998 6.19265C3.49986 6.19265 2.73011 5.42289 2.73011 4.47278C2.73011 3.52266 3.49986 2.75291 4.44998 2.75291C5.40009 2.75291 6.16984 3.52266 6.16984 4.47278C6.16984 5.42289 5.40009 6.19265 4.44998 6.19265ZM5.93133 17.0421H2.96468V7.49758H5.93133V17.0421ZM18.5194 0.00112022H1.47544C0.670207 -0.00775016 0.00985598 0.637817 0 1.44305V18.557C0.00985598 19.3632 0.670207 20.0088 1.47544 19.9999H18.5194C19.3266 20.0097 19.9899 19.3642 20.0007 18.557V1.44206C19.9889 0.63486 19.3256 -0.010707 18.5194 0.000134579"
                                              fill="white"/>
                                    </svg>
                                </a></li>
						<?php } ?>
						<?php if ( isset( $redux_demo['socialMedia-facebook'] ) ) { ?>
                            <li class="social__media__item"><a href="mailto:<?= $redux_demo['socialMedia-facebook'] ?>">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 12.0608C22 17.082 18.3383 21.2446 13.5583 22V14.9885H15.8825L16.325 12.0876H13.5583V10.2054C13.5583 9.41144 13.945 8.63844 15.1833 8.63844H16.4408V6.16852C16.4408 6.16852 15.2992 5.97233 14.2083 5.97233C11.93 5.97233 10.4417 7.36156 10.4417 9.87592V12.0868H7.90917V14.9876H10.4417V21.9992C5.6625 21.2429 2 17.0811 2 12.0608C2 6.50472 6.4775 2 12 2C17.5225 2 22 6.50388 22 12.0608Z"
                                              fill="white"/>
                                    </svg>
                                </a></li>
						<?php } ?>
						<?php if ( isset( $redux_demo['socialMedia-instagram'] ) ) { ?>
                            <li class="social__media__item"><a
                                        href="mailto:<?= $redux_demo['socialMedia-instagram'] ?>">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 3.80167C14.67 3.80167 14.9867 3.81167 16.0408 3.86C17.1308 3.91 18.2533 4.15833 19.0475 4.9525C19.8492 5.75417 20.09 6.86583 20.14 7.95917C20.1883 9.01333 20.1983 9.33 20.1983 12C20.1983 14.67 20.1883 14.9867 20.14 16.0408C20.0908 17.125 19.8367 18.2583 19.0475 19.0475C18.2458 19.8492 17.135 20.09 16.0408 20.14C14.9867 20.1883 14.67 20.1983 12 20.1983C9.33 20.1983 9.01333 20.1883 7.95917 20.14C6.88333 20.0908 5.735 19.8308 4.9525 19.0475C4.155 18.25 3.91 17.1275 3.86 16.0408C3.81167 14.9867 3.80167 14.67 3.80167 12C3.80167 9.33 3.81167 9.01333 3.86 7.95917C3.90917 6.87917 4.16583 5.73917 4.9525 4.9525C5.7525 4.1525 6.86833 3.91 7.95917 3.86C9.01333 3.81167 9.33 3.80167 12 3.80167ZM12 2C9.28417 2 8.94333 2.01167 7.87667 2.06C6.33083 2.13083 4.79583 2.56083 3.67833 3.67833C2.55667 4.8 2.13083 6.33167 2.06 7.87667C2.01167 8.94333 2 9.28417 2 12C2 14.7158 2.01167 15.0567 2.06 16.1233C2.13083 17.6675 2.5625 19.2067 3.67833 20.3217C4.79917 21.4425 6.33333 21.8692 7.87667 21.94C8.94333 21.9883 9.28417 22 12 22C14.7158 22 15.0567 21.9883 16.1233 21.94C17.6683 21.8692 19.205 21.4383 20.3217 20.3217C21.4442 19.1992 21.8692 17.6683 21.94 16.1233C21.9883 15.0567 22 14.7158 22 12C22 9.28417 21.9883 8.94333 21.94 7.87667C21.8692 6.33083 21.4383 4.795 20.3217 3.67833C19.2025 2.55917 17.6642 2.13 16.1233 2.06C15.0567 2.01167 14.7158 2 12 2Z"
                                              fill="white"/>
                                        <path d="M12.0002 6.86523C9.1644 6.86523 6.86523 9.1644 6.86523 12.0002C6.86523 14.8361 9.1644 17.1352 12.0002 17.1352C14.8361 17.1352 17.1352 14.8361 17.1352 12.0002C17.1352 9.1644 14.8361 6.86523 12.0002 6.86523ZM12.0002 15.3336C10.1594 15.3336 8.6669 13.8411 8.6669 12.0002C8.6669 10.1594 10.1594 8.6669 12.0002 8.6669C13.8411 8.6669 15.3336 10.1594 15.3336 12.0002C15.3336 13.8411 13.8411 15.3336 12.0002 15.3336Z"
                                              fill="white"/>
                                        <path d="M17.3382 7.86143C18.0009 7.86143 18.5382 7.32417 18.5382 6.66143C18.5382 5.99868 18.0009 5.46143 17.3382 5.46143C16.6754 5.46143 16.1382 5.99868 16.1382 6.66143C16.1382 7.32417 16.6754 7.86143 17.3382 7.86143Z"
                                              fill="white"/>
                                    </svg>
                                </a></li>
						<?php } ?>
                    </ul>
                </div>
            </section>
			<?php if ( ! empty( $second_section ) ) { ?>
                <section class="secondSection"  >
                    <div class="headline"><?= $second_section['title'] ?></div>
					<?php if ( ! empty( $second_section['steps'] ) ) { ?>
                            <div class="slider__container" id="steps">
                                <div class="steps swiper-wrapper" >
		                            <?php foreach ( $second_section['steps'] as $index => $step ): ?>
                                        <div class="step swiper-slide">
                                            <p class="count">step<?= $index + 1 ?></p>
                                            <p class="title"><?= $step['title'] ?></p>
                                            <div class="description"><?= $step['description'] ?></div>
                                        </div>
		                            <?php endforeach; ?>
                                </div>

                                <button class="slider__arrows__prev" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-28e97907cd06d8410">
                                    <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#9359F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="slider__arrows__next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-28e97907cd06d8410">
                                    <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435" stroke="#9359F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>


					<?php } ?>
					<?php if ( ! empty( $second_section['text_thumbnails'] ) ) { ?>
                        <div class="achievements">
							<?php foreach ( $second_section['text_thumbnails'] as $text_thumbnail ): ?>
                                <div class="achievement">
                                    <p class="mainText">
										<?= $text_thumbnail['text_thumbnail']['bold_text'] ?>
                                    </p>

                                    <p class="textBlock">
                                        <span><?= $text_thumbnail['text_thumbnail']['upper_text'] ?></span>
                                        <span> <?= $text_thumbnail['text_thumbnail']['down_text'] ?></span>
                                    </p>

                                </div>
							<?php endforeach; ?>
                        </div>
					<?php } ?>
					<?php if ( ! empty( $second_section['booking_link'] ) ) { ?>
                        <a class="btn _main"
                           target="_blank"
                           href="<?= $second_section['booking_link']['url'] ?>"><?= $second_section['booking_link']['title'] ?? '' ?> </a>
					<?php } ?>


                </section>
			<?php } ?>
			<?php if ( ! empty( $text_contents ) ) { ?>
                <section class="text_contents">
                    <div class="headline"><?= $text_contents['title'] ?></div>
					<?php if ( ! empty( $text_contents['text_sections'] ) ) { ?>
                        <div class="section__items">
							<?php foreach ( $text_contents['text_sections'] as $text_section ): ?>
                                <div class="section__item">
									<?php if ( ! empty( $text_section['text_section']['title'] ) ) { ?>
                                        <div class="title"><?= $text_section['text_section']['title'] ?></div>
									<?php } ?>
									<?php if ( ! empty( $text_section['text_section']['description'] ) ) { ?>
                                        <div class="description"><?= $text_section['text_section']['description'] ?></div>
									<?php } ?>
                                </div>
							<?php endforeach; ?>
                        </div>
					<?php } ?>
                </section>
			<?php } ?>
			<?php if ( ! empty( $services_sections ) ) { ?>
                <section class="services_sections">
                    <div class="section__top">
						<?php if ( ! empty( $services_sections['title'] ) ) { ?>
                            <div class="headline"><?= $services_sections['title'] ?></div>
						<?php } ?>
						<?php if ( ! empty( $services_sections['link'] ) ) { ?>
                            <a class="btn _violetOutline"
                               href="<?= $services_sections['link']['url'] ?>"><?= $services_sections['link']['title'] ?> </a>
						<?php } ?>
                    </div>
					<?php if ( ! empty( $services_sections['services'] ) ) { ?>
                        <div class="services">
							<?php foreach ( $services_sections['services'] as $service ): ?>
                                <div class="service">
									<?php if ( ! empty( $service['service']['image'] ) ) { ?>
                                        <img class="image" src="<?= $service['service']['image']['url'] ?>"
                                             alt="picture">
									<?php } ?>
									<?php if ( ! empty( $service['service']['title'] ) ) { ?>
                                        <span class="title"><?= $service['service']['title'] ?></span>
									<?php } ?>
                                </div>
							<?php endforeach; ?>
                        </div>
					<?php } ?>
                </section>
			<?php } ?>
			<?php if ( ! empty( $case_slider ) ) { ?>
                <section class="case_slider">
                    <div id="services_slider" class="slider__container">
                        <div class="headline"><?= $case_slider['title'] ?></div>
                        <div class="swiper-wrapper mainSlider">
							<?php foreach ( $case_slider['slider'] as $slide ): ?>
                                <div class="swiper-slide">
                                    <img class="image" src="<?= $slide['slide']['main_image']['url'] ?>"
                                         alt="picture">
                                    <div class="slide__content">
                                        <div class="content__text">
                                            <p class="slide__title"><?= $slide['slide']['title'] ?></p>
											<?php if ( ! empty( $slide['slide']['meta_tags'] ) ) { ?>
                                                <div class="metaTags">
													<?php foreach ( $slide['slide']['meta_tags'] as $meta_tag ): ?>
                                                        <p class="metaTag"><?= $meta_tag['title'] ?></p>
													<?php endforeach; ?>
                                                </div>
											<?php } ?>
                                        </div>
										<?php if ( ! empty( $case_slider['link'] ) ) { ?>
                                            <a class="btn _main" target="_blank"
                                               href="<?= $case_slider['link']['url'] ?>"><?= $case_slider['link']['title'] ?? '' ?> </a>
										<?php } ?>
                                    </div>
                                </div>

							<?php endforeach; ?>
                        </div>
                        <div class="slider__navigation">
                            <div id="slider-thumbnail" class="thumbnails">
                                <div class="swiper-wrapper">
									<?php foreach ( $case_slider['slider'] as $slide ): ?>
										<?php if ( empty( $slide['slide']['image_thumbnail'] ) ) : ?>
                                            <div class="swiper-slide __empty"></div>
										<?php else : ?>
                                            <div class="swiper-slide">
                                                <img class="image"
                                                     src="<?= $slide['slide']['image_thumbnail']['url'] ?>"
                                                     alt="picture">
                                                <p class="slide__title"><?= $slide['slide']['title'] ?></p>
                                            </div>
										<?php endif; ?>
									<?php endforeach; ?>
                                </div>
                            </div>
                            <div class="navigation__wrapper">
                                <div class="slider__arrows">
                                    <button class="slider__arrows__prev">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)"
                                                    stroke="#9359F2"
                                                    stroke-width="2"></circle>
                                            <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#9359F2"
                                                  stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <button class="slider__arrows__next">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="30" cy="30" r="29" stroke="#9359F2" stroke-width="2"/>
                                            <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435" stroke="#9359F2"
                                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div id="swiper-pagination" class="swiper-pagination"></div>
                                <div id="numberSlides" class="slider__index"></div>
                            </div>
                        </div>
                    </div>
                </section>
			<?php } ?>
			<?php if ( ( ! empty( $prices_section ) ) || ( ! empty( $contact_form_section ) ) ) { ?>
                <section class="prices_section">
                    <div class="prices_section__wrapper">
                        <div class="section__item">
                            <div class="headline"><?= $prices_section['title'] ?></div>
                        </div>
                        <div class="form_price__wrapper">
                            <div class="prices__items">
								<?php if ( ! empty( $prices_section['text_items'] ) ) { ?>
									<?php foreach ( $prices_section['text_items'] as $slide ): ?>
                                        <div class="prices__item">
                                            <h5 class="title"><?= $slide['text_item']['title'] ?></h5>
                                            <div class="description"><?= $slide['text_item']['description'] ?></div>
                                        </div>
									<?php endforeach; ?>
								<?php } ?>
                            </div>


							<?php if ( ! empty( $contact_form_section['text']['title'] ) ) { ?>
                                <p class="contact_form_title"><?= $contact_form_section['text']['title'] ?></p>
							<?php } ?>


                            <div class="contact_form_section">
								<?php if ( ! empty( $contact_form_section['text'] ) ) { ?>
                                    <div class="form__section">
                                        <div class="description"><?= $contact_form_section['text']['description'] ?></div>
                                    </div>
								<?php } ?>
								<?php if ( ! empty( $contact_form_section['code_of_contact_form'] ) ) { ?>
                                    <div class="form__section"><?= do_shortcode( $contact_form_section['code_of_contact_form'] ) ?></div>
								<?php } ?>
								<?php if ( ! empty( $contact_form_section['image'] ) ) { ?>
                                    <img class="image" src="<?= $contact_form_section['image']['url'] ?>" alt="picture">
								<?php } ?>
                            </div>
                        </div>

                    </div>

                </section>
			<?php } ?>
			<?php if ( ! empty( $customer_opinions_section ) ) { ?>
                <section class="customer_opinions_section" id="opinions__slider">
                    <div class="headline">
						<?php if ( ! empty( $customer_opinions_section['title'] ) ) { ?>
                            <p><?= $customer_opinions_section['title'] ?></p>
						<?php } ?>
						<?php if ( ! empty( $customer_opinions_section['opinion_items'] ) ) { ?>
                            <div class="slider__arrows">
                                <button class="slider__arrows__prev" tabindex="0" aria-label="Previous slide"
                                        aria-controls="swiper-wrapper-252d380d1a00fa7d">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)" stroke="#9359F2"
                                                stroke-width="2"></circle>
                                        <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#9359F2"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="slider__arrows__next" tabindex="0" aria-label="Next slide"
                                        aria-controls="swiper-wrapper-252d380d1a00fa7d">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="30" cy="30" r="29" stroke="#9359F2" stroke-width="2"></circle>
                                        <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435" stroke="#9359F2"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
						<?php } ?>
                    </div>
					<?php if ( ! empty( $customer_opinions_section['opinion_items'] ) ) { ?>
                        <div class="opinions swiper-wrapper">
							<?php foreach ( $customer_opinions_section['opinion_items'] as $slide ): ?>
                                <div class="swiper-slide">
                                    <p class="opinion__author"><?= $slide['opinion_item']['author'] ?></p>
                                    <div class="opinion__text"><?= $slide['opinion_item']['text'] ?></div>
                                    <div class="icon">
                                        <svg width="230" height="215" viewBox="0 0 230 215" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_bd_592_5899)">
                                                <path d="M103.26 100.14C104.287 98.6733 105.313 96.9867 106.34 95.08C107.367 93.1733 108.173 91.34 108.76 89.58C109.493 87.6733 110.08 85.9133 110.52 84.3C110.96 82.6867 111.18 81.3667 111.18 80.34C111.18 79.6067 111.033 78.9467 110.74 78.36C110.447 77.6267 109.713 77.26 108.54 77.26C105.313 77.26 102.893 75.94 101.28 73.3C99.8133 70.66 99.08 67.6533 99.08 64.28C99.08 60.32 100.253 57.0933 102.6 54.6C105.093 52.1067 108.613 50.86 113.16 50.86C124.013 50.86 129.44 56.0667 129.44 66.48C129.44 69.4133 128.927 72.5667 127.9 75.94C127.02 79.3133 125.773 82.76 124.16 86.28C122.693 89.6533 121.007 92.88 119.1 95.96C117.193 99.04 115.36 101.753 113.6 104.1L103.26 100.14ZM64.54 100.14C65.5667 98.6733 66.5933 96.9867 67.62 95.08C68.6467 93.1733 69.4533 91.34 70.04 89.58C70.7733 87.6733 71.36 85.9133 71.8 84.3C72.24 82.6867 72.46 81.3667 72.46 80.34C72.46 79.6067 72.3133 78.9467 72.02 78.36C71.7267 77.6267 70.9933 77.26 69.82 77.26C66.5933 77.26 64.1733 75.94 62.56 73.3C61.0933 70.66 60.36 67.6533 60.36 64.28C60.36 60.32 61.5333 57.0933 63.88 54.6C66.3733 52.1067 69.8933 50.86 74.44 50.86C85.2933 50.86 90.72 56.0667 90.72 66.48C90.72 69.4133 90.2067 72.5667 89.18 75.94C88.3 79.3133 87.0533 82.76 85.44 86.28C83.9733 89.6533 82.2867 92.88 80.38 95.96C78.4733 99.04 76.64 101.753 74.88 104.1L64.54 100.14Z"
                                                      fill="#9359F2"/>
                                            </g>
                                            <defs>
                                                <filter id="filter0_bd_592_5899" x="0.360352" y="0.860352"
                                                        width="229.08" height="213.239" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
                                                    <feComposite in2="SourceAlpha" operator="in"
                                                                 result="effect1_backgroundBlur_592_5899"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                                   result="hardAlpha"/>
                                                    <feOffset dx="20" dy="30"/>
                                                    <feGaussianBlur stdDeviation="40"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
                                                    <feBlend mode="normal" in2="effect1_backgroundBlur_592_5899"
                                                             result="effect2_dropShadow_592_5899"/>
                                                    <feBlend mode="normal" in="SourceGraphic"
                                                             in2="effect2_dropShadow_592_5899" result="shape"/>
                                                </filter>
                                            </defs>
                                        </svg>


                                    </div>

                                </div>
							<?php endforeach; ?>
                        </div>
					<?php } ?>
                </section>
			<?php } ?>
			<?php if ( ! empty( $quiz_section ) ) { ?>
                <section class="quiz_section" id="quiz__section">
					<?php if ( ! empty( $quiz_section['main_page'] ) ) { ?>
                        <div class="main_slide" id="main_slide">
                            <div class="text__container">
                                <p class="title"><?= $quiz_section['main_page']['title'] ?></p>
                                <div class="description"><?= $quiz_section['main_page']['description'] ?></div>
                                <button id="startQuiz"
                                        class="btn main"><?= $quiz_section['main_page']['text_for_start_button'] ?></button>
                            </div>

                        </div>
					<?php } ?>
                    <div class="slider__wrapper" id="quiz__slider">
                        <button class="slider__arrows__prev">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#9359F2"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <button class="slider__arrows__next">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435" stroke="#9359F2"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="swiper-wrapper quiz__slider">
							<?php foreach ( array_chunk( $quiz_section['questions'], 2, true ) as $index => $pair ): ?>
                                <div class="swiper-slide">
                                    <div class="content__wrapper">
										<?php foreach ( $pair as $number => $item ): ?>

                                            <div class="question__wrapper">
                                                <p class="question">
                                                    <span class="count"><?= $number + 1 ?>/<?= count( $quiz_section['questions'] ) ?>:</span><span id="question_<?= $number + 1 ?>"><?= $item['question']['title'] ?></span>
                                                </p>
                                                <ul class="answers">
													<?php foreach ( $item['question']['answers'] as $answer ):
                                                        $id= $item['question']['email_name_parameter'].$answer['title'];
                                                        $id = trim($id);
														$id = str_replace(' ','-', $id);
                                                        ?>

                                                        <li >
                                                            <input hidden type="radio" id="<?=$id?>" name="<?=trim($item['question']['email_name_parameter'])?>" value="<?= $answer['title'] ?>">
                                                            <label class="answer" for="<?=$id?>"><?= $answer['title'] ?></label>
                                                        </li>
													<?php endforeach; ?>
                                                </ul>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>
							<?php endforeach; ?>
							<?php if ( ! empty( $quiz_section['step_with_contact_form'] ) ) { ?>
                                <div class="swiper-slide __lastStep">
                                    <div class="content__wrapper">
                                        <div class="slide__text">
                                            <p class="title"><?= $quiz_section['step_with_contact_form']['title'] ?></p>
                                            <div class="shortDescription"><?= $quiz_section['step_with_contact_form']['short_description'] ?></div>
                                            <div class="longDescription"><?= $quiz_section['step_with_contact_form']['long_description'] ?></div>
                                        </div>
                                        <div class="slide__form">
											<?= do_shortcode( $quiz_section['step_with_contact_form']['shortcode_to_contact_form'] ) ?>
                                        </div>
                                    </div>
                                </div>
							<?php } ?>
                        </div>
                    </div>
					<?php if ( ! empty( $quiz_section['last_step_with_information'] ) ) { ?>
                        <div id="thanks__information" class="thanks__information">
                            <div class="context">
                                <p class="title"><?= $quiz_section['last_step_with_information']['title'] ?></p>
                            </div>
                        </div>
					<?php } ?>
                </section>


			<?php } ?>
			<?php if ( ! empty( $video_slider ) ) { ?>
                <section class="video_slider">
                    <div class="wrapper__slider" id="video_slider">
                        <div class="slider__arrows">
                            <button class="slider__arrows__prev">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)" stroke="#9359F2"
                                            stroke-width="2"></circle>
                                    <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#9359F2"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <button class="slider__arrows__next">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="29" stroke="#9359F2" stroke-width="2"/>
                                    <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435" stroke="#9359F2"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="swiper-wrapper">
							<?php foreach ( $video_slider as $slide ): ?>
                                <div class="swiper-slide">
                                    <video src="<?= $slide['video_slide']['url'] ?>" muted></video>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>

                </section>
			<?php } ?>
        </div>
    </main>
<?php get_footer(); ?>