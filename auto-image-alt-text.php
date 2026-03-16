<?php
/**
 * Automatic Image Alt Text Filler
 *
 * Automatically populates empty image alt attributes with the post title.
 * Improves accessibility and SEO.
 *
 * Add to functions.php or custom plugin.
 */
function auto_fill_image_alt_text( $attr, $attachment ) {
    // If alt text is already set, do nothing
    if ( isset( $attr['alt'] ) && ! empty( $attr['alt'] ) ) {
        return $attr;
    }

    // Get the post (usually the current post) that the image is attached to
    $post = get_post( $attachment->post_parent );
    if ( $post ) {
        $attr['alt'] = $post->post_title;
    } else {
        // Fallback to site name
        $attr['alt'] = get_bloginfo( 'name' );
    }

    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'auto_fill_image_alt_text', 10, 2 );
?>
