<?php
    $tags__string = get_post_meta( get_the_ID(), 'singPost_thumbnail_tags', true ) ?? '';
    $tags         = explode( '/', $tags__string );
?>

<article class="project" id="post-<?php the_ID(); ?>">
	<?php if ( ! empty( $tags ) ) { ?>
        <ul class="project__tags">
			<?php foreach ( $tags as $tag ): ?>
                <li><?= $tag ?></li>
			<?php endforeach; ?>
        </ul>
	<?php } ?>
	<?php if ( ! empty( get_post_meta( get_the_ID(), 'singPost_thumbnail_title', true ) ) ) { ?>
        <h2 class="project__title"><?= get_post_meta( get_the_ID(), 'singPost_thumbnail_title', true ) ?></h2>
	<?php } ?>
	<?php if ( ! empty( get_post_meta( get_the_ID(), 'singPost_thumbnail_picture', true ) ) ) { ?>
        <a class="project__link" href="<?= esc_url( get_permalink() ) ?>">
            <img class="project__thumbnail"
                 src="<?= get_post_meta( get_the_ID(), 'singPost_thumbnail_picture', true ) ?>"
                 alt="picture"/>
        </a>
	<?php } ?>
</article>
