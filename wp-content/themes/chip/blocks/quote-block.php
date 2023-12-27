<?php

if (function_exists('acf_register_block')) {

    acf_register_block([
		'name' => 'quote-block',
		'title' => __('Quote Block'),
		'description' => __('Quote Block'),
		'render_callback' => 'renderACFBlock',
		'category' => 'layout',
		'icon' => 'admin-comments',
		'mode' => 'preview',
		'keywords' => ['quote', 'block'],
		'post_types' => ['post', 'page']
	]);

    if (function_exists('acf_add_local_field_group')) {

		acf_add_local_field_group(array(
			'key' => 'quote-block',
			'title' => 'Quotes Block',
			'fields' => array(
				array(
					'key' => 'field_6525mb113fe19',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '100',
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
					'key' => 'field_61e68697da36b',
					'label' => 'Image Desktop',
					'name' => 'image_desktop',
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
					'key' => 'field_61e38657da16b',
					'label' => 'Image Mobile',
					'name' => 'image_mobile',
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
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/quote-block',
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