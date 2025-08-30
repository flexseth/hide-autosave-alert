<?php
/**
 * Plugin Name: Hide Autosave Alert
 * Description: Automatically removes the "There is an autosave of this post that is more recent than the version below." message in the block editor.
 * Version: 1.0
 * Author: Seth Miller
 * License: GPLv2 (or later) 
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'enqueue_block_editor_assets', function() {
    $script = "
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new MutationObserver(() => {
                const notice = document.querySelector('.components-notice, .editor-post-autosave-block-editor-warning');
                if (notice && notice.innerText.includes('There is an autosave of this post')) {
                    notice.remove();
                }
            });
            observer.observe(document.body, { childList: true, subtree: true });
        });
    ";

    // Attach inline JS safely without breaking headers
    wp_add_inline_script( 'wp-blocks', $script );
});
