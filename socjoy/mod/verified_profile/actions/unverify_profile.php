<?php

$user_guid = get_input('user_guid', 0);

$user = get_user($user_guid);

if (empty($user)) {
    return;
}

if (!$user->verified) {
    return;

} else {

    $user->name = $user->orignal_name;
    $user->verified = false;

    $user->save();
}

return elgg_ok_response('', elgg_echo('verified_profile:unverify:done'));
