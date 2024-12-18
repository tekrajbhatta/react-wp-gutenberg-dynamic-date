<?php
defined('ABSPATH') || exit;

function vdplug_last_updated_date_init() {
    register_block_type(
        VDPLUG_DIR . '/build/blocks/last-updated-date'
    );
}
add_action('init', 'vdplug_last_updated_date_init');
