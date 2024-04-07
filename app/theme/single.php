<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dk
 */

get_header( 'posts' );
$components = get_field( 'post_components' );

?>
    <main class="single-post__page">
        <div class="content_wrapper">
            <section class="section __main">
                <div class="content_wrapper">
                    <div class="section__context">
						<?php if ( ! empty( $components['main_section']['main_title'] ) ) { ?>
                            <h1 class="context__title"><?= $components['main_section']['main_title'] ?></h1>
						<?php } ?>

						<?php if ( ! empty( $components['main_section']['subtitle'] ) ) { ?>
                            <p class="context__subTitle"><?= $components['main_section']['subtitle'] ?></p>
						<?php } ?>

						<?php if ( ! empty( $components['main_section']['description'] ) ) { ?>
                            <div class="context__description"><?= $components['main_section']['description'] ?></div>
						<?php } ?>
                    </div>
                </div>
            </section>
			<?php if ( ! empty( $components['image_first'] ) ) { ?>
                <section class="section __image">
                    <img class="section__image" src="<?= $components['image_first']['url'] ?>"
                         alt="<?= $components['image_first']['title'] ?>"/>
                </section>
			<?php } ?>
			<?php if ( ! empty( $components['text_sections_first'] ) ) { ?>
				<?php foreach ( $components['text_sections_first'] as $text_section ): ?>
                    <section class="section __text">
                        <p class="section__title"><?= $text_section['text_section']['title'] ?></p>
						<?php if ( ! empty( $text_section['text_section']['text'] ) ) { ?>
                            <div class="context__description">
								<?= $text_section['text_section']['text'] ?>
                            </div>
						<?php } ?>
                    </section>

				<?php endforeach; ?>
			<?php } ?>
			<?php if ( ! empty( $components['image_second'] ) ) { ?>
                <section class="section __image">
                    <img class="section__image" src="<?= $components['image_second']['url'] ?>"
                         alt="<?= $components['image_second']['title'] ?>"/>
                </section>
			<?php } ?>
			<?php if ( ! empty( $components['text_sections_second'] ) ) { ?>
				<?php foreach ( $components['text_sections_second'] as $text_section ): ?>
                    <section class="section __text">
                        <p class="section__title"><?= $text_section['text_section']['title'] ?></p>
						<?php if ( ! empty( $text_section['text_section']['text'] ) ) { ?>
                            <div class="context__description">
								<?= $text_section['text_section']['text'] ?>
                            </div>
						<?php } ?>
                    </section>

				<?php endforeach; ?>
			<?php } ?>
        </div>
    </main>
<?php
get_footer();
