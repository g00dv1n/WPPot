<?php /* Template Name: Archive Page */ ?>  <?php get_header(); ?>

  <div id="headgal">
  <div id="inside"> 

 <div id="content">	

<br />

 <style>.zc a{color:#444}#thearchivelist a{color:#555} #thearchivelist{ width: 200px;float:left; }   #thearchivelist ul li{ list-style:none; } #thearchivelist ul h4{ font-size:16px !important;padding: 0 3px 0 0 !important;margin: 0px 0 5px 0 !important;border-bottom: 1px solid #ddd }</style>



<div id="thearchivelist">







<ul><h4><?php _e("Pages", "nt"); ?>:</h4>



<?php wp_list_pages('title_li='); ?>



</ul>



<br />



<ul><h4><?php _e("By Month", "nt"); ?>:</h4>



<?php wp_get_archives('type=monthly'); ?>



</ul>



<br />



<ul><h4><?php _e("By Category", "nt"); ?>:</h4>



<?php wp_list_categories('sort_column=name&title_li='); ?>



</ul><br />



</div>



<div style="width: 430px;float:right" class="zc">



<h4 style="margin: 0 0 9px 0 !important;font-size: 17px !important;border-bottom: 1px solid #ddd;padding: 0 0px 0 0 !important;"><?php _e("Some users like to browse Article Archives", "nt"); ?></h4>



<ul style="padding-left: 13px !important;">



<?php wp_get_archives('type=postbypost&limit=45'); ?>



</ul>



</div> <div class="clr"></div>



 </div>   </div>   



 <?php include(TEMPLATEPATH . '/sidebar-archive.php'); ?>  



<?php get_footer(); ?>