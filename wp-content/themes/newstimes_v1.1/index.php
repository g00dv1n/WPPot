<?php get_header(); ?>	

<div id="main-content"> 

<div id="featwrapper">
<div id="feat">
<div id="featbig">
		<div class="featbig">		
			<?php query_posts('showposts=1&cat='.get_option('mainnewscat').'&offset=0'); if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
            	<h2 style="min-height:58px;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
              <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featbigimg'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:418px; height:215px;" /> </a><?php } ?> 
           <?php endif?> 
   
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = ''; 
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 418 . '&amp;h=' . 215 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 
	    <?php the_content_limit('200'); ?> 
        <div id="featbig-author"><?php _e("by", "nt"); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s'), get_the_author() ); ?>"><?php the_author(); ?></a> | <?php _e("Published", "nt"); ?> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?><?php _e("ago", "nt"); ?></div>
		 <?php endwhile; ?>	<?php else : ?> 	<?php endif; ?> 
       <div id="featsmall">
       <?php query_posts('showposts=2&cat='.get_option('mainnewscat').'&offset=1'); if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
            	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		 <?php endwhile; ?>	<?php else : ?> 	<?php endif; ?> 
       </div>  
       <div class="cb"></div>
		</div>   
		 </div>

    <div id="left-insidebar">    
      <?php $otherFeaturedPost = new WP_Query();$otherFeaturedPost->query('showposts=3&cat='.get_option('mainnewscat').'&offset=3'); ?> 
      <?php while ($otherFeaturedPost->have_posts()) : $otherFeaturedPost->the_post(); ?> 
      <div class="home-post-wrap">
        <div class="thumbnail-div" style="">                    
        
           
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink() ?>"><span class="header"><?php the_post_thumbnail( 'featgalimg' ); ?></span>      </a>
             <?php } else { ?> 
             <a href="<?php the_permalink() ?>"><span class="header"> <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:216px; height:125px;" /></span></a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = ''; 
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 216 . '&amp;h=' . 125 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

        
         
        </div> 
      <h2><a href="<?php the_permalink(); ?>" class="the2title" title="<?php the_title(); ?>" rel="bookmark">
          <?php the_title(); ?></a>                        </h2>  
      </div>  

      <?php endwhile; ?>   
    </div> 
    
             
</div>
<div id="featgal">

   <div id="slider-wrapper">
        
   		<div id="example">
		
			<div id="slides">
				<div class="slides_container">
				
                  <?php $otherFeaturedPost = new WP_Query();$otherFeaturedPost->query('showposts=8&cat='.get_option('featslidecat').'&offset=0'); ?> 
                  <?php while ($otherFeaturedPost->have_posts()) : $otherFeaturedPost->the_post(); ?> 
                	<div class="slide">
                                    
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featgalsliderimg'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:298px; height:287px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = ''; 
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 298 . '&amp;h=' . 287 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             
            

    		<a href="<?php the_permalink() ?>">	<div style="padding:1px 6px;"> <h2 style="margin-bottom:1px;"><?php the_title(); ?></h2>
                      <div id="featgalsliderp"><?php the_content_limit(130); ?></div> </div>
					</a>
					</div>
                  <?php endwhile; ?> 
					
				
                
                </div>
				<a href="#" class="prev"><img src="<?php bloginfo('template_directory'); ?>/images/prev.png" width="65" height="10" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="<?php bloginfo('template_directory'); ?>/images/next.png" width="37" height="9" alt="Arrow Next"></a>
			</div>
		 
		</div>
            
        </div>

</div>
<div class="cb"></div>
</div>
  <?php if(get_option('ad1ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad1ok')!="no"):?><center style="margin-top: 12px;"><?php echo get_option('ad1'); ?></center><?php endif?>
 <div id="colorcontent">
    <div id="colorcontent_left"> 
    
    <div id="colorcontentblock">
    <?php query_posts('showposts=1&cat='.of_get_option('example_select_categories').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <div id="colorcontenth3" class="custom1">
            <a href="<?php bloginfo('url'); ?>/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>" title="<?php echo $category[0]->category_nicename; ?>">

<?php $category = get_the_category(); echo $category[0]->category_description; ?> <?php echo of_get_option('example_text', 'Category Name'); ?></a>

                
 
</div>

    	<div id="colorcontentwrap">		
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                                
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock1'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:146px; height:85px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 146 . '&amp;h=' . 85 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

            <?php the_content_limit(175); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    		 <?php query_posts('showposts=2&cat='.of_get_option('example_select_categories').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap">		
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                
                                
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock1'); ?></a>
             <?php } else { ?> 
      <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:146px; height:85px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 146 . '&amp;h=' . 85 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

            <?php the_content_limit(173); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div>
    
    </div>
    <div id="colorcontent_right"> 
    <div id="colorcontent_right_1"> 
    
         <div id="colorcontentblock">
    <?php query_posts('showposts=1&cat='.of_get_option('block2cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
                
     <div id="colorcontenth3" class="custom2">
    <a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block2txt', 'Category Name'); ?></a></div>
               
                                
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock2'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:384px; height:217px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 384 . '&amp;h=' . 217 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

                
                
    <div id="colorcontentwrap2">	
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php the_content_limit(175); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    		 <?php query_posts('showposts=1&cat='.of_get_option('block2cat').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap2">		
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			 
            <?php the_content_limit(173); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div>

    
     </div>
    <div id="colorcontent_right_2">
    
             <div id="colorcontentblock">
     <?php query_posts('showposts=1&cat='.of_get_option('block3cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
 <div id="colorcontenth3_small" class="custom3"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block3txt', 'Category Name'); ?></a></div>
            		
    <div id="colorcontentwrap3">	
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock3'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:173px; height:137px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 173 . '&amp;h=' . 137 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

            <?php the_content_limit(120); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    		 <?php query_posts('showposts=1&cat='.of_get_option('block3cat').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap3">		
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                
                                
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock3a'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:173px; height:75px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 173 . '&amp;h=' . 75 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

                <?php the_content_limit(110); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div>

    
      </div>
    <div class="cb"></div>
    </div>
    <div class="cb"></div>
 </div>
 
  <?php if(get_option('ad2ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad2ok')!="no"):?><div style="margin: 3px 0px;"><center><?php echo get_option('ad2'); ?></center></div><?php endif?>
 
   <div id="content">
   <div id="coloredblock4">  
               <div id="colorcontentblock">
           <?php query_posts('showposts=1&cat='.of_get_option('block4cat').'&offset=0'); if (have_posts()) : ?> 
 	<?php while (have_posts()) : the_post(); ?>    
                    <div id="colorcontenth3" class="custom4"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block4txt', 'Category Name'); ?></a></div>

	<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  

    <?php query_posts('showposts=3&cat='.of_get_option('block4cat').'&offset=0'); if (have_posts()) : ?> 
 	<?php while (have_posts()) : the_post(); ?>
	          
  	         
    <div id="colorcontentwrap4">	
				<h2>
         
                         
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock4'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:205px; height:120px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 205 . '&amp;h=' . 120 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

         
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,16); ?>...
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
      
    </div> 
    </div>
    
     <?php if(get_option('ad3ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad3ok')!="no"):?><div style="margin:5px 3px 0px 3px;"><center><?php echo get_option('ad3'); ?></center></div><?php endif?>
    
    <div id="coloredblock567">
       <div id="coloredblock5"> 
    
      <div id="colorcontentblock">
    <?php query_posts('showposts=1&cat='.of_get_option('block5cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    <div id="colorcontenth3_small" class="custom5"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block5txt', 'Category Name'); ?></a></div>
          		
    <div id="colorcontentwrap5">	
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
               
                                    
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock5'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:220px; height:288px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 220 . '&amp;h=' . 288 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

            <?php the_content_limit(60); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    		 <?php query_posts('showposts=6&cat='.of_get_option('block5cat').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap5">		
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo substr(the_title('', '', FALSE), 0, 32); ?>..</a></h3>
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div>
           
       </div>
       <div id="coloredblock67"> 
       <div id="coloredblock6"> 
       
         <div id="colorcontentblock">
         <?php query_posts('showposts=1&cat='.of_get_option('block6cat').'&offset=0'); if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
    <div id="colorcontenth3_small" class="custom6"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block6txt', 'Category Name'); ?></a></div>
    	<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?> 
        
        
   <div id="colorcontentwrap6_l"><?php query_posts('showposts=1&cat='.of_get_option('block6cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
          		
    <div id="colorcontentwrap6">	
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                 
                                    
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock6'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:220px; height:146px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 220 . '&amp;h=' . 146 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

                    
            <?php the_content_limit(107); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  </div> 
              <div id="colorcontentwrap6_r">
    		 <?php query_posts('showposts=2&cat='.of_get_option('block6cat').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap6_a">		
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,21); ?>..
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  </div> <div class="cb"></div>
    </div>
       
       </div>
       <div id="coloredblock7">
       
              
         <div id="colorcontentblock">
         <?php query_posts('showposts=1&cat='.of_get_option('block7cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    <div id="colorcontenth3_small" class="custom7"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block7txt', 'Category Name'); ?></a></div>
 <?php endwhile; ?>	<?php else : ?> 	<?php endif; ?> 
 
   <div id="colorcontentwrap7_l"><?php query_posts('showposts=1&cat='.of_get_option('block7cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
          		
    <div id="colorcontentwrap7">	
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                 
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock6'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:220px; height:146px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = ''; 
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 220 . '&amp;h=' . 146 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

            <?php the_content_limit(107); ?> 
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  </div> 
              <div id="colorcontentwrap7_r">
    		 <?php query_posts('showposts=2&cat='.of_get_option('block7cat').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap7_a">		
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,21); ?>..
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  </div> <div class="cb"></div>
    </div>
       
        
       </div>
        </div>
        <div class="cb"></div>
        </div>
 
 <div id="coloredblock89">
 
  <div id="colorcontentblock" class="colorcontentwrap8_left">
       <div id="colorcontentwrap8line">
              
    <?php query_posts('showposts=1&cat='.of_get_option('block8cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <div id="colorcontenth3_small" class="custom8"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block8txt', 'Category Name'); ?></a></div>
        
    	<div id="colorcontentwrap8">		
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                
                
                                
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock8'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:320px; height:190px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 320 . '&amp;h=' . 190 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

                
                
		 
           <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,21); ?>..
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    		 <?php query_posts('showposts=3&cat='.of_get_option('block8cat').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap8">		
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div> </div> 
  <div id="colorcontentblock" class="colorcontentwrap9_right">
 
    <?php query_posts('showposts=1&cat='.of_get_option('block9cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <div id="colorcontenth3_small" class="custom9"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block9txt', 'Category Name'); ?></a></div>
        
    	<div id="colorcontentwrap9">		
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			 
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock9'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:320px; height:190px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 320 . '&amp;h=' . 190 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

            <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,21); ?>..
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    		 <?php query_posts('showposts=3&cat='.of_get_option('block9cat').'&offset=1'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
    	<div id="colorcontentwrap9">		
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
   </div>
    <div class="cb"></div>
 
 </div>
 
 
 <div id="coloredblock10">
 <div id="colorcontentblock" class="colorcontentwrap10">
    <?php query_posts('showposts=1&cat='.of_get_option('block10cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <div id="colorcontenth3_small" class="custom10"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block10txt', 'Category Name'); ?></a></div>

    	<div id="colorcontentwrap10">	
                         
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock10'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:210px; height:146px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 210 . '&amp;h=' . 146 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
           <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,21); ?>..
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div> 
    
     <div id="colorcontentblock" class="colorcontentwrap10">
    <?php query_posts('showposts=1&cat='.of_get_option('block11cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <div id="colorcontenth3_small" class="custom11"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block11txt', 'Category Name'); ?></a></div>

    	<div id="colorcontentwrap10">		
        <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock10'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:210px; height:146px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 210 . '&amp;h=' . 146 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
           <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,21); ?>..
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div> 
    
     <div id="colorcontentblock" class="colorcontentwrap10" style="margin-right: 0px !important;">
    <?php query_posts('showposts=1&cat='.of_get_option('block12cat').'&offset=0'); if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <div id="colorcontenth3_small" class="custom12"><a href="<?php bloginfo('url'); ?>/category/<?php $category = get_the_category(); echo $category[0]->category_nicename; ?>"><?php echo of_get_option('block12txt', 'Category Name'); ?></a></div>

    	<div id="colorcontentwrap10">	
        <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock10'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:210px; height:146px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 210 . '&amp;h=' . 146 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				
           <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,21); ?>..
		 <div class="cb"></div>
		</div> 
    		<?php endwhile; ?>	<?php else : ?> 	<?php endif; ?>  
    </div> 
 </div>
 
 

    
  </div>  

   <?php include(TEMPLATEPATH . '/sidebar.php'); ?>  

    <?php get_footer(); ?>