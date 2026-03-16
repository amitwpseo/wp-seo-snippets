<?php
/**
 * Schema Markup Shortcode
 *
 * Adds a shortcode [schema type="LocalBusiness" name="My Business"] to output
 * JSON-LD schema markup.
 *
 * Usage: [schema type="LocalBusiness" name="Business Name" address="123 Main St" phone="555-1234"]
 */
function schema_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'type'    => 'LocalBusiness',
        'name'    => '',
        'address' => '',
        'phone'   => '',
    ), $atts );

    if ( empty( $atts['name'] ) ) {
        return '';
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => $atts['type'],
        'name'     => $atts['name'],
    );

    if ( ! empty( $atts['address'] ) ) {
        $schema['address'] = array(
            '@type' => 'PostalAddress',
            'streetAddress' => $atts['address'],
        );
    }
    if ( ! empty( $atts['phone'] ) ) {
        $schema['telephone'] = $atts['phone'];
    }

    return '<script type="application/ld+json">' . json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>';
}
add_shortcode( 'schema', 'schema_shortcode' );
?>
