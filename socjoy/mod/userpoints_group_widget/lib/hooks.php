<?php

// Add or remove a group's Tidypics widgets based on the corresponding group tools option
function userpoints_group_widget_widget_handler(\Elgg\Hook $hook) {
	$return_value = $hook->getValue();
	$entity = $hook->getParam('entity', false);

	if ($entity instanceof ElggGroup) {
		if (!is_array($return_value)) {
			$return_value = [];
		}

		if (!isset($return_value["enable"])) {
			$return_value["enable"] = [];
		}
		if (!isset($return_value["disable"])) {
			$return_value["disable"] = [];
		}

		if ($entity->userpoints_group_widget_enable == "yes") {
			$return_value["enable"][] = "userpoints_group_widget";
		} else {
			$return_value["disable"][] = "userpoints_group_widget";
		}
	}

	return $return_value;
}
