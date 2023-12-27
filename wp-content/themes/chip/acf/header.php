<?php

if (function_exists('acf_add_local_field_group')) {

	acf_add_local_field_group(array(
		'key' => 'group_61f01475b190d',
		'title' => 'Header Customisation',
		'fields' => array(
			array(
				'key' => 'field_61f014bfeb9bb',
				'label' => 'Header Customisation',
				'name' => 'header_customisation',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_61f014d2eb9bc',
						'label' => 'Navigation Links Colour',
						'name' => 'navigation_links_colour',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
					),
					array(
						'key' => 'field_61f014dfeb9bd',
						'label' => 'Logo',
						'name' => 'logo',
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
						'key' => 'field_60f06212eb9bc',
						'label' => 'Scroll Navigation Links Colour',
						'name' => 'scroll_navigation_links_colour',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
					),
					array(
						'key' => 'field_67f01832ebbc',
						'label' => 'Scroll Background',
						'name' => 'scroll_background',
						'type' => 'extended-color-picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'rgba(0,0,0,0.8)',
						'color_palette' => '',
						'hide_palette' => 0,
					),
					array(
						'key' => 'field_61f3144ebxbd',
						'label' => 'Scroll Logo',
						'name' => 'scroll_logo',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
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
						'key' => 'field_61f269fe18c6f',
						'label' => 'Border Bottom',
						'name' => 'border_bottom',
						'type' => 'select',
						'instructions' => 'Adds a border bottom',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'none' => 'none',
							'1px' => '1px',
							'2px' => '2px',
							'3px' => '3px',
							'4px' => '4px',
							'5px' => '5px',
						),
						'default_value' => '1px',
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'return_format' => 'value',
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_61f26a7518c70',
						'label' => 'Border Colour',
						'name' => 'border_colour',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '#abd6ba',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-404-page',
				),
			)
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
}