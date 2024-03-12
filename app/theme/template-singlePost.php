<?php

/**
 * Template Name: ProjectSinglePost
 * Template Post Type: post
 *
 */
get_header();

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
                    <section id="toInvoke" class="projects__slider swiper">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-wrapper">
                        <?php foreach ($slider as $slide): ?>
                            <img class="swiper-slide" src="<?= wp_get_attachment_image_url($slide, 'full')?>" alt="picture">
                        <?php endforeach; ?>
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