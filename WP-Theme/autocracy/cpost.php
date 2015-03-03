<?php

$prefix = 'YOUR_PREFIX_';
global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] = array(
    'id' => 'pages',
    'title' => 'Page Settings',
    'pages' => array('page'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name' => 'Icon Class',
        'id' => 'iconClass',
        'type' => 'text',
        ),
       array(
        'name' => 'Color',
        'id' => 'iconColor',
        'type' => 'color',
        ),
       ),
    );

$meta_boxes[] = array(
    'id' => 'services',
    'title' => 'Photos',
    'pages' => array('services','product','portfolio'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
       array(
        'name'             => 'Service Images',
        'id'               => "serviceimages",
        'type'             => 'thickbox_image',
        'max_file_uploads' => 7,
        ),
       ),
    );

/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');
?>