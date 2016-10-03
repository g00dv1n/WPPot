<?php get_header(); ?>
 <div id="headgal">
 
<div id="main-content"> 

 <div id="content" style="padding-right:0 !important;">  <div id="homepost">	



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div id="datemeta">
<div id="datemeta_l"><b><?php _e("Published On", "nt"); ?>:</b> <?php the_time('D, M jS, Y') ?> </div>
<div id="datemeta_r"><?php the_category(' / ') ?> | <?php _e("By", "nt"); ?> <b><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s'), get_the_author() ); ?>"><?php the_author(); ?> </a></b> <?php edit_post_link('Edit', ' <span>&middot;</span> ', ''); ?>   </div>
<div class="cb"></div>
</div>




		<div class="post">



			<h2>  <?php the_title(); ?></h2>
 


              
 <?php if(get_option('ad4ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad4ok')!="no"):?><center><?php echo get_option('ad4'); ?></center><?php endif?>
 
			<div class="entry">

 <?php if(get_option('shareok')!="no"):?>
<div id="metabox"><div id="metabox_share"><?php _e("Share This", "nt"); ?></div>
 <div class="share">
<ul> <li><a href="http://delicious.com/save" onclick="window.open('http://delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url='+encodeURIComponent('<?php the_permalink() ?>')+'&amp;title='+encodeURIComponent('<?php the_title() ?>'),'delicious', 'toolbar=no,width=550,height=550'); return false;"> 
<img src="<?php bloginfo('template_directory'); ?>/icon/delicious.png" alt="Add to Delicious" border="0" /></a></li>  
<li><a href="javascript:var d=document,f='http://www.facebook.com/share',l=d.location,e=encodeURIComponent,p='.php?src=bm&amp;v=4&amp;i=1245532349&amp;u='+e(l.href)+'&amp;t='+e(d.title);1;try{if (!/^(.*\.)?facebook\.[^.]*$/.test(l.host))throw(0);share_internal_bookmarklet(p)}catch(z) {a=function() {if (!window.open(f+'r'+p,'sharer','toolbar=0,status=0,resizable=1,width=626,height=436'))l.href=f+p};if (/Firefox/.test(navigator.userAgent))setTimeout(a,0);else{a()}}void(0)" onclick="return wait_for_load(this, event, function() { return false });" id="share_bookmark" title="Share on Facebook">
<img src="<?php bloginfo('template_directory'); ?>/icon/facebook.png" border="0" /></a>
 </li>
<li><a href="http://friendfeed.com/?url=<?php the_permalink() ?>&amp;title=<?php the_title() ?>" target="_blank">
<img src="<?php bloginfo('template_directory'); ?>/icon/friendfeed.png" alt="Share on FriendFeed" border="0" /></a> </li>
<li><a href='javascript:(function(){var a=window,b=document,c=encodeURIComponent,d=a.open("http://www.google.com/bookmarks/mark?op=edit&amp;output=popup&amp;bkmk="+c(b.location)+"&amp;title="+c(b.title),"bkmk_popup","left="+((a.screenX||a.screenLeft)+10)+",top="+((a.screenY||a.screenTop)+10)+",height=420px,width=550px,resizable=1,alwaysRaised=1");a.setTimeout(function(){d.focus()},300)})();'> 
 <img src="<?php bloginfo('template_directory'); ?>/icon/google.png" border="0" /> </a>
   </li>
<li><a href="http://digg.com/submit?phase=2&url=<?php the_permalink();?>&title=<?php the_title();?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/icon/digg.png" alt="Digg" /></a></li>
 <li><a href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/icon/twitter.png" alt="" /></a></li>
<li><a href="http://www.reddit.com/submit" onclick="window.location = 'http://www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> 
<img src="<?php bloginfo('template_directory'); ?>/icon/reddit.png" alt="submit to reddit" border="0" /> </a>
</li>

<li><a href="javascript:location.href='http://www.myspace.com/Modules/PostTo/Pages/?c='+encodeURIComponent(location.href)+'&amp;t='+encodeURIComponent(document.title)"> 
<img src="<?php bloginfo('template_directory'); ?>/icon/myspace.png" border="0" /> </a>
</li>

<li><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/icon/stumbleupon.png" border="0" /></a></li>

<li><a href="javascript:void(document.location='http://technorati.com/faves?sub=favthis&amp;add='+escape(document.location))"><img src="<?php bloginfo('template_directory'); ?>/icon/technorati.png" border="0" /></a></li>

<li style="margin-left:9px;"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/subscribe_rss.png" border="0" /></a></li>
</ul> </div>
<div class="ptags"><span class="ptags_heading"><?php _e("Tags", "nt"); ?></span> 
<div style="margin-top:5px;text-align:center;"><?php the_tags('',''); ?></div>
</div>
</div><?php endif?><?php if(get_option('shareok')!="yes"):?><?php endif?>
			  <?php the_content(); ?>



			</div>
 	</div>



	<?php endwhile; else: ?>



		<h2><?php _e("Not Found", "nt"); ?></h2>



		<p><?php _e("Sorry, but you are looking for something that isn't here.", "nt"); ?></p>



<?php endif; ?>

	<center style="font-weight: bold;"><?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?></center>		
 

 <?php if(get_option('authorok')!="yes"):?><?php endif?> 



    <?php if(get_option('authorok')!="no"):?>  <style>input, textarea{}



#authorarea{  padding-left: 8px; margin:10px 0;  width: 635px; } #authorarea h3{  border-bottom: 1px solid #B0B0B0; color: #333333; font-family: georgia; font-size: 19px; font-weight: normal;  line-height: 22px; margin:0 4px 5px; padding-left: 8px;}
#authorarea h3 a{text-decoration:none; color:#333; font-weight:bold} #authorarea img{margin:0 5px;  float:left; border:1px solid #ddd; width:40px; height:40px;}
#authorarea p{color:#333; margin:0} #authorarea p a{color:#333} .authorinfo{ }

</style>


 <?php if(get_option('ad5ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad5ok')!="no"):?><center><?php echo get_option('ad5'); ?></center><?php endif?>
<div id="authorarea">

<h3><?php _e("About the Author", "nt"); ?></h3>

<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '40' ); }?>



<div class="authorinfo">



<p><b><?php the_author_posts_link(); ?></b> - <?php the_author_description(); ?></p>



</div>



</div>  <?php endif?>  



 

<div id="related" class="clearfix">

 


<div id="relatednews"><div id="relatednewsh2"><?php _e("Related News", "nt"); ?></div>
<div style="float:right;height:19px;margin-right:10px;">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
<!-- AddThis Button END -->
</div>
<div class="cb"></div></div>

	<?php
		$categories = get_the_category($post->ID);
		if ($categories) { $category_ids = array();
		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'showposts'=> get_option('relatednum'),
		'caller_get_posts'=>1
		);
		$my_query = new WP_Query($args);		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); 
	?>

		<div class="related">

 	<div class="relatedpost">
    
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('relatedimg'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/nothumbnail.png" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 150 . '&amp;h=' . 125 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             
  
				<h3><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>



				 



			</div>







		</div> 


	



	<?php endwhile; } wp_reset_query(); } ?>
<div class="cb"></div>







</div> 



 	

<div id="comment_wrapper">

		<?php comments_template(); ?>
</div>




</div> </div><div>

 </div>   </div>  



 <?php include(TEMPLATEPATH . '/sidebar-post.php'); ?>  



<?php get_footer(); ?>