<?php


if (function_exists('acf_register_block')) {

	acf_register_block([
		'name' => 'points-block',
		'title' => __('Points Block'),
		'description' => __('Points Block'),
		'render_callback' => 'renderACFBlock',
		'category' => 'layout',
		'icon' => 'admin-comments',
		'mode' => 'preview',
		'keywords' => ['points', 'block', 'layout'],
		'post_types' => ['post', 'page']
	]);

	if (function_exists('acf_add_local_field_group')) {

		acf_add_local_field_group(array(
			'key' => 'points-block',
			'title' => 'Points Block',
			'fields' => array(
				array(
                    'key' => 'field_62141davs1012',
                    'label' => 'Background Colour',
                    'name' => 'background_colour',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '#4f6061',
                ),
				array(
					'key' => 'points-block-heading',
					'label' => 'Heading',
					'name' => 'heading',
					'type' => 'wysiwyg',
					'required' => 1,
				),
				array(
					'key' => 'points-block-points',
					'label' => 'Points',
					'name' => 'points',
					'type' => 'repeater',
                    'max' => 6,
                    'min' => 6,
 					'required' => 1,
                    "sub_fields" => array(
                        array(
                            'key' => 'points-block-points-heading',
                            'label' => 'Heading',
                            'name' => 'heading',
                            'type' => 'text',
                            'required' => 1,
                        ),
                        array(
                            'key' => 'points-block-points-text',
                            'label' => 'Text',
                            'name' => 'text',
                            'type' => 'wysiwyg',
                            'required' => 1
                        )
                    )
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/points-block',
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
