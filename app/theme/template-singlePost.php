<?php

/**
 * Template Name: SinglePost
 * Template Post Type: post
 *
 */
get_header();
?>
    <main>
        <?php  get_breadcrumbs() ?>
		<?php while ( have_posts() ) :the_post(); ?>
            <section>
                <h1><?= get_the_title() ?></h1>
                <div class="date">
					<?= get_the_date() ?>
					<?php comments_number() ?>
					<?= get_the_author() ?>
                </div>
                <h3>Category: <?php the_category(', ');?> / Tags <?php the_tags('',', ', ''); ?></h3>
                <img src="<?= get_post_meta( get_the_ID(), 'singPost_Image', true ) ?>" alt="<?= get_the_title() ?>">
                <div class="description">
					<?= get_post_meta( get_the_ID(), 'singPost_description', true ) ?>
                </div>

            </section>
		<?php endwhile; ?>
    </main>
<?php
get_footer(); ?>