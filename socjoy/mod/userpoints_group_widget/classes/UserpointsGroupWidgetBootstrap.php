<?php

use Elgg\DefaultPluginBootstrap;

class UserpointsGroupWidgetBootstrap extends DefaultPluginBootstrap {

	public function init() {
		// uncommenting the following line would list the top users in the sidebar of groups
		//elgg_extend_view('groups/sidebar/members', 'userpoints_group_widget/sidebar');

		// Add group option
		elgg()->group_tools->register('userpoints_group_widget', [
			'default_on' => true,
			'label' => elgg_echo('userpoints_group_widget:enable_userpoints_group_widget'),
		]);

		//add groups widget
		elgg_register_widget_type('userpoints_group_widget', elgg_echo("userpoints_group_widget:top_group_members"), elgg_echo('userpoints_group_widget:top_group_members'), ["groups"]);

		// handle the availability of the groups widget with the Widget Manager plugin installed
		elgg_register_plugin_hook_handler("group_tool_widgets", "widget_manager", "userpoints_group_widget_widget_handler");
	}
}
