<?php

if (function_exists('acf_register_block')) {

    acf_register_block([
		'name' => 'slider-block',
		'title' => __('Slider Block'),
		'description' => __('Slider Block'),
		'render_callback' => 'renderACFBlock',
		'category' => 'layout',
		'icon' => 'admin-comments',
		'mode' => 'preview',
		'keywords' => ['quote', 'block'],
		'post_types' => ['post', 'page']
	]);

    if (function_exists('acf_add_local_field_group')) {

		acf_add_local_field_group(array(
			'key' => 'slider-block',
			'title' => 'Slider Block',
			'fields' => array(
				array(
					'key' => 'field_61e9662c9be4c',
					'label' => 'Slide',
					'name' => 'slide',
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
							'key' => 'field_61e966409be4d',
							'label' => 'Background Image',
							'name' => 'background_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '40',
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
							'key' => 'field_61e9664b9be4e',
							'label' => 'Background Colour',
							'name' => 'background_colour',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '10',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
						),
						array(
							'key' => 'field_61e966619be4f',
							'label' => 'Madness Text',
							'name' => 'madness_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_61e966709be50',
							'label' => 'Method Text',
							'name' => 'method_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
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
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/slider-block',
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