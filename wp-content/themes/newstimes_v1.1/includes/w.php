<?php add_action( 'widgets_init', 'catwithnumber' ); function catwithnumber() {
	register_widget( 'catwithnumber_reg' ); } class catwithnumber_reg extends WP_Widget {	function catwithnumber_reg() {
		$catwidget = array( 'classname' => 'widget-archive', 'description' => __('Displays list of category with post numbers - Part of Magazine3 Theme', 'open') ); 	$catcon = array( 'width' => 300, 'height' => 350, 'id_base' => 'widget-archive' );
		$this->WP_Widget( 'widget-archive', __('Category With Numbers', 'open'), $catwidget, $catcon ); }
	function widget( $args, $instance ) {	global $wpdb;	extract( $args ); 	?>
        <div class="section"> <div id="sidebartitlewrapper"> <h3><span>Browse By Categories</span></h3>	</div> <div class="sectioncont"> <ul class="pane"> 
<?php $milliondollarcat = wp_list_categories('echo=0&show_count=1&title_li=&orderby=name&depth=1'); $milliondollarcat = str_replace(array('(',')'), '', $milliondollarcat); echo $milliondollarcat;
?></ul></div> </div><?php } } ?>
<?php function widget_Twidget_init() {
	if ( !function_exists('register_sidebar_widget') )
		return;
	function widget_Twidget($args) {
		extract($args);
		$options = get_option('widget_Twidget');
		$account = $options['account'];  
		$title = $options['title']; 
		$show = $options['show']; 
		echo $before_widget ;
		echo '<div id="twitter_div"><div style="float:right;margin-top:1px;margin-right:9px;width: 51px;height: 40px;background-repeat: no-repeat;
background-image: url(data:image/png;base64,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);
"></div>'
.$before_title.$title.$after_title;
		echo '<ul id="twitter_update_list"></ul></div>
		      <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>';
		echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$account.'.json?callback=twitterCallback2&amp;count='.$show.'"></script>'; 	echo $after_widget; 	}	function widget_Twidget_control() {
		$options = get_option('widget_Twidget');		if ( !is_array($options) )
			$options = array('account'=>'m3themes', 'title'=>'Twitter Updates', 'show'=>'5');
		if ( $_POST['Twitter-submit'] ) { $options['account'] = strip_tags(stripslashes($_POST['Twitter-account']));
			$options['title'] = strip_tags(stripslashes($_POST['Twitter-title']));
			$options['show'] = strip_tags(stripslashes($_POST['Twitter-show']));
			update_option('widget_Twidget', $options); 		} 
		$account = htmlspecialchars($options['account'], ENT_QUOTES);
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$show = htmlspecialchars($options['show'], ENT_QUOTES);
		echo '<p style="text-align:right;">
				<label for="Twitter-account">' . __('Twitter Username:') . '
				<input style="width: 200px;" id="Twitter-account" name="Twitter-account" type="text" value="'.$account.'" />
				</label></p>';
		echo '<p style="text-align:right;">
				<label for="Twitter-title">' . __('Widget Title:') . '
				<input style="width: 200px;" id="Twitter-title" name="Twitter-title" type="text" value="'.$title.'" />
				</label></p>';
		echo '<p style="text-align:right;">
				<label for="Twitter-show">' . __('Max tweets:') . '
				<input style="width: 200px;" id="Twitter-show" name="Twitter-show" type="text" value="'.$show.'" />
				</label></p>';
		echo '<input type="hidden" id="Twitter-submit" name="Twitter-submit" value="1" />';
	} 	register_sidebar_widget(array('Twitter Stream Widget', 'widgets'), 'widget_Twidget');
	register_widget_control(array('Twitter Stream Widget', 'widgets'), 'widget_Twidget_control', 330, 200);
} add_action('widgets_init', 'widget_Twidget_init'); add_action( 'widgets_init', 'vidgal' );
function vidgal() {
	register_widget( 'vidgal_reg' ); }
