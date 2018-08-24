<?php
/**
 * Template part for displaying posts.
 *
 * @package majolika
 */
?>
<article id="post-<?php the_ID();?>" class="col" <?php post_class('is-loop');?>>
<div class="post">
	<h2 class="post-title"><a href="<?=the_permalink();?>"><?=the_title();?></a></h2>
	<p><?=get_post_custom_values('zdroj')[0]?></p>
	<div class="post-image">
		<?=the_post_thumbnail('large');?>
	</div>
	<div class="post-content">
		<?=the_content();?>
	</div>
</div>
</article><!-- #post-## -->
