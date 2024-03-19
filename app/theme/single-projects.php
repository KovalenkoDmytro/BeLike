<?php

/**
 * Template Name: ProjectSinglePost
 * Template Post Type: post
 *
 */
get_header('posts');

?>
    <main class="projectSinglePost__page">
        <div class="content_wrapper">
            <?php while (have_posts()) :the_post(); ?>
                <section class="section __main">
                    <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_thumbnail_mainPicture', true))) { ?>
                        <img class="section__image"
                             src="<?= get_post_meta(get_the_ID(), 'singPost_thumbnail_mainPicture', true) ?>"
                             alt="picture"/>
                    <?php } ?>
                    <div class="content_wrapper">
                        <div class="section__context">
                            <h1 class="context__title"><?= get_the_title() ?></h1>
                            <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_mainSection_subTitle', true))) { ?>
                                <p class="context__subTitle"><?= get_post_meta(get_the_ID(), 'singPost_mainSection_subTitle', true) ?></p>
                            <?php } ?>

                            <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_mainSection_description', true))) { ?>
                                <div class="context__description">
                                    <?= get_post_meta(get_the_ID(), 'singPost_mainSection_description', true) ?>
                                </div>
                            <?php } ?>
	                        <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_mainSection_second_subTitle', true))) { ?>
                                <p class="context__subTitle __second"><?= get_post_meta(get_the_ID(), 'singPost_mainSection_second_subTitle', true) ?></p>
	                        <?php } ?>

	                        <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_mainSection_second_description', true))) { ?>
                                <div class="context__description ">
			                        <?= get_post_meta(get_the_ID(), 'singPost_mainSection_second_description', true) ?>
                                </div>
	                        <?php } ?>
                        </div>
                    </div>
                </section>

                <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_secondSection_title', true))) { ?>
                    <section class="section __text">
                        <p class="section__title"><?= get_post_meta(get_the_ID(), 'singPost_secondSection_title', true) ?></p>
                        <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_secondSection_description', true))) { ?>
                            <div class="context__description">
                                <?= get_post_meta(get_the_ID(), 'singPost_secondSection_description', true) ?>
                            </div>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_thirdSection_title', true))) { ?>
                    <section class="section __text">
                        <p class="section__title"><?= get_post_meta(get_the_ID(), 'singPost_thirdSection_title', true) ?></p>
                        <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_thirdSection_description', true))) { ?>
                            <div class="context__description">
                                <?= get_post_meta(get_the_ID(), 'singPost_thirdSection_description', true) ?>
                            </div>
                        <?php } ?>
                    </section>
                <?php } ?>

                <?php $slider = get_post_meta(get_the_ID(), 'ale_gallery_id', true) ?>
                <?php if (!empty($slider)) { ?>
                    <section  class="section __slider">
                        <div class="wrapper__slider" id="swiper">
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

                            <div class="swiper-wrapper">
                            <?php foreach ($slider as $slide): ?>
                            <div class="swiper-slide">
                                <img src="<?= wp_get_attachment_image_url($slide, 'full')?>" alt="picture">
                            </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                    <!-- Slider main container -->


                <?php } ?>

                <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_fourthSection_title', true))) { ?>
                    <section class="section __text">
                        <p class="section__title"><?= get_post_meta(get_the_ID(), 'singPost_fourthSection_title', true) ?></p>
                        <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_fourthSection_description', true))) { ?>
                            <div class="context__description">
                                <?= get_post_meta(get_the_ID(), 'singPost_fourthSection_description', true) ?>
                            </div>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_fifthSection_title', true))) { ?>
                    <section class="section __text">
                        <p class="section__title"><?= get_post_meta(get_the_ID(), 'singPost_fifthSection_title', true) ?></p>
                        <?php if (!empty(get_post_meta(get_the_ID(), 'singPost_fifthSection_description', true))) { ?>
                            <div class="context__description">
                                <?= get_post_meta(get_the_ID(), 'singPost_fifthSection_description', true) ?>
                            </div>
                        <?php } ?>
                    </section>
                <?php } ?>
            <?php endwhile; ?>
        </div>
    </main>
<?php
get_footer(); ?>