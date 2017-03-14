<?php
/*
Plugin Name: CodePicnic
Plugin URI:  https://developer.wordpress.org/plugins/codepicnic/
Description: Embed your CodePicnic consoles using the editor and oEmbed
Version:     1.1
Author:      CodePicnic
Author URI:  https://codepicnic.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_filter('mce_buttons', 'codepicnic_register_embed_button');
add_filter('mce_external_plugins', 'codepicnic_register_tinymce_plugin');

function codepicnic_register_embed_button($buttons) {
  array_push($buttons, 'separator', 'codepicnic');

  return $buttons;
}

function codepicnic_register_tinymce_plugin($plugins) {
  $plugins['codepicnic'] = plugins_url('/js/tinymce-plugin.js', __FILE__);

  return $plugins;
}

wp_oembed_add_provider('codepicnic.com/consoles/*', 'https://codepicnic.com/oembed');
wp_oembed_add_provider('codp.in/c/*', 'https://codepicnic.com/oembed');

add_editor_style(plugins_url('css/codepicnic.css', __FILE__));

wp_enqueue_style('codepicnic', plugins_url('css/codepicnic.css', __FILE__));
?>