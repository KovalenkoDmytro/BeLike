<?php

/**
 * Template name: About Template
 *
 */
get_header(  );
$components = get_field( 'about_us_components' );

?>
    <main class="about__page">
        <div class="content_wrapper">
			<?php if ( ! empty( $components['main_section'] ) ) { ?>
                <section class="main">
					<?php if ( ! empty( $components['main_section']['title'] ) ) { ?>
                        <h1 class="mainLine"><?= $components['main_section']['title'] ?></h1>
					<?php } ?>
					<?php if ( ! empty( $components['main_section']['description'] ) ) { ?>
                        <div class="description">
							<?= $components['main_section']['description'] ?>
                        </div>
					<?php } ?>
                </section>
			<?php } ?>
			<?php if ( ! empty( $components['text_first_section'] ) ) { ?>
                <section class="text_first_section __text">
                    <div class="section__item">
						<?php if ( ! empty( $components['text_first_section']['title'] ) ) { ?>
                            <p class="headline"><?= $components['text_first_section']['title'] ?></p>
						<?php } ?>
                    </div>
                    <div class="section__item">
						<?php if ( ! empty( $components['text_first_section']['short_description'] ) ) { ?>
                            <div class="description"><?= $components['text_first_section']['short_description'] ?></div>
						<?php } ?>
                        <div class="description__items">
							<?php foreach ( $components['text_first_section']['description'] as $description ): ?>
                                <div class="description__item">
									<?php if ( ! empty( $description['title'] ) ) { ?>
                                        <p class="title"><?= $description['title'] ?></p>
									<?php } ?>
									<?php if ( ! empty( $description['description'] ) ) { ?>
                                        <div class="text"><?= $description['description'] ?></div>
									<?php } ?>
                                </div>
							<?php endforeach; ?>
                        </div>

                    </div>
                </section>
			<?php } ?>
			<?php if ( ! empty( $components['text_second_section'] ) ) { ?>
                <section class="text_second_section __text">
                    <div class="section__item">
						<?php if ( ! empty( $components['text_second_section']['title'] ) ) { ?>
                            <p class="headline"><?= $components['text_second_section']['title'] ?></p>
						<?php } ?>
                    </div>
                    <div class="section__item">
						<?php if ( ! empty( $components['text_second_section']['short_description'] ) ) { ?>
                            <div class="description"><?= $components['text_second_section']['short_description'] ?></div>
						<?php } ?>

                        <div class="text_thumbnails">
							<?php foreach ( $components['text_second_section']['text_thumbnail'] as $thumbnail ): ?>
                                <div class="text_thumbnail">
									<?php if ( ! empty( $thumbnail['title'] ) ) { ?>
                                        <p class="title"><?= $thumbnail['title'] ?></p>
									<?php } ?>
									<?php if ( ! empty( $thumbnail['description'] ) ) { ?>
                                        <div class="text"><?= $thumbnail['description'] ?></div>
									<?php } ?>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>

                </section>
			<?php } ?>
			<?php if ( ! empty( $components['text_third_section'] ) ) { ?>
                <section class="text_third_section __text">
                    <div class="section__item">
						<?php if ( ! empty( $components['text_third_section']['title'] ) ) { ?>
                            <p class="headline"><?= $components['text_third_section']['title'] ?></p>
						<?php } ?>
                    </div>
                    <div class="section__item">
						<?php if ( ! empty( $components['text_third_section']['short_description'] ) ) { ?>
                            <div class="description"><?= $components['text_third_section']['short_description'] ?></div>
						<?php } ?>
                        <div class="description__items">
							<?php foreach ( $components['text_third_section']['description'] as $description ): ?>
                                <div class="description__item">
									<?php if ( ! empty( $description['title'] ) ) { ?>
                                        <p class="title"><?= $description['title'] ?></p>
									<?php } ?>
									<?php if ( ! empty( $description['description'] ) ) { ?>
                                        <div class="text"><?= $description['description'] ?></div>
									<?php } ?>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </section>
			<?php } ?>
			<?php if ( ! empty( $components['text_fourth_section_'] ) ) { ?>
                <section class="text_fourth_section __text">
                    <div class="section__item">
						<?php if ( ! empty( $components['text_fourth_section_']['title'] ) ) { ?>
                            <p class="headline"><?= $components['text_fourth_section_']['title'] ?></p>
						<?php } ?>
                    </div>
                    <div class="section__item">
						<?php if ( ! empty( $components['text_fourth_section_']['short_description'] ) ) { ?>
                            <div class="description"><?= $components['text_fourth_section_']['short_description'] ?></div>
						<?php } ?>
                        <div class="description__items">
							<?php foreach ( $components['text_fourth_section_']['description'] as $description ): ?>
                                <div class="description__item">
									<?php if ( ! empty( $description['title'] ) ) { ?>
                                        <p class="title"><?= $description['title'] ?></p>
									<?php } ?>
									<?php if ( ! empty( $description['description'] ) ) { ?>
                                        <div class="text"><?= $description['description'] ?></div>
									<?php } ?>
                                </div>
							<?php endforeach; ?>
                        </div>

                    </div>
                </section>
			<?php } ?>
			<?php if ( ! empty( $components['contact_form'] ) ) { ?>
                <section class="contact_form_section">
                    <div class="form__section __image">
		                <?php if ( ! empty( $components['contact_form']['image'] ) ) { ?>
                            <img src="<?= $components['contact_form']['image']['url'] ?>" alt="picture">
		                <?php } ?>
                    </div>

					<?php if ( ! empty( $components['contact_form']['description'] ) ) { ?>
                        <div class="form__section">
                            <div class="description"><?= $components['contact_form']['description'] ?></div>
                        </div>
					<?php } ?>
					<?php if ( ! empty( $components['contact_form']['code_of_contact_form'] ) ) { ?>
                        <div class="form__section"><?= do_shortcode( $components['contact_form']['code_of_contact_form'] ) ?></div>
					<?php } ?>

                </section>
			<?php } ?>
        </div>
    </main>
<?php get_footer(); ?>