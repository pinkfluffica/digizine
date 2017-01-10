<?php get_header() ?>
	<div class="content-area grid">
		<div class="main-content column two-thirds">
			<div class="posts grid">
				<?php
				 if (have_posts()) : 
				 	while (have_posts()) : 
				 		the_post();
				 		 ?>
				<div class="column two-thirds post-content">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p><?php the_excerpt(); ?></p>
					<p class="comment-number"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>

				</div>
				<div class="column one-third post-image">
					<?php the_post_thumbnail($size='thumbnail'); ?>
				</div>
				<hr />
				<?php endwhile;
						endif;
				 ?>
			</div>
		</div>
		<div class="column one-third sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>


</body>
</html>