<?php

$limit = 4;

$entities = elgg_get_entities([
	'type' => 'user',
	'limit' => $limit,
	'relationship' => 'member',
	'relationship_guid' => $vars['entity']->guid,
	'inverse_relationship' => true,
	'order_by_metadata' =>  [
		'name' => 'userpoints_points',
		'direction' => 'DESC',
		'as' => 'integer',
	],
	'metadata_name_value_pairs' => [
		[
			'name' => 'userpoints_points',
			'value' => 0,
			'operand' => '>',
		],
	],
]);

$html = '';

foreach ($entities as $entity) {
	$icon = elgg_view_entity_icon($entity, 'tiny');
	$branding = (abs($entity->userpoints_points) > 1) ? elgg_echo('elggx_userpoints:lowerplural') : elgg_echo('elggx_userpoints:lowersingular');
	$info = "<a href=\"{$entity->getURL()}\">{$entity->name}</a><br><b>{$entity->userpoints_points} $branding</b>";
	$html .= elgg_view('page/components/image_block', ['image' => $icon, 'body' => $info]);
}

echo elgg_view_module('aside', elgg_echo('userpoints_group_widget:top_group_members'), $html);
