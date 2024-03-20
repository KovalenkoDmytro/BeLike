<?php
$post_thumbnails = get_field( 'thumbnail' );
?>
<article class="blog__item" id="post-<?php the_ID(); ?>">
    <a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark">
		<?php if ( ! empty( $post_thumbnails['image'] ) ) { ?>
            <img class="image" src="<?= $post_thumbnails['image']['url'] ?>"
                 alt="<?= $post_thumbnails['image']['title'] ?>"/>
		<?php } ?>
		<?php if ( ! empty( $post_thumbnails['title'] ) ) { ?>
            <h2 class="mainLine"><?= $post_thumbnails['title'] ?></h2>
		<?php } ?>
		<?php if ( ! empty( $post_thumbnails['short_description'] ) ) { ?>
            <div class="description"><?= $post_thumbnails['short_description'] ?></div>
		<?php } ?>
    </a>
</article>
