<?php

function apbd_add_meta_boxes(array $apbdmeta){
    
    $apbdmeta[] = array(
        'id'            => 'apbd-top-meta-box',
        'title'         => esc_html__( 'APBD Page Option', 'cmb2' ),
        'object_types'  => array('page'),
        'fields'        => array(
            array(
                'name'  => esc_html__( 'Paste your Slider Shortcode here.', 'cmb2' ),
                'type'  => 'text_medium',
                'id'    => 'apbd-slider-shortcode',
            ),
        )
    );
    
    
    return $apbdmeta;
}
add_filter('cmb2_meta_boxes', 'apbd_add_meta_boxes');