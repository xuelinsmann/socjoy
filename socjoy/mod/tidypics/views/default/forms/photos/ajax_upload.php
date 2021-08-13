<?php
/**
 * Tidypics ajax upload form body
 *
 * @uses $vars['entity']
 */

$album = $vars['entity'];

$ts = time();
$batch = time();
$tidypics_token = elgg()->csrf->generateActionToken($ts);
$basic_uploader_url = current_page_url() . '/basic';

$maxfilesize = (float) elgg_get_plugin_setting('maxfilesize', 'tidypics');
$maxfilesize_int = (int) $maxfilesize;
$max_uploads = (int) elgg_get_plugin_setting('max_uploads', 'tidypics');
$client_resizing = (bool) elgg_get_plugin_setting('client_resizing', 'tidypics');
if ($client_resizing) {
	$client_resizing = "true";
} else {
	$client_resizing = "false";
}
$remove_exif = (bool) elgg_get_plugin_setting('remove_exif', 'tidypics');
if ($remove_exif) {
	$remove_exif = "true";
} else {
	$remove_exif = "false";
}
$client_image_width = (int) elgg_get_plugin_setting('client_image_width', 'tidypics');
$client_image_height = (int) elgg_get_plugin_setting('client_image_height', 'tidypics');

$imageLib = elgg_get_plugin_setting('image_lib', 'tidypics');
if ($imageLib == 'ImageMagick') {
	$allowed_extensions = "jpg,jpeg,gif,png,webp";
} else {
	$allowed_extensions = "jpg,jpeg,gif,png";
}

echo elgg_autop(elgg_echo('tidypics:uploader:instructs', [$max_uploads, $maxfilesize]));

$content = elgg_view_field([
	'#type' => 'hidden',
	'name' => 'album_guid',
	'value' => $album->getGUID(),
]);

$content .= elgg_view_field([
	'#type' => 'hidden',
	'name' => 'batch',
	'value' => $batch,
]);

$content .= elgg_view_field([
	'#type' => 'hidden',
	'name' => 'tidypics_token',
	'value' => $tidypics_token,
]);

$content .= elgg_view_field([
	'#type' => 'hidden',
	'name' => 'user_guid',
	'value' => elgg_get_logged_in_user_guid(),
]);

$content .= elgg_view_field([
	'#type' => 'hidden',
	'name' => 'Elgg',
	'value' => session_id(),
]);

$content .= elgg_autop(elgg_echo('tidypics:uploader:no_flash'));

echo elgg_format_element('div', [
	'id' => 'uploader',
	'data-maxfilesize' => $maxfilesize_int,
	'data-maxnumber' => $max_uploads,
	'data-client-resizing' => $client_resizing,
	'data-remove-exif' => $remove_exif,
	'data-client-width' => $client_image_width,
	'data-client-height' => $client_image_height,
	'data-allext' => $allowed_extensions,
], $content);



// Added
/*
$title = elgg_extract('title', $vars, '');
$description = elgg_extract('description', $vars, '');
$tags = elgg_extract('tags', $vars, '');
$access_id = elgg_extract('access_id', $vars, get_default_access());
$container_guid = elgg_extract('container_guid', $vars, elgg_get_page_owner_guid());
$guid = elgg_extract('guid', $vars, 0);

// album title will be hard coded to time
/*
echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('album:title'),
	'name' => 'title',
	'value' => $title,
	'required' => true,
]);
*/
/*
echo elgg_view_field([
	'#type' => 'longtext',
	'#label' => elgg_echo('album:desc'),
	'name' => 'description',
	'value' => $description,
]);

echo elgg_view_field([
	'#type' => 'tags',
	'#label' => elgg_echo('tags'),
	'name' => 'tags',
	'value' => $tags,
]);

$categories = elgg_view('input/categories', $vars);
if ($categories) {
	echo $categories;
}

echo elgg_view_field([
	'#type' => 'access',
	'#label' => elgg_echo('access'),
	'name' => 'access_id',
	'value' => $access_id,
]);

echo elgg_view_field([
	'#type' => 'hidden',
	'name' => 'guid',
	'value' => $guid,
]);

echo elgg_view_field([
	'#type' => 'hidden',
	'name' => 'container_guid',
	'value' => $container_guid,
]);

$footer = elgg_view_field([
	'#type' => 'submit',
	'value' => elgg_echo('save'),
]);

elgg_set_form_footer($footer);
*/
