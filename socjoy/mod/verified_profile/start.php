<?php

return function () {
    elgg_register_event_handler('init', 'system', 'verified_profile_init');
};

function verified_profile_init()
{
    elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'verified_profile_admin_menu');
    elgg_extend_view('elgg.css', 'verified_profile/css');
    elgg_unregister_action('profile/edit');
    elgg_register_action("profile/edit", elgg_get_plugins_path() . "/verified_profile/actions/profile/edit.php");
    elgg_register_plugin_hook_handler('view_vars', 'page/layouts/default', 'verified_profile_custom_title');

}

function verified_profile_custom_title($hook, $type, $vars, $params)
{
    //$vars['title'] = $vars['config']->sitename;
    return $vars;

}

function verified_profile_admin_menu($hook, $type, $menu, $params)
{
    if (elgg_get_context() == 'profile') {
        $user = elgg_get_page_owner_entity();
    }

    if ($user->verified) {
        $menu->add(ElggMenuItem::factory([
            'name' => 'remove_verification',
            'icon' => 'check',
            'text' => elgg_echo('verified_profile:remove:verify'),
            'href' => elgg_http_add_url_query_elements('action/unverify_profile', [
                'user_guid' => $user->guid,
            ]),
            'is_action' => true,
            'section' => 'admin',
        ]));

    } else {
        $menu->add(ElggMenuItem::factory([
            'name' => 'verify_user',
            'icon' => 'check',
            'text' => elgg_echo('verified_profile:verify'),
            'href' => elgg_http_add_url_query_elements('action/verify_profile', [
                'user_guid' => $user->guid,
            ]),
            'is_action' => true,
            'section' => 'admin',
        ]));
    }

    return $menu;
}
