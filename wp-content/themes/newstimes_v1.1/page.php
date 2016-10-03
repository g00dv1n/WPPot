<?php get_header(); ?>  
  <div id="headgal">

<div id="main-content"> <div id="inside"> 

 <div id="content">	

<div id="homepost"> 

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">

			<h2>  <?php the_title(); ?></h2>

			<div class="pmetasingle"> <?php _e("Posted By", "nt"); ?> <b><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s'), get_the_author() ); ?>"><?php the_author(); ?> </a></b>  

            	       <?php _e("On", "nt"); ?> <?php the_time('l, F jS, Y') ?> <?php _e("With", "nt"); ?> <a href="#comments"> <?php comments_number('0 Comments','1 Comment','2 Comments'); ?></a>  

   <?php edit_post_link('Edit', ' <span>&middot;</span> ', ''); ?>                 </div>

			<div class="entry">  <?php the_content(); ?> </div>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<div class="ptags"><?php the_tags('Tags: ', ', ', ''); ?></div>

		</div>	<?php endwhile; else: ?>

		<h2><?php _e("Not Found", "nt"); ?></h2>	<p><?php _e("Sorry, but you are looking for something that isn't here.", "nt"); ?></p><?php endif; ?>

  

		<?php comments_template(); ?>

 </div>  </div>  </div>  </div>

 <?php include(TEMPLATEPATH . '/sidebar-archive.php'); ?>  

<?php get_footer(); ?>