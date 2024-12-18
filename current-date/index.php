<?php
defined('ABSPATH') || exit;

function vdplug_current_date_init() {
    register_block_type(
        VDPLUG_DIR . '/build/blocks/current-date'
    );
}
add_action('init', 'vdplug_current_date_init');
