<?php

if (function_exists('acf_register_block')) {

    acf_register_block([
		'name' => 'two-column-text-block',
		'title' => __('Two Column Text Block'),
		'description' => __('Two Column Text Block'),
		'render_callback' => 'renderACFBlock',
		'category' => 'layout',
		'icon' => 'admin-comments',
		'mode' => 'preview',
		'keywords' => ['two column', 'text', 'layout'],
		'post_types' => ['post', 'page']
	]);

    if (function_exists('acf_add_local_field_group')) {

		acf_add_local_field_group(array(
			'key' => 'two-column-text-block',
			'title' => 'Two Column Text Block',
			'fields' => array(
				array(
                    'key' => 'field_64217520aa36b',
                    'label' => 'Background Image',
                    'name' => 'background_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
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
                    'key' => 'field_64146dada6012',
                    'label' => 'Background Colour',
                    'name' => 'background_colour',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '#abd6ba',
                ),
				array(
					'key' => 'field_61d5s87a01546',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_64e9772c9be4c',
					'label' => 'Specialisms',
					'name' => 'specialisms',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_61f980619be4f',
							'label' => 'List',
							'name' => 'list',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
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
				),
				array(
                    'key' => 'field_6e212612d1c6e',
                    'label' => 'Button',
                    'name' => 'button',
                    'type' => 'link',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                ),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/two-column-text-block',
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