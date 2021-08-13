<?php
// linxue
function howtoverify_init() {
    elgg_register_widget_type([
        'id' => 'howtoverify',
        'name' => 'How to verify',
        'description' => 'How to become a verified collector.',
    ]);

    // If user is not verified show a menu item to register as
    // a verified collector
    $user = elgg_get_logged_in_user_entity();
    if (!$user->verified) {
        elgg_register_menu_item('site', array(
            'name' => 'howtoverify',
            'text' => elgg_echo('Become a verified collector'),
            'href' => '/howtoverify',
        ));
    }
}

return function() {
    elgg_register_event_handler('init', 'system', 'howtoverify_init');
};
