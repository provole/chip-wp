<?php

if (function_exists('acf_register_block')) {

    acf_register_block([
        'name' => 'general-media-block',
        'title' => __('General Media Block'),
        'description' => __('Media Block'),
        'render_callback' => 'renderACFBlock',
        'category' => 'layout',
        'icon' => 'admin-comments',
        'mode' => 'edit',
        'keywords' => ['columns', 'block', 'general'],
        'post_types' => ['post', 'page']
    ]);

    if (function_exists('acf_add_local_field_group')) {

        acf_add_local_field_group(array(
            'key' => 'general-media-block',
            'title' => 'General Columns Block',
            'fields' => array(
                array(
                    'key' => 'general-media-block-type',
                    'label' => 'Media Type',
                    'name' => 'media_type',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'image' => 'Image',
                        'video_url' => 'Youtube Video Embed URL',
                    ),
                    'default_value' => 'image',
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => 'general-media-block-image',
                    'label' => 'Image',
                    'name' => 'general_block_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'general-media-block-type',
                                'operator' => '==',
                                'value' => 'image',
                            ),
                        )
                    ),
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'general-media-block-video',
                    'label' => 'Youtube Video URL',
                    'name' => 'general_block_video',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'general-media-block-type',
                                'operator' => '==',
                                'value' => 'video_url',
                            ),
                        )
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/general-media-block',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'acfe_display_title' => '',
            'acfe_autosync' => '',
            'acfe_form' => 0,
            'acfe_meta' => '',
            'acfe_note' => '',
        ));
    }
}
