<?php

//linxue

$user = elgg_get_logged_in_user_entity();
if (!$user) {
    echo elgg_view_page('Howtoverify', [
        'title' => 'Become a verified collector!',
        'content' => '
        <b>Verified collectors are collectors with a decent amount of authentic football collection items
        such as match worn, match prepared, match issued, signed jerseys/boots/other collections. Our Socjoy
        collection expert board members who have more than 20 years of football collection experience do our best
        to verify collectors all around the world.<br>
        <br>After you register your account, please come back to this page and drop us a message with
        your proof of authentic football collections, including match worn, match prepared, match issued,
        signed and more collections.<br><br> Examples of a proof of authentic collections could be <br>
        1). an Instagram/Facebook account link/ID with your collection pictures, <br>
        2). a website link of your collections, <br> 3). an auction account link of football collection, </br>
        4). transaction history of your purchase </br> 5). pictures of how you get your collections </br>
        6). drop us a message for any other kinds of proof.',
    ]);
} else {
    $page_owner = elgg_get_logged_in_user_entity();
    elgg_set_page_owner_guid($page_owner->getGUID());

    elgg_push_collection_breadcrumbs('object', 'messages', $page_owner);

    $params = messages_prepare_for_verification();
echo elgg_view_page(elgg_echo('messages:add'), [
    'title' => 'Become a verified collector!',
    'subtitle' => 'asdfasdfdsafadsfasdfsd',
	'content' => '
    <b>Verified collectors are collectors with a decent amount of authentic football collection items
    such as match worn, match prepared, match issued, signed jerseys/boots/other collections.
    Our Socjoy collection expert board members who have more than 20 years of football collection
    experience do our best to verify collectors all around the world.<br>
    <br>Please drop us a message below with your proof of authentic football
    collections, including match worn, match prepared, match issued, signed and more
    collections.<br><br> Examples of a proof of authentic collections could be <br>
    1). an Instagram/Facebook account link/ID with your collection pictures, <br>
    2). a website link of your collections, <br> 3). an auction account link of football collection, </br>
    4). transaction history of your purchase </br> 5). pictures of how you get your collections </br>
    6). drop us a message for any other kinds of proof.<br>
    <br>' . elgg_view_form('messages/send', ['prevent_double_submit' => true], $params),
	'show_owner_block_menu' => false,
]);
}
