</div></div></div><div id="footer">
<div id="footer1">     <div id="footerwrapper1"> <div id="fsidebar1">     
    <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_option('logo'); ?>" alt="<?php echo get_option('logoalt'); ?>" /></a>  </div>
    <div id="fsidebar2"> <div style="margin-top:12px;float:left"><?php get_search_form(); ?></div>  
 <div id="btt">   <a href="#top"> </a>  </div> 	</div>    <div class="cb"></div>  
<center><ul id="fnav">  
<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'third', 'container_id' => 'fotnav', 'container_class' => 'ddsmoothmenu1', 'fallback_cb'=>'secondarymenu') );?>
 	</ul></center>  
     <div style="clear: both;"> </div>     </div>  </div>
 <div id="footer2">  <div id="footerwrapper2"> 
      <div id="fotbot">
      <div class="fotlogoleft"> 
        <div class="fotcopy">
    <?php echo get_option('copyrightxt'); ?> 
        </div>     		  </div>
	   	<div class="fotlogoright">
	    	</div>    	<div class="cb"></div>
   </div>  </div>   	</div></div>
<?php wp_footer(); ?>
<?php echo get_option('fscript'); ?>	  <!-- Shared on http://www.MafiaShare.net --></body> </html>