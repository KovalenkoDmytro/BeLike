<article id="post-<?php the_ID(); ?>">
    <h2><a href="<?= esc_url( get_permalink() ) ?>"><?= get_the_title() ?></a></h2>
	<?php $post_tags = wp_get_post_tags( get_the_ID() ); ?>
    <ul class="post__tags">
		<?php foreach ( $post_tags as $tag ): ?>
            <li><a href="<?= get_site_url() ?>/?tag=<?= $tag->slug ?>" rel="tag"><?= $tag->name ?></a></li>
		<?php endforeach; ?>
    </ul>
    <img src="<?= get_post_meta( get_the_ID(), 'singPost_Image', true ) ?>" alt="<?= get_the_title() ?>">
    <div class="description">

        <?php the_excerpt()?>
		<?= get_post_meta( get_the_ID(), 'singPost_description', true ) ?>
    </div>
    <div class="date">
        <?= get_the_date()?>
        <?php comments_number()?>
    </div>
</article>
