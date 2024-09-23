<?php

// https://developers.elementor.com/docs/form-fields/add-new-field/

function add_form_field($form_fields_registrar)
{
    $plugin = FriendlyCaptcha_Plugin::$instance;
    if (!$plugin->is_configured()) {
        return;
    }

    require_once(__DIR__ . '/field.php');

    $form_fields_registrar->register(new \Elementor_Form_Friendlycaptcha_Field());
}
add_action('elementor_pro/forms/fields/register', 'add_form_field');
