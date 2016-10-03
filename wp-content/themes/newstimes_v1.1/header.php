 <!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>	<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php if ( is_archive() ) { _e('Category '); } wp_title('-', true, 'right'); bloginfo('name'); ?></title> 
<?php if ( is_single() ) { ?><?php } else { ?><meta name="description" content="<?php echo get_option('metadesc'); ?>" /><?php } ?>
<meta name="keywords" content="<?php echo get_option('metakey'); ?>"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
    <link rel="shortcut icon" href="<?php echo get_option('favicon'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_option('favicon'); ?>" type="image/x-icon"/>
    <meta name="generator" content="Magazine3 Framework Version 3.2" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
     <script type="text/javascript"> $(document).ready(function() { $(".tab_content").hide(); $("ul.tabs li:first").addClass("active").show(); $(".tab_content:first").show(); $("ul.tabs li").click(function() { $("ul.tabs li").removeClass("active"); $(this).addClass("active"); $(".tab_content").hide(); var activeTab = $(this).find("a").attr("href"); $(activeTab).fadeIn(); return false;	}); }); </script>     
<script type="text/javascript">  $(document).ready(function () {  createTicker();  }); function createTicker(){ var tickerLIs = $("#header3-1-left-ticker ul").children();  tickerItems = new Array(); tickerLIs.each(function(el) { tickerItems.push( jQuery(this).html() ); });                                                       
	i = 0                                                     
	rotateTicker(); }  function rotateTicker(){   if( i == tickerItems.length ){    	  i = 0;   	}                                                         
      tickerText = tickerItems[i];  c = 0;  typetext();     setTimeout( "rotateTicker()", 5000 );                     
	i++;    }   var isInTag = false;  function typetext() { var thisChar = tickerText.substr(c, 1);  if( thisChar == '<' ){ isInTag = true; } if( thisChar == '>' ){ isInTag = false; }  $('#header3-1-left-ticker').html("&nbsp;" + tickerText.substr(0, c++));   
	if(c < tickerText.length+1) if( isInTag ){ typetext(); }else{ setTimeout("typetext()", 28); }                                                             
	else { 	c = 1;   	tickerText = "";  } }    </script> 
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slides.min.jquery.js"></script>
<script> $(function(){ $('#slides').slides({ preload: true, play: 5000, pause: 2500, hoverPause: true, animationStart: function(current){ $('.caption').animate({ 	bottom:-35 },100); if (window.console && console.log) { console.log('animationStart on slide: ', current); }; }, animationComplete: function(current){ 
 $('.caption').animate({ bottom:0 },200); if (window.console && console.log) { console.log('animationComplete on slide: ', current); }; }, slidesLoaded: function() { $('.caption').animate({ bottom:0 },200); } }); });
 </script>
 <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>  <?php if ( is_single()){ ?>  <style>#content .post {  border: none !important;} </style>  <?php } ?>
<style media="screen" type="text/css"> .custom1{border-top:3px solid <?php echo of_get_option('example_colorpicker', '#000' ); ?> !important;} .custom1 a{color:<?php echo of_get_option('example_colorpicker', '#000' ); ?> !important;} .custom2{border-top:3px solid <?php echo of_get_option('block2color', '#000' ); ?> !important;}  .custom2 a{color:<?php echo of_get_option('block2color', '#000' ); ?> !important}  .custom3{border-top:3px solid <?php echo of_get_option('block3color', '#000' ); ?> !important;}  .custom3 a{color:<?php echo of_get_option('block3color', '#000' ); ?> !important} .custom4{border-top:3px solid <?php echo of_get_option('block4color', '#000' ); ?> !important;} .custom4 a{color:<?php echo of_get_option('block4color', '#000' ); ?> !important} .custom5{border-top:3px solid <?php echo of_get_option('block5color', '#000' ); ?> !important;} .custom5 a{color:<?php echo of_get_option('block5color', '#000' ); ?> !important} .custom6{border-top:3px solid <?php echo of_get_option('block6color', '#000' ); ?> !important;} .custom6 a{color:<?php echo of_get_option('block6color', '#000' ); ?> !important} .custom7{border-top:3px solid <?php echo of_get_option('block7color', '#000' ); ?> !important;} .custom7 a{color:<?php echo of_get_option('block7color', '#000' ); ?> !important}    
.custom8{border-top:3px solid <?php echo of_get_option('block8color', '#000' ); ?> !important;} .custom8 a{color:<?php echo of_get_option('block8color', '#000' ); ?> !important} .custom9{border-top:3px solid <?php echo of_get_option('block9color', '#000' ); ?> !important;} .custom9 a{color:<?php echo of_get_option('block9color', '#000' ); ?> !important} .custom10{border-top:3px solid <?php echo of_get_option('block10color', '#000' ); ?> !important;} .custom10 a{color:<?php echo of_get_option('block10color', '#000' ); ?> !important} .custom11{border-top:3px solid <?php echo of_get_option('block11color', '#000' ); ?> !important;} .custom11 a{color:<?php echo of_get_option('block11color', '#000' ); ?> !important} .custom12{border-top:3px solid <?php echo of_get_option('block12color', '#000' ); ?> !important;} .custom12 a{color:<?php echo of_get_option('block12color', '#000' ); ?> !important}     </style>
  	<?php wp_head(); ?> <?php echo get_option('hscript'); ?>
<?php if ( is_singular() ) { ?><link rel="canonical" href="<?php the_permalink(); ?>" /><?php } ?> 
</head> <body><div class="top1"><a name="top"></a></div>
<div id="wrapper">
    <div id="header">
    <div id="topheaderbar">
        <div id="topheaderbar-l">
        <div id="topnavigation">
          <?php if(get_option('editionok')!="no"):?><div id="edition">Edition: <?php echo get_option('edition'); ?> | </div><?php endif?><?php if(get_option('editionok')!="yes"):?><?php endif?>
        <div id="nav"><div id="menu"><ul><?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'main-menu', 'container_class' => 'menu-header', 'fallback_cb'=>'primarymenu2') );?></ul></div></div>
          </div>
        </div>
        <div id="topheaderbar-r"><?php echo date_i18n('l d F, Y'); ?></div>
        <div class="cb"></div>
    </div>	    
    <div id="header2">
    <div id="logoleft"><a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_option('logo'); ?>" alt="<?php echo get_option('logoalt'); ?>" /></a></div>
   
   
    <?php if(get_option('headerformatok')!="no"):?>
    <div id="logoright">
    <div id="logoright-left">
    <div id="logoright-left-cat">
    <div id="logoright-left-cat-wrapper">
    <div id="logoright-left-cat-wrapper-title"><?php echo get_option('breakingtxt'); ?></div>    
     <?php $otherFeaturedPost = new WP_Query();$otherFeaturedPost->query('showposts=1&cat='.get_option('breakingcat').'&offset=0'); ?> 
  <?php while ($otherFeaturedPost->have_posts()) : $otherFeaturedPost->the_post(); ?> 
    <div id="logoright-left-cat-wrapper-left"> 
    
                    
                
            <?php if(get_option('thumbok')!="no"):?>  <?php if( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('singlegalthumb'); ?></a>
             <?php } else { ?> 
           <a href="<?php the_permalink(); ?>">  <img src="<?php bloginfo('template_directory'); ?>/images/noimg.png" style="width:55px; height:45px;" /> </a><?php } ?> 
           <?php endif?> 
           
           <?php if(get_option('thumbok')!="yes"):?>
