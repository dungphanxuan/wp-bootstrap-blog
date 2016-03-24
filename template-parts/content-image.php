<article id="post-<?php the_ID();?>" <?php post_class(); ?> >
	<!-- First Blog Post -->
	<h2>
		<a href="<?php the_permalink(); ?>"><?=the_title()?></a>
	</h2>
	<p class="lead">
		by <a href="<?=get_author_posts_url( get_the_author_meta('ID') )?>"><?=get_the_author()?></a>
	</p>

	<p><span class="glyphicon glyphicon-time"></span> Posted on <?=get_the_date()?> at <?=get_the_time('g:i A')?></p>
	<hr>
	<!--Show post Thumbnail-->
	<?php if(has_post_thumbnail()) :?>
	<a href="<?=get_permalink()?>">
		<?php bootstrap_thumbnail('post-thumbnail'); ?></a>
	<hr>
	<?php endif ?>
	<hr>
	<p><?php the_excerpt(); ?></p>
	<a class="btn btn-primary" href="<?=get_permalink()?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

	<hr>
</article>