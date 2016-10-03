<?php get_header(); ?>



   

 

<div id="main-content" style="margin-top:9px !important"> 

 <div id="content" style="padding-right:0 !important;">  <div id="homepost">	





<div style="font-family:'Droid Serif',Georgia,Sans-serif; font-size: 20px;margin-top: 8px;line-height:27px">



<center><b><?php _e("*404* - Not Found", "nt"); ?> </b></center><br />



<?php _e("Sorry, we can't find the content you're looking for at this URL. Please navigate from the navigation menu on top or try searching below..", "nt"); ?><br /><br />

<center> 





  <div class="fsearchbg1" style="margin: 0px !important;"> 


<form method="get" id="footersearch1" action="<?php bloginfo('url'); ?>/">
<input type="text" name="s" value="<?php _e(" Search News - Type Keyword & Hit Enter", "nt"); ?>" onblur="if(this.value=='') this.value='<?php _e(" Search News - Type Keyword & Hit Enter", "nt"); ?>';" onfocus="if(this.value=='<?php _e(" Search News - Type Keyword & Hit Enter", "nt"); ?>') this.value='';" id="s2" />
			<input type="submit" value=" " id="searchsubmit" />
		   </form>


       </div></center>







</div>
</div><div>

 </div>   </div>  
 <?php include(TEMPLATEPATH . '/sidebar-post.php'); ?>  



<?php get_footer(); ?>