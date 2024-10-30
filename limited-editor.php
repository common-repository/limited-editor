<?php

/*
Plugin Name: Limited Editor
Version: 1.1
Description: Adds a new user role "Limited editor" to WordPress when activating the plugin. After that, the plugin can be removed.
Author: Gerard Blanco
Author URI: https://accelerawp.com
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: limited-editor
*/

// This code will run only once on plugin activation and never again
function add_limited_editor() {
    add_role(
         'limited_editor',
         __( 'Limited editor', 'limited-editor' ),
         array(
              'read' => true,
              'read_private_posts' => true,
              'read_private_pages' => true,
              'edit_private_posts' => true,
              'edit_private_pages' => true,
              'edit_posts' => true,
              'edit_pages' => true,
              'edit_others_posts' => true,
              'edit_others_pages' => true,
              'edit_published_posts' => true,
	      'edit_published_pages' => true,
	      'unfiltered_html' => true,
         )
    );
}
register_activation_hook( __FILE__, 'add_limited_editor' );
