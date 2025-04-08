<?php
/**
 * Plugin Name: Custom Taxonomies
 * Description: Registers custom taxonomies for Pages and adds default terms.
 * Version: 1.4
 * Author: GabeMira157
 */

function register_custom_taxonomies() {
    // Register 'Page Audience'
    register_taxonomy(
        'page_audience',
        'page',
        array(
            'label' => 'Page Audience',
            'rewrite' => array('slug' => 'page-audience'),
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        )
    );

    // Register 'Page Content Type'
    register_taxonomy(
        'page_content_type',
        'page',
        array(
            'label' => 'Page Content Type',
            'rewrite' => array('slug' => 'page-content-type'),
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        )
    );

    // Register 'Page Product'
    register_taxonomy(
        'page_product',
        'page',
        array(
            'label' => 'Page Product',
            'rewrite' => array('slug' => 'page-product'),
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        )
    );
}
add_action('init', 'register_custom_taxonomies');

function add_default_terms_to_custom_taxonomies() {
    // Page Audience terms
    $page_audience_terms = array('Corporate', 'Public', 'Commercial');
    foreach ($page_audience_terms as $term) {
        if (!term_exists($term, 'page_audience')) {
            wp_insert_term($term, 'page_audience');
        }
    }

    // Page Content Type terms
    $page_content_type_terms = array('Educational', 'Marketing', 'Events');
    foreach ($page_content_type_terms as $term) {
        if (!term_exists($term, 'page_content_type')) {
            wp_insert_term($term, 'page_content_type');
        }
    }

    // Page Product terms
    $page_product_terms = array('Aspirin', 'Ibuprofen', 'Ketorolac');
    foreach ($page_product_terms as $term) {
        if (!term_exists($term, 'page_product')) {
            wp_insert_term($term, 'page_product');
        }
    }
}
add_action('init', 'add_default_terms_to_custom_taxonomies');

