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

$second_section            = get_field( 'second_section' );
$text_slider               = get_field( 'text_slider' );
$services_slider           = get_field( 'services_slider' );
$prices_section            = get_field( 'prices_section' );
$contact_form_section      = get_field( 'contact_form' );
$customer_opinions_section = get_field( 'customer_testimonials' );
$quiz_section              = get_field( 'quiz' );
$video_slider              = get_field( 'video_slider');
$our_cases             = get_field( 'our_cases');
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
						<?php if ( ! empty( get_post_meta( get_the_ID(), 'homePage_background', true ) ) ) { ?>
                            <img class="phone" src="<?= get_post_meta( get_the_ID(), 'homePage_background', true ) ?>"
                                 alt="phone background"/>
						<?php } ?>
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
                <section class="secondSection">
                    <div class="section__item">
                        <div class="headline"><?= $second_section['title'] ?></div>
						<?php if ( ! empty( $second_section['video_link'] ) ) { ?>
                            <video  muted autoplay loop class="video" src="<?= $second_section['video_link'] ?>"></video>
						<?php } ?>
                    </div>
                    <div class="section__item">
						<?php if ( ! empty( $second_section['description'] ) ) { ?>
                            <div class="item__description">
								<?= $second_section['description'] ?>
                            </div>
						<?php } ?>
                    </div>
                </section>
			<?php } ?>
			<?php if ( ! empty( $services_slider ) ) { ?>
                <section class="services_slider" id="services_slider">
                    <div class="swiper-wrapper mainSlider">
						<?php foreach ( $services_slider['slider'] as $slide ): ?>
                            <div class="swiper-slide">
                                <img class="image" src="<?= $slide['slide']['main_image']['url'] ?>" alt="picture">
                                <div class="slide__content">
                                    <div class="content__text">
                                        <p class="slide__title"><?= $slide['slide']['main_title'] ?></p>
                                        <div class="slide__description"><?= $slide['slide']['description'] ?></div>
                                    </div>
									<?php if ( ! empty( $services_slider['slides_button'] ) ) { ?>
                                        <a class="btn _whiteOutline" target="_blank"
                                           href="<?= $services_slider['slides_button']['url'] ?>"><?= $services_slider['slides_button']['title'] ?? '' ?> </a>
									<?php } ?>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                    <div class="slider__navigation">
                        <div id="slider-thumbnail" class="thumbnails">
                            <div class="swiper-wrapper">
								<?php foreach ( $services_slider['slider'] as $slide ): ?>
                                    <div class="swiper-slide">
                                        <img class="image" src="<?= $slide['slide']['image_thumbnail']['url'] ?>"
                                             alt="picture">
                                        <p class="slide__title"><?= $slide['slide']['text_thumbnail_'] ?></p>
                                    </div>
								<?php endforeach; ?>
                            </div>
                        </div>
                        <div class="navigation__wrapper">
                            <div class="slider__arrows">
                                <button class="slider__arrows__prev">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)" stroke="#fff"
                                                stroke-width="2"></circle>
                                        <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#fff"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="slider__arrows__next">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="30" cy="30" r="29" stroke="#fff" stroke-width="2"/>
                                        <path d="M29.5898 25.4805L33.6994 30.412L29.5898 35.3435" stroke="#fff"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div id="swiper-pagination" class="swiper-pagination"></div>
                            <div id="numberSlides" class="slider__index">0</div>
                        </div>
                    </div>
                </section>
			<?php } ?>
			<?php if ( ! empty( $text_slider ) ) { ?>
                <section class="text__slider">
                    <div class="slider__content"  id="text_slider">
                        <div class="headline">
                            <p><?= $text_slider['title'] ?></p>
                            <div class="slider__arrows">
                                <button class="slider__arrows__prev">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)" stroke="#9359F2"
                                                stroke-width="2"/>
                                        <path d="M30.4102 34.5195L26.3006 29.588L30.4102 24.6565" stroke="#9359F2"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
                        </div>
                        <div class="swiper-wrapper">
		                    <?php foreach ( $text_slider['slider'] as $slide ): ?>
                                <div class="swiper-slide">
                                    <p class="slide__title"><?= $slide['slide']['title'] ?></p>
                                    <div class="slide__text"><?= $slide['slide']['text'] ?></div>
                                </div>
		                    <?php endforeach; ?>
                        </div>
                    </div>

                </section>
			<?php } ?>
            <section class="projects">
                <div class="headline"><?= $our_cases['title'] ?></div>
                <div class="projects__items">
					<?php while ( $projects_home_posts->have_posts() ) : $projects_home_posts->the_post();
						get_template_part( 'template-parts/post-item', get_post_type() );
					endwhile; ?>
                </div>
                <?php if ( ! empty( $projects_home_posts->have_posts() ) ) { ?>
                    <a class="btn _violetOutline" href="<?= $our_cases['link_to_projects_page']['url'] ?>"><?= $our_cases['link_to_projects_page']['title'] ?> </a>
                <?php } ?>
            </section>
			<?php if ( ! empty( $prices_section ) ) { ?>
                <section class="prices_section">
                    <div class="section__item">
                        <div class="headline"><?= $prices_section['title'] ?></div>
                    </div>
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
                </section>
			<?php } ?>
			<?php if ( ! empty( $contact_form_section ) ) { ?>
                <section class="contact_form_section">
					<?php if ( ! empty( $contact_form_section['text'] ) ) { ?>
                        <div class="form__section">
                            <p class="title"><?= $contact_form_section['text']['title'] ?></p>
                            <div class="description"><?= $contact_form_section['text']['description'] ?></div>
                        </div>
					<?php } ?>
					<?php if ( ! empty( $contact_form_section['code_of_contact_form'] ) ) { ?>
                        <div class="form__section"><?= do_shortcode( $contact_form_section['code_of_contact_form'] ) ?></div>
					<?php } ?>
                    <div class="form__section __image">
						<?php if ( ! empty( $contact_form_section['image'] ) ) { ?>
                            <img src="<?= $contact_form_section['image']['url'] ?>" alt="picture">
						<?php } ?>
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
                                </div>
							<?php endforeach; ?>
                        </div>
					<?php } ?>
                </section>
			<?php } ?>
			<?php if ( ! empty( $quiz_section ) ) { ?>
                <section class="quiz_section" id="quiz__section" >
					<?php if ( ! empty( $quiz_section['main_page'] ) ) { ?>
                        <div class="main_slide" id="main_slide">
                            <div class="text__container">
                                <p class="title"><?= $quiz_section['main_page']['title'] ?></p>
                                <div class="description"><?= $quiz_section['main_page']['description'] ?></div>
                                <button id="startQuiz" class="btn _violetOutline"><?= $quiz_section['main_page']['text_for_start_button'] ?></button>
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
				                    <?php foreach ( $pair as $number => $item ): ?>
                                        <div class="question__wrapper">
                                            <p class="question">
                                                <span class="count"><?= $number + 1 ?>/<?= count( $quiz_section['questions'] ) ?>:</span><span><?= $item['question']['title'] ?></span>
                                            </p>
                                            <ul class="answers">
							                    <?php foreach ( $item['question']['answers'] as $answer ): ?>
                                                    <li class="answer"><?= $answer['title'] ?></li>
							                    <?php endforeach; ?>
                                            </ul>
                                        </div>
				                    <?php endforeach; ?>
                                </div>
		                    <?php endforeach; ?>
		                    <?php if ( ! empty( $quiz_section['step_with_contact_form'] ) ) { ?>
                                <div class="swiper-slide __lastStep">
                                    <div class="slide__text">
                                        <p class="title"><?= $quiz_section['step_with_contact_form']['title'] ?></p>
                                        <div class="shortDescription"><?= $quiz_section['step_with_contact_form']['short_description'] ?></div>
                                        <div class="longDescription"><?= $quiz_section['step_with_contact_form']['long_description'] ?></div>
                                    </div>
                                    <div class="slide__form">
					                    <?= do_shortcode($quiz_section['step_with_contact_form']['shortcode_to_contact_form']) ?>
                                    </div>
                                </div>
		                    <?php } ?>
                        </div>
                    </div>
                    <?php if ( ! empty( $quiz_section['last_step_with_information'] ) ) { ?>
                        <div id="thanks__information" class="thanks__information">
                            <div class="context">
                                <p class="title"><?=$quiz_section['last_step_with_information']['title']?></p>
                                <div class="description"><?=$quiz_section['last_step_with_information']['description']?></div>
                            </div>

                        </div>
	                <?php } ?>
                </section>
			<?php } ?>
	        <?php if ( ! empty( $video_slider ) ) { ?>
                <section class="video_slider" >
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
                                        <video src="<?=$slide['video_slide']['url'] ?>" muted></video>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                    </div>

                </section>
	        <?php } ?>
        </div>
    </main>
<?php get_footer(); ?>