<?php 	$m_scrp = get_template_directory_uri() . '/includes/timthumb.php?';
                    	$m_image = '';  
                    	$customfields = get_post_custom();  if (empty($customfields['image'][0])) {
$m_image = m_theme_capture_first_image(); } else { $m_image = $customfields['image'][0]; } if (empty($m_image)) { $imgpath = $m_image_def;  	} else { 
$imgpath = $m_scrp . 'src=' . $m_image . '&amp;w=' . 55 . '&amp;h=' . 45 . '&amp;zc=1'; } ?> 
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">    
  <img src="<?php echo $imgpath; ?>" alt="" /> </a>
 <?php endif?> 

             

    </div>
    <div id="logoright-left-cat-wrapper-right"><div id="logoright-left-cat-wrapper-right-cattitle"><?php the_category(', ') ?></div><h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php short_title('','...',true, '49'); ?></a></h2></div>
     <?php $c++; endwhile; wp_reset_query(); ?> 
    <div class="cb"></div>
    </div>
    </div>
    </div>
    <div id="logoright-right">
    <div id="logoright-right-search"><form method="get" id="footersearch1" action="<?php bloginfo('url'); ?>/">
<input type="text" name="s" value="<?php _e(" Search News - Type Keyword & Hit Enter", "nt"); ?>" onblur="if(this.value=='') this.value='<?php _e(" Search News - Type Keyword & Hit Enter", "nt"); ?>';" onfocus="if(this.value=='<?php _e(" Search News - Type Keyword & Hit Enter", "nt"); ?>') this.value='';" id="s2" />
			<input type="submit" value=" " id="searchsubmit" />
		   </form></div>
    <div id="logoright-right-trending"><ul>
    <li><b><?php _e("Trending Topics", "nt"); ?>:</b></li>
    <?php if(get_option('tt1ok')!="no"):?><li><a href="<?php echo get_option('tt1'); ?>"><?php echo get_option('tt1txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt1ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt2ok')!="no"):?><li> - <a href="<?php echo get_option('tt2'); ?>"><?php echo get_option('tt2txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt2ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt3ok')!="no"):?><li> - <a href="<?php echo get_option('tt3'); ?>"><?php echo get_option('tt3txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt3ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt4ok')!="no"):?><li> - <a href="<?php echo get_option('tt4'); ?>"><?php echo get_option('tt4txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt4ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt5ok')!="no"):?><li> - <a href="<?php echo get_option('tt5'); ?>"><?php echo get_option('tt5txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt5ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt6ok')!="no"):?><li> - <a href="<?php echo get_option('tt6'); ?>"><?php echo get_option('tt6txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt6ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt7ok')!="no"):?><li> - <a href="<?php echo get_option('tt7'); ?>"><?php echo get_option('tt7txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt7ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt8ok')!="no"):?><li> - <a href="<?php echo get_option('tt8'); ?>"><?php echo get_option('tt8txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt8ok')!="yes"):?><?php endif?>     


    <?php if(get_option('tt9ok')!="no"):?><li> - <a href="<?php echo get_option('tt9'); ?>"><?php echo get_option('tt9txt'); ?></a></li><?php endif?> 
    <?php if(get_option('tt9ok')!="yes"):?><?php endif?>     
        </ul></div>
    </div>
    <div class="cb"></div>
    </div>
    <?php endif?> 
      <?php if(get_option('headerformatok')!="yes"):?>
    <div id="logoright" style="width:auto !important">
    <?php echo get_option('headerad'); ?>
    </div>
    <?php endif?>
    
    
    <div class="cb"></div>
    </div> 
    <div id="header3">
    <div id="header3-1">
    <div id="header3-1-left">
    <div id="header3-1-left-tickerimg"><img src="<?php bloginfo('template_directory'); ?>/images/headlines.png" alt="Headlines" /></div>
    <div id="header3-1-left-ticker"><ul><?php magazine3_ticker(); ?></ul></div>
    <div class="cb"></div>
    </div>
    <div id="header3-1-right">
    <ul>
