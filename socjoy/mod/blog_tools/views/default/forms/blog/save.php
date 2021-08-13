<?php
/**
 * Edit blog form
 *
 * @package Blog
 * @uses $vars['entity']
 *
 * Adjustments
 * - status moved to blog_tools/edit/publication_options
 * - added icon upload/remove
 */

$blog = get_entity($vars['guid']);
$vars['entity'] = $blog;

$draft_warning = elgg_extract('draft_warning', $vars);
if ($draft_warning) {
	echo '<span class="mbm elgg-text-help">' . $draft_warning . '</span>';
}

$access_help = elgg_echo('blog_tools:edit:access:help');
if (elgg_get_plugin_setting('advanced_publication', 'blog_tools') === 'yes') {
	$access_help = elgg_echo('blog_tools:edit:access:help:publication');
}

$categories_vars = $vars;
$categories_vars['#type'] = 'categories';

$fields = [
	[
		'#label' => elgg_echo('title'),
		'#type' => 'text',
		'name' => 'title',
		'required' => true,
		'id' => 'blog_title',
		'value' => elgg_extract('title', $vars),
	],
	// use embeded content remove this one
	/*
	[
		'#html' => elgg_view('entity/edit/icon', [
			'entity' => $blog,
			'entity_type' => 'object',
			'entity_subtype' => 'blog',
		]),
	],
	*/
	[
		'#label' => elgg_echo('blog:excerpt'),
		'#type' => 'text',
		'name' => 'excerpt',
		'id' => 'blog_excerpt',
		'value' => elgg_html_decode(elgg_extract('excerpt', $vars)),
	],
	[
		'#label' => elgg_echo('blog:body'),
		'#type' => 'longtext',
		'name' => 'description',
		'required' => true,
		'id' => 'blog_description',
		'value' => elgg_extract('description', $vars),
	],
	[
		'#label' => elgg_echo('tags'),
		'#type' => 'tags',
		'name' => 'tags',
		'id' => 'blog_tags',
		'value' => elgg_extract('tags', $vars),
	],
	$categories_vars,
	[
		'#label' => elgg_echo('comments'),
		'#type' => 'select',
		'name' => 'comments_on',
		'id' => 'blog_comments_on',
		'value' => elgg_extract('comments_on', $vars),
		'options_values' => [
			'On' => elgg_echo('on'),
			'Off' => elgg_echo('off'),
		],
	],
	[
		'#label' => elgg_echo('access'),
		'#type' => 'access',
		'#help' => $access_help,
		'name' => 'access_id',
		'id' => 'blog_access_id',
		'value' => elgg_extract('access_id', $vars),
		'entity' => elgg_extract('entity', $vars),
		'entity_type' => 'object',
		'entity_subtype' => 'blog',
	],
	[
		'#type' => 'hidden',
		'name' => 'container_guid',
		'value' => elgg_get_page_owner_guid(),
	],
	[
		'#type' => 'hidden',
		'name' => 'guid',
		'value' => elgg_extract('guid', $vars),
	],
];

foreach ($fields as $field) {
	if (empty($field)) {
		continue;
	}

	echo elgg_view_field($field);
}

$save_status = elgg_echo('blog:save_status');
if ($blog) {
	$saved = date('F j, Y @ H:i', $blog->time_created);
} else {
	$saved = elgg_echo('never');
}

$footer = <<<___HTML
<div class="elgg-subtext mbm">
	$save_status <span class="blog-save-status-time">$saved</span>
</div>
___HTML;

$footer .= elgg_view('input/submit', [
	'value' => elgg_echo('save'),
	'name' => 'save',
]);

// published blogs do not get the preview button
if (!$blog || $blog->status != 'published') {
	$footer .= elgg_view('input/submit', [
		'value' => elgg_echo('preview'),
		'name' => 'preview',
		'class' => 'elgg-button-submit mls',
	]);
}

if ($blog) {
	// add a delete button if editing
	$footer .= elgg_view('output/url', [
		'href' => elgg_generate_action_url('entity/delete', [
			'guid' => $blog->guid,
		]),
		'text' => elgg_echo('delete'),
		'class' => 'elgg-button elgg-button-delete float-alt',
		'confirm' => true,
	]);
}

elgg_set_form_footer($footer);



// try a ajax upload not working
/*$album = $vars['entity'];

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
	//'value' => $album->getGUID(),
	'value' => '1',
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
*/
