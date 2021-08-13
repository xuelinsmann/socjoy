<?php

function my_blog_set_url($hook, $type, $url, $params) {
    $entity = $params['entity'];
    if ($entity->getSubtype() === 'my_blog') {
        return "my_blog/view/{$entity->guid}";
    }
}

function my_blog_page_handler($segments) {
    switch ($segments[0]) {
        case 'add':
           echo elgg_view_resource('my_blog/add');
           break;

        case 'view':
            $resource_vars['guid'] = elgg_extract(1, $segments);
            echo elgg_view_resource('my_blog/view', $resource_vars);
            break;

        case 'all':
        default:
           echo elgg_view_resource('my_blog/all');
           break;
    }

    return true;
}

function my_blog_init() {
    // register a hook handler to override urls
    elgg_register_plugin_hook_handler('entity:url', 'object', 'my_blog_set_url');

    elgg_register_page_handler('my_blog', 'my_blog_page_handler');
}

return function() {
    // register an initializer
    elgg_register_event_handler('init', 'system', 'my_blog_init');
};
