<?php
/*
* Plugin Name: Metadata
* Plugin URI: http://github.com/Miksikuksikaksi
* Description: Just an example on how to show metadata
* Version: 1.0
* Author: Michael Hanson
* Author URI: http://github.com/Miksikuksikaksi
* License: Just GPL2 - feel free to do whit it what you like ;-)
*/
?>
<?php
	
	// Name your function with a unique name not to conflict with others
	function mhanson_append_content($content) {
		// ask wether something is true
		if(is_single() && ($author_id = get_the_author_meta(ID)) == 4) {
			// if true append new content
			$new_content = '<p>' . get_the_author_meta('display_name') . ' arbejder lidt med it, og bruger alt for meget af sin tid foran skærmen.</p>';
			$content .= $new_content;
		}
		return $content;
	}
	// add the filter and voila!
	add_filter('the_content', 'mhanson_append_content');
	
?>
