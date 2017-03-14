=== Plugin Name ===
Contributors: codepicnic
Tags: embed, developer tools, code
Requires at least: 3.9.0
Tested up to: 4.7
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Embed your CodePicnic consoles with two clicks, or paste a CodePicnic console URL to embed it automatically.

== Description ==

CodePicnic allows developers show full-stack code environments to edit and run code. This plugin lets users embed CodePicnic consoles directly in the WordPress editor, using a toolbar button or pasting the console's URL.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

== Frequently Asked Questions ==

= How can I change the embedded iframe's default size? =

You can edit the `iframe.codepicnic-embed-iframe` rule in the `codepicnic.css` file in the plugin's `css` directory, or overwrite it in your theme / custom CSS.

== Screenshots ==

1. Embed CodePicnic consoles using the editor's button with the CodePicnic icon
2. Paste a console's URL in the editor to automatically embed it
3. Use the `embed` shortcode to embed a console in the editor using Text mode

== Changelog ==

= 1.1 =
* Add support for shortened URLs in visual editor

= 1.0 =
* Initial release