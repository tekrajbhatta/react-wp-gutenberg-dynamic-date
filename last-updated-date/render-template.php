<?php
defined('ABSPATH') || exit;

/**
 * Render callback for the Last Updated Date block.
 *
 * @param array $attributes Block attributes.
 * @return string Rendered HTML for the block.
 */
// Get the last modified date of the current post
global $post;
$last_updated_date = get_the_modified_date('F j, Y', $post);

// Initialize output array
$output_parts = [];

// Add content before date if it exists
if (!empty($attributes['content1'])) {
    $output_parts[] = '<span class="wp-block-verdure-last-updated-date-text-before">' . esc_html($attributes['content1']) . ' </span>';
}

// Add last updated date
$output_parts[] = '<span class="wp-block-verdure-last-updated-date">' . esc_html($last_updated_date) . '</span>';

// Add content after date if it exists
if (!empty($attributes['content2'])) {
    $output_parts[] = '<span class="wp-block-verdure-last-updated-date-text-after"> ' . esc_html($attributes['content2']) . '</span>';
}

// Combine output parts
// $output = implode('', $output_parts);
$output = '<p class="wp-block-verdure-last-updated-date-wrapper">' . implode('', $output_parts) . '</p>';

echo $output;
