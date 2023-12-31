<?php

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
      'key' => 'group_61e058db47f0b',
      'title' => 'Contact Page',
      'fields' => array(
        array(
          'key' => 'field_622075121b36b',
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
          'key' => 'field_64dc1487282ab',
          'label' => 'Background Colour',
          'name' => 'background_colour',
          'type' => 'color_picker',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '#4b4c60',
        ),
        array(
          'key' => 'field_61e051exf0d51',
          'label' => 'Contact Information',
          'name' => 'contact_information',
          'type' => 'group',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '40',
            'class' => '',
            'id' => '',
          ),
          'layout' => 'block',
          'sub_fields' => array(
            array(
              'key' => 'field_61s059b24b579',
              'label' => 'Call us',
              'name' => 'call_us',
              'type' => 'text',
              'default_value' => '0161 833 4300',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array(
              'key' => 'field_65db06b181117',
              'label' => 'Call us text',
              'name' => 'call_us_text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
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
              'key' => 'field_61e129b46b5xa',
              'label' => 'Email us',
              'name' => 'email_us',
              'type' => 'text',
              'default_value' => 'ceo@chip.co.uk',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
          ),
        ),
        array(
          'key' => 'field_61e058eff0dd1',
          'label' => 'Company Address',
          'name' => 'company_location',
          'type' => 'group',
          'instructions' => 'Inserting address will automatically update Google Maps iframe.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '40',
            'class' => '',
            'id' => '',
          ),
          'layout' => 'block',
          'sub_fields' => array(
            array(
              'key' => 'field_61e059a23b579',
              'label' => 'Address Line 1',
              'name' => 'address_line_1',
              'type' => 'text',
              'default_value' => 'Parsonage',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array(
              'key' => 'field_61e059b43b57a',
              'label' => 'Address Line 2',
              'name' => 'address_line_2',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array(
              'key' => 'field_61e059bc3b57b',
              'label' => 'City',
              'name' => 'city',
              'type' => 'text',
              'default_value' => 'Manchester',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array(
              'key' => 'field_61e059c33b57c',
              'label' => 'Postcode',
              'name' => 'postcode',
              'default_value' => 'M3 2JA',
              'type' => 'text',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
          ),
        ),
        array(
          'key' => 'field_61f149vs6b5xa',
          'label' => 'Contact Form ID',
          'name' => 'contact_form_id',
          'type' => 'number',
          'default_value' => '',
          'instructions' => 'Insert Contact Form ID',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '20',
            'class' => '',
            'id' => '',
          ),
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'contact.php',
          ),
        ),
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