class vidgal_reg extends WP_Widget {
	function vidgal_reg() {
		$vidwidget = array( 'classname' => 'widget-vidgal', 'description' => __('Scrollable Video Gallery - Part of Magazine3 Theme', 'open') );
		$catcon = array( 'width' => 300, 'height' => 350, 'id_base' => 'widget-vidgal' );
		$this->WP_Widget( 'widget-vidgal', __('Video Gallery', 'open'), $vidwidget, $catcon ); 	}
	function widget( $args, $instance ) {
		global $wpdb;
		extract( $args );
		?>   <div class="section">
			<div id="sidebartitlewrapper">
				<h3><span>Videos</span></h3>			</div>
			<div class="sectioncont">
            <script type="text/javascript">
            $(function() {
			var imgWrapper = $('.slideshow > span');
			// only show the first image, hide the rest
			imgWrapper.hide().filter(':first').show();
			$('ul.recentlist li a').click(function () {
				// check if this item doesn't have class "current"
				// if it has class "current" it must not execute the script again
				if (this.className.indexOf('current') == -1){
					imgWrapper.hide();
					imgWrapper.filter(this.hash).fadeIn(500);
					$('ul.recentlist li a').removeClass('current');
					$(this).addClass('current');
				}
				return false;  });  });  </script> 	<ul class="pane" style="margin-bottom:0px !important">
				<div class="slideshow">
			<ul class="recentlist" style="margin-bottom:0px !important">
				<li><a class="current" href="#slide1"> </a></li>
				<li><a href="#slide2"> </a></li>
				<li><a href="#slide3"> </a></li>
                <li><a href="#slide4"> </a></li>
                <li><a href="#slide5"> </a></li> 			</ul>
			<span id="slide1"><?php echo get_option('vid1'); ?> </span>
		<span id="slide2"><?php echo get_option('vid2'); ?> </span>
        	<span id="slide3"><?php echo get_option('vid3'); ?>  </span>
            	<span id="slide4"><?php echo get_option('vid4'); ?>  </span>
                         	<span id="slide5"><?php echo get_option('vid5'); ?>  </span> </div> </ul> 	</div>	</div><?php } } 
                            
 // Popular posts
 
 class mostpopuler extends WP_Widget { function mostpopuler() { parent::WP_Widget('mostpopular', 'Popular Posts', array('description' => 'List of most commented posts - Part of Magazine3 Theme')); }
	function head(){ $options = get_option('mostpopuler'); } function widget($args, $instance){ global $wpdb; $time_start = date('c', strtotime($instance['lapse'], current_time('timestamp', 0)));
		$classes = preg_replace('/\s\s+/', '', preg_replace('~[,.]~', ' ', $instance['classes'])); echo $args['before_widget']; echo $args['before_title'] . $instance['title'] . $args['after_title'];
		$popular_posts =  $wpdb->get_results("SELECT id, post_title, post_status, guid, COUNT(comment_post_ID) AS post_comment_count FROM " . $wpdb->prefix . "posts JOIN " . $wpdb->prefix . "comments ON id = comment_post_ID WHERE post_status = 'publish' AND comment_approved = 1 AND comment_date > '" . $time_start . "' GROUP BY id ORDER BY post_comment_count DESC, post_date DESC LIMIT " . $instance['number_posts']);
		$classes = explode(" ", $classes); if(!empty($popular_posts)){ ?> <ul class="mostpopular"> <?php foreach($popular_posts as $k => $post){ ?><li class="mostpopular_li color<?php echo $k; ?>"><a href="<?php echo get_permalink($post->id); ?>" class="barlinko"><?php echo get_the_title($post->id); ?></a><span style="display: inline-block;width:100%;"><span style="float: left;font-size:10px;color:#f5f5f5;"><?php the_time('M jS, Y') ?></span><span style="float: right;" class="barco"><a href="<?php echo get_permalink($post->id); ?>#comments" class="thethingwithc"><?php echo number_format($post->post_comment_count); ?> comments</a></span><span class="cb"></span></span></li>
<?php }	?></ul>	<?php }	echo $args['after_widget']; } function update($new_instance, $old_instance) { if (!get_option('mostpopuler')){ add_option('mostpopuler', $options);	} else {
update_option('mostpopuler', $options);	}	$instance = $old_instance; $instance['title'] = $new_instance['title']; $instance['lapse'] = $new_instance['lapse']; if(strtotime($instance['lapse']) < 1 || current_time('timestamp') < strtotime($instance['lapse'], current_time('timestamp'))){
	 $instance['lapse'] = '-30 days'; } $instance['classes'] = preg_replace('#[^0-9a-z,_-]#', '', $new_instance['classes']); $instance['number_posts'] = (int) $new_instance['number_posts']; 		return $instance; }	function form($instance) { $default = array( 'title' => 'Most Popular Posts', 'lapse' => '-30 days', 'classes' => '0,1,2,3,4', 'number_posts' => '5', );
		$instance = wp_parse_args($instance, $default);	$instance['classes'] = implode(', ', explode(',', $instance['classes'])); $options = get_option('mostpopuler'); $time_start = date('c', strtotime($instance['lapse'], current_time('timestamp', 0))); ?>
<p><label for="<?php echo $this->get_field_id('title'); ?>">Title of Widget<input name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" type="text" class="widefat" value="<?php echo esc_attr($instance['title']); ?>" /></label>
</p><p><label for="<?php echo $this->get_field_id('lapse'); ?>">From Last...How many days?<input name="<?php echo $this->get_field_name('lapse'); ?>" id="<?php echo $this->get_field_id('lapse'); ?>" type="text" class="widefat" value="<?php echo esc_attr($instance['lapse']); ?>" /></label><br /></p>
<p><label for="<?php echo $this->get_field_id('number_posts'); ?>">How many posts to show?<input name="<?php echo $this->get_field_name('number_posts'); ?>" id="<?php echo $this->get_field_id('number_posts'); ?>" type="text" size="3" value="<?php echo esc_attr($instance['number_posts']); ?>" /></label></p>
<?php } } add_action('widgets_init', 'mostpopular_register_widgets'); function mostpopular_register_widgets(){ 	add_action('wp_head', array('mostpopuler', 'head')); register_widget('mostpopuler');
} function mostpopular_widget($instance){	if(!is_array($instance)) $instance = wp_parse_args($instance); return mostpopuler::widget(NULL, $instance); } function most_viewed_bars_widget($instance){	if(!is_array($instance)) $instance = wp_parse_args($instance);	return MostViewedBars::widget(NULL, $instance); }                          