<?php get_header() ?>
<?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); ?>


	<div class="single-post">
		<article>
			<?php the_post_thumbnail($size='large'); ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</article>

		<div class="next-previous nav">
			<ul>
				<li><?php previous_post_link(); ?></li>
				<li><?php next_post_link(); ?></li>
			</ul>
		</div>

		<div class="comments">
			<h1>Comments</h1>
			<div><?php comments_template(); ?></div>
		</div>
		
		<?php endwhile;?>

		<?php endif; ?>
		


	</div>

</body>
</html>