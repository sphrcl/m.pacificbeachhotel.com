<?php
$categories = get_categories('hide_empty=0&orderby=name');
$taxers = get_terms('location', 'orderby=name&hide_empty=0');
$proptype = get_terms('propertytype', 'orderby=name&hide_empty=0');
$pages_array = get_pages('hide_empty=0');
$terms = array();
$site_pages = array();
$wp_cats = array();
$type = array();

foreach ($pages_array as $pagg) {
	$site_pages[$pagg->ID] = htmlspecialchars($pagg->post_title);
	$pages_ids[] = $pagg->ID;
}

foreach ($taxers as $taxers_list ) {
       $terms[] = $taxers_list->name;
}

foreach ($proptype as $typeall ) {
       $type[] = $typeall->name;
}

foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}

array_unshift($wp_cats, "Select a category"); 
array_unshift($terms, "Select a Location"); 
array_unshift($type, "Select a Type"); 

$prefix = 'cebo';

$numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9+');
$pagetypes = array('Two Column', 'Full Width', 'With Sidebar');

$meta_box_imagegalleries = array(
	'id' => 'CUSTOM FIELDS',
	'title' => 'Additional data for your page',
	// 'page' => determines where the custom field is supposed to show up.
	// here it is desplaying Testimonials, but other options are
	// page or post
	'page' => 'project',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		
				
		array( 
              "name" => "Youtube Video ID",
	          "desc" => "Paste in your youtube video ID, ex: UrcUu0Z5xRo",
	          "id" => $prefix."_youtube",
	          "type" => "text",
	          "std" => ""
              )
              
        ,
		array( 
              "name" => "Video embed",
	          "desc" => "This video will display in the gallery slider",
	          "id" => $prefix."_gallery_video",
	          "type" => "textarea",
	          "std" => ""
              )
	)
);

/* ----------------------------------------------- DONT TOUCH BELOW UNLESS YOU KNOW WHAT YOU'RE DOING */
add_action('admin_menu', 'mytheme_imagegalleries_add_box');
// Add meta box
function mytheme_imagegalleries_add_box() {
	global $meta_box_imagegalleries;
	foreach ( array( 'galleries' ) as $page )
	add_meta_box($meta_box_imagegalleries['id'], $meta_box_imagegalleries['title'], 'mytheme_imagegalleries_show_box', $page, $meta_box_imagegalleries['context'], 			$meta_box_imagegalleries['priority']);

}
// Callback function to show fields in meta box
function mytheme_imagegalleries_show_box() {
	global $meta_box_imagegalleries, $post;
	// Use nonce for verification
	
		echo '

	<script type="text/javascript">			
			
jQuery(document).ready(function() {
 
    var formfield;
 
    /* user clicks button on custom field, runs below code that opens new window */
    jQuery(".upload_image_button").click(function() {
        formfield = jQuery(this).prev("input"); //The input field that will hold the uploaded file url
        tb_show("","media-upload.php?TB_iframe=true");
 
        return false;
 
    });

    window.old_tb_remove = window.tb_remove;
    window.tb_remove = function() {
        window.old_tb_remove(); // calls the tb_remove() of the Thickbox plugin
        formfield=null;
    };
 
 
    window.original_send_to_editor = window.send_to_editor;
    window.send_to_editor = function(html){
        if (formfield) {
            fileurl = jQuery("img",html).attr("src");
            jQuery(formfield).val(fileurl);
            tb_remove();
        } else {
            window.original_send_to_editor(html);
        }
    };

			
						
				 jQuery("#color_picker").children("div").css("backgroundColor", "#ff0000");    
				 jQuery("#color_picker").ColorPicker({
					color: "#ff0000",
					onShow: function (colpkr) {
						jQuery(colpkr).fadeIn(500);
						return false;
					},
					onHide: function (colpkr) {
						jQuery(colpkr).fadeOut(500);
						return false;
					},
					onChange: function (hsb, hex, rgb) {
						//jQuery(this).css("border","1px solid red");
						jQuery("#color_picker").children("div").css("backgroundColor", "#" + hex);
						jQuery("#color_picker").next("input").attr("value","#" + hex);
						
					}
				  });
			  
		 
		});
		
		</script>
		
		';


	echo '<input type="hidden" name="mytheme_imagegalleries_meta_box_imagegalleries_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	foreach ($meta_box_imagegalleries['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr>',
				'<td class="boxer">';
		switch ($field['type']) {
			case 'text':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>', '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width: 109%" />';
				break;
			case 'upload':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>', '<input type="text" class="upload_image" name="', $field['id'], '" id="', $field['id'], '"  value="', $meta ? $meta : $field['std'], '" size="30" style="width: 100%; padding: 10px 0;" /><input class="upload_image_button" type="button" value="Upload Image" />';
				break;
			case 'textarea':
				echo '<div class="title">' ,$field['name'], '</div><div class="descriptive">', $field['desc'], '</div>', '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:47%">', $meta ? $meta : $field['std'], '</textarea>';
				break;
			case 'select':
				echo '<div class="title">' ,$field['name'], '</div><div class="descriptive">', $field['desc'], '</div>', '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
					
				}
				echo '</select>';
				break;
			case 'radio':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>';
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option, '<br>';
				}
				break;
			case 'checkbox':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 11px; color: #a2a2a2;" class="descriptive">', $field['desc'], '</div>', '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo 	'<td>',
			'</tr>';
	}
	
	echo '</table>';
}

add_action('save_post', 'mytheme_imagegalleries_save_data');
// Save data from meta box
function mytheme_imagegalleries_save_data($post_id) {
	global $meta_box_imagegalleries;	
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_imagegalleries_meta_box_imagegalleries_nonce'], basename(__FILE__))) {
		return $post_id;
	}
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {		return $post_id;
	}
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	foreach ($meta_box_imagegalleries['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
?>