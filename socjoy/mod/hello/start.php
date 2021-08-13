<?php

function hello_init() {
    elgg_register_widget_type([
        'id' => 'helloworld',
        'name' => 'Hello world!',
        'description' => 'The "Hello, world!" widget',
    ]);
    elgg_register_widget_type([
        'id' => 'helloworld2',
        'name' => 'Hello world 111 !',
        'description' => 'The "Hello, world 111!" widget',
    ]);
}

return function() {
    elgg_register_event_handler('init', 'system', 'hello_init');
};
