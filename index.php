<?php get_header(); ?>

	<div id='body_wrapper'>
		<div id='post_wrapper'>
		<?php if (have_posts()) : ?>
	   	<?php while (have_posts()) : the_post(); ?>

	    	<div class='post_item'>
	 			<div class='the_title'><a href='<?php the_permalink(); ?>' target='_blank'><?php the_title(); ?></a></div>
	 			<div class='post_data'><em>posted at <?php the_modified_time();?> on <?php the_modified_date(); ?> by <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" target="_blank"><?php the_author_meta( 'display_name' ); ?></a></em></div>
				<div class='the_content'><?php the_content('Read more... '); ?></div>
			</div>

	   	<?php endwhile; ?>
		<?php endif;?>
		</div>
		<?php get_sidebar(); ?>
	</div>


<?php get_footer(); ?>