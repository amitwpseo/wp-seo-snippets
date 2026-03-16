<?php
/**
 * Remove Query Strings from Static Resources
 *
 * Removes version query strings (e.g., ?ver=5.8) from CSS and JS files
 * to improve cache performance.
 *
 * Add this code to your theme's functions.php or via a custom plugin.
 */
function remove_query_strings_from_static_resources( $src ) {
    if ( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src', 'remove_query_strings_from_static_resources' );
add_filter( 'script_loader_src', 'remove_query_strings_from_static_resources' );
?>
