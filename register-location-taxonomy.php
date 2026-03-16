<?php
/**
 * Register Custom Taxonomy "Location"
 *
 * Registers a hierarchical taxonomy (like categories) called "Location"
 * that can be attached to posts or custom post types for local SEO.
 *
 * Add to functions.php or custom plugin.
 */
function register_location_taxonomy() {
    $labels = array(
        'name'              => _x( 'Locations', 'taxonomy general name' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Locations' ),
        'all_items'         => __( 'All Locations' ),
        'parent_item'       => __( 'Parent Location' ),
        'parent_item_colon' => __( 'Parent Location:' ),
        'edit_item'         => __( 'Edit Location' ),
        'update_item'       => __( 'Update Location' ),
        'add_new_item'      => __( 'Add New Location' ),
        'new_item_name'     => __( 'New Location Name' ),
        'menu_name'         => __( 'Locations' ),
    );

    $args = array(
        'hierarchical'      => true, // true = like categories, false = like tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'location' ),
        'show_in_rest'      => true, // for Gutenberg editor support
    );

    register_taxonomy( 'location', array( 'post', 'page' ), $args ); // attach to posts and pages
}
add_action( 'init', 'register_location_taxonomy' );
?>
