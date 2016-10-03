    </div>
    <div id="aside">
     <?php if(get_option('ad8ok')!="yes"):?><?php endif?> 
    <?php if(get_option('ad8ok')!="no"):?><?php echo get_option('ad8'); ?><div style="margin-top: 10px;"></div><?php endif?>
<div id="mrtindiva">
<ul class="tabs">
    <li><a href="#tab1"><?php _e("Comments", "nt"); ?></a></li>
    <li><a href="#tab2"><?php _e("Categories", "nt"); ?></a></li>
        <li><a href="#tab3"><?php _e("Tags", "nt"); ?></a></li>
</ul>
<div class="tab_container">
    <div id="tab1" class="tab_content">

      <?php

$number=5; // number of recent comments desired

$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT $number");

?>

<?php

if ( $comments ) : foreach ( (array) $comments as $comment) :

echo  '<li class="">' . sprintf(__('%1$s on %2$s'), get_comment_author_link(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';

endforeach; endif;?> 
    </div>
    <div id="tab2" class="tab_content">
      <div class="section widget_categories2">
			<ul>
				<?php wp_list_categories('title_li=&hierarchical=0'); ?> 
			</ul>
		</div>
    </div>

     <div id="tab3" class="tab_content">

   <?php wp_tag_cloud( $args ); ?>

    </div>

</div>  </div>

			<div id="sidebar">
<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Archive Sidebar') ) : ?>
<?php endif; ?>
			 <?php include("minibars.php"); ?>	</div> 


		</div> 