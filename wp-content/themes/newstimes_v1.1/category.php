<?php get_header(); ?>
  <div id="headgal"> 

 <style>.entry p{margin-bottom: 2px !important}#content .post {padding-top: 0px !important;} #colorcontentwrap img{float:none !important;}#colorcontent_left{width:260px !important;}
 #content{width:665px !important;}#colorcontentwrap p{font-size:12px !important}#colorcontentwrap4{  border-bottom: 1px solid #DDDDDD;display: block !important;padding:10px 7px 10px 0 !important;width:640px;}
 #featbig{border:none !important;} #featbig p{font-size:13px !important}.home-post-wrap{width:213px !important} 
 #colorcontentwrap4 img{float:left;margin: 0 9px 2px 0;padding:6px;border:1px solid #d2d2d2;background:#fff;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;box-shadow:0 0 2px #e5e5e5;-moz-box-shadow:0 0 2px #e5e5e5;-webkit-box-shadow:0 0 2px #e5e5e5;}
 #colorcontentwrap4 h2{font:20px "georgia",Arial,Sans-Serif !important}  #meta_authorl{float:left} #meta_authorr{float:right} .meta_author{height:18px;font-family:Arial;font-size:8pt;color:#555;margin-bottom:0px;}

 </style>

<div id="main-content"> <div id="inside">

 <div id="content">	

 <div id="homepost">


 

 

<div id="feat">
<div id="featbig">
 	
		<div class="featbig">		
		 <?php $count = 0; ?>
    	<?php if (have_posts()) : ?>
        <?php while (have_posts() && $count < get_option('posts_per_page') && (($count < '1'))) : the_post(); $count++; ?>
            	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
           <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featbigimg'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:418px; height:215px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = ''; $m_image_def = get_template_directory_uri() . '/images/nobigimg.png';
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 418 . '&amp;h=' . 215 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

	    <?php the_content_limit('350'); ?> 
        <div id="featbig-author" style="margin-top:5px;">by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s'), get_the_author() ); ?>"><?php the_author(); ?></a> | <?php _e("Published", "nt"); ?> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' '; ?> <?php _e("ago", "nt"); ?></div>
		<?php endwhile; ?>
       <div class="cb"></div>
		</div>   
		 </div>
         
 
    
             
</div>
 <?php if(get_option('ad6ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad6ok')!="no"):?><center style="margin-top: 8px;"><?php echo get_option('ad6'); ?></center><?php endif?>
    <div id="coloredblock4">  
               <div id="colorcontentblock">
<?php while (have_posts() && $count < get_option('posts_per_page') && (($count < '10'))) : the_post(); $count++; ?>
          		
    <div id="colorcontentwrap4"> 
   	
			         
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('colorcontentblock4'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:205px; height:120px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = ''; $m_image_def = get_template_directory_uri() . '/images/nobigimg.png';
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 205 . '&amp;h=' . 120 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             
          <div class="meta_author">    <div id="meta_authorl"> <a href="#comments"><?php _e("By", "nt"); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s'), get_the_author() ); ?>"><?php the_author(); ?> </a>   <?php _e("On", "nt"); ?> <?php the_time('l, F jS, Y') ?>
  </div>  
    <div id="meta_authorr"> 
   <?php comments_number('0 Comments','1 Comment','2 Comments'); ?></a> </b>   
    </div>  <div class="cb"></div>
       </div>   
               <h2>   <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2> 
              
      <?php the_content_limit('210'); ?>    
		 <div class="cb"></div>
		</div> 
    	<?php endwhile; endif; ?>   
      <div class="cb"></div>
    </div> 
    </div>


</div>
 <?php if(get_option('ad7ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad7ok')!="no"):?><center style="margin-top: 8px;"><?php echo get_option('ad7'); ?></center><?php endif?>
<div id="pag">

	<div id="pagl"><?php previous_posts_link() ?></div>

	<div id="pagr"><?php next_posts_link() ?></div>

    <div class="cb"></div>

</div>  

 </div>   </div>   </div>  

 <?php include(TEMPLATEPATH . '/sidebar-archive.php'); ?>  

<?php get_footer(); ?>