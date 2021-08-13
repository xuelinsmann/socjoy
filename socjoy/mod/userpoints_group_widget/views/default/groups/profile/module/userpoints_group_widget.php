<?php
/**
 * Userpoints group module
 */

$group = elgg_extract('entity', $vars);
if (!($group instanceof \ElggGroup)) {
	return;
}

if (!$group->isToolEnabled('userpoints_group_widget')) {
	return;
} 

$limit = 4;

elgg_push_context('widgets');

$content = elgg_list_entities([
	'type' => 'user',
	'limit' => $limit,
	'relationship' => 'member',
	'relationship_guid' => $group->guid,
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
	'pagination' => false,
	'item_view' => 'elggx_userpoints/list/user',
]);

elgg_pop_context();

echo elgg_view('groups/profile/module', [
	'title' => elgg_echo('userpoints_group_widget:top_group_members'),
	'content' => $content,
]);
