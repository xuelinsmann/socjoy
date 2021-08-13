<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Clubs",
	'groups:owned' => "Clubs I own",
	'groups:owned:user' => 'Clubs %s owns',
	'groups:yours' => "My clubs",
	'groups:user' => "%s's clubs",
	'groups:all' => "All clubs",
	'groups:add' => "Create a new club",
	'groups:edit' => "Edit club",
	'groups:delete' => 'Delete club',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:membershiprequests:pending' => 'Manage join requests (%s)',
	'groups:invitedmembers' => "Manage invitations",
	'groups:invitations' => 'Club invitations',
	'groups:invitations:pending' => 'Club invitations (%s)',

	'relationship:invited' => '%2$s was invited to join %1$s',
	'relationship:membership_request' => '%s requested to join %s',

	'groups:icon' => 'Club icon (leave blank to leave unchanged)',
	'groups:name' => 'Club name',
	'groups:description' => 'Description',
	'groups:briefdescription' => 'Brief description',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => 'Club members',

	'groups:members_count' => '%s members',

	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:membership' => "Club membership permissions",
	'groups:content_access_mode' => "Accessibility of club content",
	'groups:content_access_mode:warning' => "Warning: Changing this setting won't change the access permission of existing group content.",
	'groups:content_access_mode:unrestricted' => "Unrestricted - Access depends on content-level settings",
	'groups:content_access_mode:membersonly' => "Members Only - Non-members can never access club content",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this club.",
	'groups:widget:num_display' => 'Number of clubs to display',
	'widgets:a_users_groups:name' => 'Club membership',
	'widgets:a_users_groups:description' => 'Display the clubs you are a member of on your profile',

	'groups:noaccess' => 'No access to club',
	'groups:cantcreate' => 'You can not create a club. Only admins can.',
	'groups:cantedit' => 'You can not edit this club',
	'groups:saved' => 'Club saved',
	'groups:save_error' => 'Club could not be saved',
	'groups:featured' => 'Featured clubs',
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured club.',
	'groups:unfeatured' => '%s has been removed from the featured clubs.',
	'groups:featured_error' => 'Invalid club.',
	'groups:nofeatured' => 'No featured clubs',
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join club',
	'groups:leave' => 'Leave club',
	'groups:invite' => 'Invite friends',
	'groups:invite:title' => 'Invite friends to this club',
	'groups:invite:friends:help' => 'Search for a friend by name or username and select the friend from the list',
	'groups:invite:resend' => 'Resend the invitations to already invited users',
	'groups:invite:member' => 'Already a member of this club',
	'groups:invite:invited' => 'Already invited to this club',

	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:group' => "Group",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for clubs with '%s'",
	'groups:search:none' => "No matching clubs were found",
	'groups:search_in_group' => "Search in this club",
	'groups:acl' => "Group: %s",
	'groups:acl:in_context' => 'Club members',

	'groups:notfound' => "Club not found",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'groups:open' => "open club",
	'groups:closed' => "closed club",
	'groups:member' => "members",
	'groups:search' => "Search for clubs",

	'groups:more' => 'More clubs',
	'groups:none' => 'No clubs',

	/**
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:group' => 'Club members only',
	'groups:closedgroup' => "This club's membership is closed.",
	'groups:closedgroup:request' => 'To ask to be added, click the "Request membership" menu link.',
	'groups:closedgroup:membersonly' => "This club's membership is closed and its content is accessible only by members.",
	'groups:opengroup:membersonly' => "This club's content is accessible only by members.",
	'groups:opengroup:membersonly:join' => 'To be a member, click the "Join club" menu link.',
	'groups:visibility' => 'Who can see this club?',
	'groups:content_default_access' => 'Default club content access',
	'groups:content_default_access:help' => 'Here you can configure the default access for new content in this club. The club content mode can prevent the selected option from being in effect.',
	'groups:content_default_access:not_configured' => 'No default access configured, leave to the user',

	/**
	 * Group tools
	 */

	'admin:groups' => 'Clubs',

	'groups:notitle' => 'Clubs must have a title',
	'groups:cantjoin' => 'Can not join club',
	'groups:cantleave' => 'Could not leave club',
	'groups:removeuser' => 'Remove from club',
	'groups:cantremove' => 'Cannot remove user from club',
	'groups:removed' => 'Successfully removed %s from club',
	'groups:addedtogroup' => 'Successfully added the user to the club',
	'groups:joinrequestnotmade' => 'Could not request to join club',
	'groups:joinrequestmade' => 'Requested to join club',
	'groups:joinrequest:exists' => 'You already requested membership for this club',
	'groups:button:joined' => 'Joined',
	'groups:button:owned' => 'Owned',
	'groups:joined' => 'Successfully joined club!',
	'groups:left' => 'Successfully left club',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' club.

Click below to view your invitations:
%s",

	'groups:welcome:subject' => "Welcome to the %s club!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' club.

Click below to begin posting!
%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' club.

Click below to view their profile:
%s

or click below to view the club's join requests:
%s",

	'river:group:create' => '%s created the club %s',
	'river:group:join' => '%s joined the club %s',

	'groups:allowhiddengroups' => 'Allow private (invisible) club?',
	'groups:whocancreate' => 'Who can create new club?',

	/**
	 * Action messages
	 */
	'groups:deleted' => 'Club and club contents deleted',
	'groups:notdeleted' => 'Club could not be deleted',
	'groups:deletewarning' => "Are you sure you want to delete this club? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',
	'groups:error:addedtogroup' => "Could not add %s to the club",
	'groups:add:alreadymember' => "%s is already a member of this club",

	/**
	 * ecml
	 */
	'groups:ecml:groupprofile' => 'Club profiles',

	/**
	 * Upgrades
	 */
	'groups:upgrade:2016101900:title' => 'Transfer club icons to a new location',
	'groups:upgrade:2016101900:description' => 'New entity icon API stores icons in a predictable location on the filestore
relative to the entity\'s filestore directory. This upgrade will align the club plugin with the requirements of the new API.',
);
