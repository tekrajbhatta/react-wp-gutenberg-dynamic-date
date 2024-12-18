<?php
defined('ABSPATH') || exit;

/**
 * Render callback for the Current Date block.
 *
 * @param array $attributes Block attributes.
 * @return string Rendered HTML for the block.
 */
$current_date = date_i18n('F j, Y');

// Initialize output array
$output_parts = [];

// Add content before date if it exists
if (!empty($attributes['content1'])) {
    $output_parts[] = '<span class="wp-block-verdure-current-date-text-before">' . esc_html($attributes['content1']) . ' </span>';
}

// Add date
$output_parts[] = '<span class="wp-block-verdure-current-date">' . esc_html($current_date) . '</span>';

// Add content after date if it exists
if (!empty($attributes['content2'])) {
    $output_parts[] = '<span class="wp-block-verdure-current-date-text-after"> ' . esc_html($attributes['content2']) . '</span>';
}

// Combine output parts
// $output = implode('', $output_parts);
$output = '<p class="wp-block-verdure-current-date-wrapper">' . implode('', $output_parts) . '</p>';

echo $output;
