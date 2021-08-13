<?php

$user_guid = get_input('user_guid', 0);

$user = get_user($user_guid);

if (empty($user)) {
    return;
}

if ($user->verified) {
    return elgg_error_response(elgg_echo('verified_profile:verify:exist'));

} else {
    $user->orignal_name = $user->name;
    $user->name = $user->name . '<span class=" fa-stack verified" style="vertical-align: top;color:#1DA1F2;">
    <i class="fas fa-certificate fa-stack-2x"></i>
    <i class="fas fa-check fa-stack-1x fa-inverse"></i>
    </span>';
    $user->verified = true;

    $user->save();
}

return elgg_ok_response('', elgg_echo('verified_profile:verify:done'));
