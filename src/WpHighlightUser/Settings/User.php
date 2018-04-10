<?php

namespace WpHighlightUser\Settings;

class User
{
    public function __construct()
    {
        $this->addHighlightMetaBox();
    }

    public function addHighlightMetaBox(){
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array (
                'key' => 'group_5acc708057c97',
                'title' => 'Highlight User',
                'fields' => array (
                    array (
                        'key' => 'field_5acc708abc384',
                        'label' => 'Highlight User?',
                        'name' => 'highlighted',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 0,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'user_form',
                            'operator' => '==',
                            'value' => 'edit',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => 1,
                'description' => '',
            ));

        endif;
    }
}