<li style="margin-left: 2px;"><a href="<?php echo get_option('feedlink'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" /></a></li> 
<li style="margin-left: 8px;"><a href="<?php echo get_option('feedemail'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/email.png" /></a></li> 
<?php if(get_option('diggok')!="yes"):?><?php endif?>  <?php if(get_option('diggok')!="no"):?><li><a href="<?php echo get_option('digg'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/digg.png" /></a></li><?php endif?> 
<?php if(get_option('fbok')!="yes"):?><?php endif?>  <?php if(get_option('fbok')!="no"):?><li><a href="<?php echo get_option('fb'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" /></a> </li><?php endif?>
<?php if(get_option('flickrok')!="yes"):?><?php endif?>  <?php if(get_option('flickrok')!="no"):?><li><a href="<?php echo get_option('flickr'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/flickr.png" /></a> </li><?php endif?>
<?php if(get_option('gowallaok')!="yes"):?><?php endif?>  <?php if(get_option('gowallaok')!="no"):?><li><a href="<?php echo get_option('gowalla'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/gowalla.png" /></a> </li><?php endif?>
<?php if(get_option('lastfmok')!="yes"):?><?php endif?>  <?php if(get_option('lastfmok')!="no"):?><li><a href="<?php echo get_option('lastfm'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/lastfm.png" /></a> </li><?php endif?>
<?php if(get_option('linkedinok')!="yes"):?><?php endif?>  <?php if(get_option('linkedinok')!="no"):?><li><a href="<?php echo get_option('linkedin'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" /></a> </li><?php endif?>
<?php if(get_option('redditok')!="yes"):?><?php endif?>  <?php if(get_option('redditok')!="no"):?><li><a href="<?php echo get_option('reddit'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/reddit.png" /></a> </li><?php endif?>
<?php if(get_option('youtubeok')!="yes"):?><?php endif?>  <?php if(get_option('youtubeok')!="no"):?><li><a href="<?php echo get_option('youtube'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" /></a> </li><?php endif?>
<?php if(get_option('twitterok')!="yes"):?><?php endif?>  <?php if(get_option('twitterok')!="no"):?><li><a href="<?php echo get_option('twitter'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" /></a> </li><?php endif?>
<?php if(get_option('daok')!="yes"):?><?php endif?>  <?php if(get_option('daok')!="no"):?><li><a href="<?php echo get_option('da'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/deviantart.png" /></a> </li><?php endif?>
<?php if(get_option('stumbleuponok')!="yes"):?><?php endif?>  <?php if(get_option('stumbleuponok')!="no"):?><li><a href="<?php echo get_option('stumbleupon'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/stumbleupon.png" /></a> </li><?php endif?>
<?php if(get_option('skypeok')!="yes"):?><?php endif?>  <?php if(get_option('skypeok')!="no"):?><li><a href="<?php echo get_option('skype'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/skype.png" /></a> </li><?php endif?>
<?php if(get_option('myspaceok')!="yes"):?><?php endif?>  <?php if(get_option('myspaceok')!="no"):?><li><a href="<?php echo get_option('myspace'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/myspace.png" /></a> </li><?php endif?>
<?php if(get_option('buzzok')!="yes"):?><?php endif?>  <?php if(get_option('buzzok')!="no"):?><li><a href="<?php echo get_option('buzz'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/buzz.png" /></a> </li><?php endif?>
<?php if(get_option('fsok')!="yes"):?><?php endif?>  <?php if(get_option('fsok')!="no"):?><li><a href="<?php echo get_option('fs'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/foursquare.png" /></a> </li><?php endif?>
<?php if(get_option('bebook')!="yes"):?><?php endif?>  <?php if(get_option('bebook')!="no"):?><li><a href="<?php echo get_option('bebo'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/bebo.png" /></a> </li><?php endif?>
<?php if(get_option('postok')!="yes"):?><?php endif?>  <?php if(get_option('postok')!="no"):?><li><a href="<?php echo get_option('post'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/posterous.png" /></a> </li><?php endif?>
<?php if(get_option('yelpok')!="yes"):?><?php endif?>  <?php if(get_option('yelpok')!="no"):?><li><a href="<?php echo get_option('yelp'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/yelp.png" /></a> </li><?php endif?>
<?php if(get_option('spotifyok')!="yes"):?><?php endif?>  <?php if(get_option('spotifyok')!="no"):?><li><a href="<?php echo get_option('spotify'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/spotify.png" /></a> </li><?php endif?>
</ul> 
    </div>
    <div class="cb"></div>
    </div>
    
    <div id="header3-2">
    <?php if(get_option('blacknavok')!="yes"):?><?php endif?> 
    <?php if(get_option('blacknavok')!="no"):?>
<div id="menu2"><ul><?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'second', 'container_class' => 'menu-header', 'fallback_cb'=>'primarymenu2') );?></ul></div>
<?php endif?>
   <?php if(get_option('whitenavok')!="yes"):?><?php endif?>
   <?php if(get_option('whitenavok')!="no"):?>
   <div id="menu3"><ul>
<li id="current-home-nav" style="float:left"><a href="<?php echo get_option('home'); ?>"><?php _e("Home", "nt"); ?></a></li>
<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'fourth', 'container_class' => 'menu-header', 'fallback_cb'=>'primarymenu4') );?></ul></div>
   <?php endif?>
    </div>
    </div>
  	</div>
    <div id="section">

  <div id="column-wrap">