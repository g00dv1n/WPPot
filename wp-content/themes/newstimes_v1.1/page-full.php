<?php /* Template Name: Full Width Page */ ?> <?php get_header(); ?>

 <div id="headgal">  <div id="content" style="width: 100% !important;">	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post" style="padding: 13px 0 !important;">

			<h2>  <?php the_title(); ?></h2>

		 

			<div class="entry" style="width: 980px !important;z-index:155">

			  <?php the_content(); ?>

			</div>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<div class="ptags"><?php the_tags('Tags: ', ', ', ''); ?></div>

		</div>

	<?php endwhile; else: ?>

		<h2>Not Found</h2>

		<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

 

	 

 </div>  

 </div>

<?php get_footer(); ?>