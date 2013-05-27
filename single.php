
<?php get_header(); ?>
<body>
	<div id='wrapper'>

		<div id='post_wrapper'>

		<?php if (have_posts()) : ?>
		   	<?php while (have_posts()) : the_post(); ?>

		    	<div class='post_item'>
		 			<div class='the_title'><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></div>
		 			<div class='post_data'>posted at <?php the_modified_time();?> on <?php the_modified_date(); ?> by <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" target="_blank"><?php the_author_meta( 'display_name' ); ?></a></div>
					<div class='the_content'><?php the_content(); ?></div>
					<div class='post_data'>
						<?php if (has_category()) : ?> 
							Categories: <?php the_category(', '); ?><br />
						<?php endif; ?>
						<?php if (has_tag()) : ?>
							Tags: <?php the_tags(', '); ?><br />
						<?php endif; ?>
				<a name="comments"></a>
				
				</div id='comments'>
					<?php comments_template(); ?>
				</div>
				
		   	<?php endwhile; ?>

	   	<?php else : ?>
			<div class='the_title'>Not Found</div>
			<div class='the_content'>Sorry, but you are looking for something that isn't here.</div>

		<?php endif;?>

			<span style='float:left;'><?php next_posts_link('&laquo; Previous entries');?></span>
			<span style='float:right;'><?php previous_posts_link('Next entries &raquo;');?></span>
		
		</div>
		<?php get_sidebar(); ?>

		<div id="header_div"></div>

	</div>

	<?php get_footer(); ?>