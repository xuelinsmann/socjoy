<?php
/**
 * Groups profile page Userpoints widget for Widget Manager plugin
 *
 */

$widget = elgg_extract('entity', $vars);

echo elgg_view('object/widget/edit/num_display', [
	'entity' => $widget,
	'label' => elgg_echo('userpoints_group_widget:widget:num_members'),
	'name' => 'userpoints_group_widget_count',
	'max' => 25,
	'default' => 4,
]);
