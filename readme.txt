=== Hide Autosave Alert ===
Contributors: yourname
Tags: autosave, editor, gutenberg, notice
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatically removes the "There is an autosave of this post that is more recent than the version below." message in the block editor.

== Description ==

When editing posts, WordPress may show an autosave alert:  
*"There is an autosave of this post that is more recent than the version below."*  

This plugin hides that alert automatically.  
It does not affect actual autosave functionality, only the display of the warning message in the editor UI.

== Installation ==

1. Upload the `hide-autosave-alert` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. Open the block editor. The autosave alert will no longer appear.

== Frequently Asked Questions ==

= Does this disable autosaving? =
No. Autosaves still work in the background. The plugin only hides the alert message.

= Will this remove other notices? =
No. It specifically looks for the autosave alert text.

== Changelog ==

= 1.0 =
* Initial release: hides the autosave alert message in the block editor.
