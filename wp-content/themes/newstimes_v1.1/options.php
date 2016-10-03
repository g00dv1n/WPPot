<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function of_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$of_settings = get_option('of');
	$of_settings['id'] = $themename;
	update_option('of', $of_settings);
	
	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function of_options() {
	
	// Test data
	$test_array = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
 		
	$options = array();
		
	$options[] = array( "name" => "Block Structure",
						"type" => "heading");
							
 $options[] = array( "name" => "HomePage Category & Color Settings",
						"desc" => " ",
						"type" => "info");
											
								

						
  
 				
	$options[] = array( "name" => "Block #1",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "example_text",
						"std" => "Category Name",
						"type" => "text");
							
						
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "example_select_categories",
						"type" => "select",
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "example_colorpicker",
						"std" => "",
						"type" => "color");
                        
                        
								

						
  
 				
	$options[] = array( "name" => "Block #2",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block2txt",
						"std" => "Category Name",
						"type" => "text");
							
						
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block2cat",
						"type" => "select",
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block2color",
						"std" => "",
						"type" => "color");
                        
                        								

						
  
 				
	$options[] = array( "name" => "Block #3",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block3txt",
						"std" => "Category Name",
						"type" => "text");
							
						
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block3cat",
						"type" => "select",
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block3color",
						"std" => "",
						"type" => "color");

						
  
 				
	$options[] = array( "name" => "Block #4",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block4txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block4cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block4color",
						"std" => "",
						"type" => "color");
                        

						
  
 				
	$options[] = array( "name" => "Block #5",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block5txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block5cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block5color",
						"std" => "",
						"type" => "color");
                        
                       

						
  
 				
	$options[] = array( "name" => "Block #6",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block6txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block6cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block6color",
						"std" => "",
						"type" => "color");
                        
                        
                        
                       

						
  
 				
	$options[] = array( "name" => "Block #7",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block7txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block7cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block7color",
						"std" => "",
						"type" => "color");
                        
                        
                        
                        
                       

						
  
 				
	$options[] = array( "name" => "Block #8",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block8txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block8cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block8color",
						"std" => "",
						"type" => "color");
                        
                        
                        
                        
                        				
	$options[] = array( "name" => "Block #9",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block9txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block9cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block9color",
						"std" => "",
						"type" => "color");
                        
                        
                        
                        
                        
                        				
	$options[] = array( "name" => "Block #10",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block10txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block10cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block10color",
						"std" => "",
						"type" => "color");
                        
                        
                        
                        
                        
                        				
	$options[] = array( "name" => "Block #11",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block11txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block11cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block11color",
						"std" => "",
						"type" => "color");
                        
                        
                        
                        
                        
                        				
	$options[] = array( "name" => "Block #12",
						"type" => "heading");
 			 
		$options[] = array( "name" => "Category Title",
						"desc" => "",
						"id" => "block12txt",
						"std" => "Category Name",
						"type" => "text");
							
	$options[] = array( "name" => "Select a Category",
						"desc" => "",
						"id" => "block12cat",
						"type" => "select",
                        
						"options" => $options_categories);						
	$options[] = array( "name" => "Colorpicker",
						"desc" => "No color selected by default.",
						"id" => "block12color",
						"std" => "",
						"type" => "color");
                        
                        
						 
	return $options;
}