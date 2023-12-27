<?php


if (function_exists('acf_register_block')) {

	acf_register_block([
		'name' => 'home-banner-block',
		'title' => __('Home Banner Block'),
		'description' => __('Home Banner Block'),
		'render_callback' => 'renderACFBlock',
		'category' => 'layout',
		'icon' => 'admin-comments',
		'mode' => 'preview',
		'keywords' => ['home banner', 'block', 'layout'],
		'post_types' => ['post', 'page']
	]);

	if (function_exists('acf_add_local_field_group')) {

		acf_add_local_field_group(array(
			'key' => 'home-banner-block',
			'title' => 'Home Banners Block',
			'fields' => array(
				array(
					'key' => 'home-banner-block-heading',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'wysiwyg',
					'required' => 1,
				),
				array(
					'key' => 'home-banner-block-sections',
					'label' => 'Section',
					'name' => 'section',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 1,
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
					'layout' => 'row',
					'min' => 2,
					'max' => 2,
					"sub_fields" => array(
						array(
							'key' => 'home-banner-block-sections-background',
							'label' => 'Background',
							'name' => 'background',
							'type' => 'image',
							'required' => 1,
							'conditional_logic' => 0,
						),
						array(
							'key' => 'home-banner-block-sections-icon',
							'label' => 'Icon',
							'name' => 'icon',
							'type' => 'image',
							'required' => 1,
						),
						array(
							'key' => 'home-banner-block-sections-icon-settings',
							'label' => 'Icon Settings',
							'name' => 'icon-settings',
							'type' => 'group',
							'sub_fields' => array(
								array(
									'key' => 'home-banner-block-sections-icon-settings-x-position',
									'name' => 'x-position',
									'label' => 'X Position',
									'type' => 'text',
									'required' => 0,
									'default_value' => '50%',
									'instructions' => 'This sets the x position of the icon, can be pixel value i.e. 10px or percentage i.e. 50%'
								),
								array(
									'key' => 'home-banner-block-sections-icon-settings-y-position',
									'name' => 'y-position',
									'label' => 'Y Position',
									'type' => 'text',
									'required' => 0,
									'default_value' => '50%',
									'instructions' => 'This sets the x position of the icon, can be pixel value i.e. 10px or percentage i.e. 50%'
								),
								array(
									'key' => 'home-banner-block-sections-icon-settings-width',
									'name' => 'width',
									'label' => 'Width',
									'type' => 'text',
									'required' => 0,
									'instructions' => 'Set the icon width with pixels or percentage. If left blank it will assume images width, if height is set it will be relative and maintain aspect ratio'

								),
								array(
									'key' => 'home-banner-block-sections-icon-settings-height',
									'name' => 'height',
									'label' => 'Height',
									'type' => 'text',
									'required' => 0,
									'instructions' => 'Set the icon height with pixels or percentage. If left blank it will assume images height, if width is set it will be relative and maintain aspect ratio'
								),
								array(
									'key' => 'home-banner-block-sections-icon-setting-rotation',
									'name' => 'rotation',
									'label' => 'Rotation',
									'type' => 'number',
									'max' => '360',
									'min' => '-360',
									'default_value' => 0,
								)
							)
						),
						array(
							'key' => 'home-banner-block-sections-header',
							'label' => 'Header',
							'name' => 'header',
							'type' => 'wysiwyg',
							'required' => 1,
						),
						array(
							'key' => 'home-banner-block-sections-body',
							'label' => 'Body',
							'name' => 'body',
							'type' => 'wysiwyg',
							'required' => 1,
						)
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/home-banner-block',
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
