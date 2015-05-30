<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetFollowingUsers
 *
 * Retrieve a list of users that are following a given Periscope user_id.
 *
 * If you want to retrieve users following you, you must specify your own account user_id.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetFollowingUsers extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id Periscope User ID
     */
    public function __construct($user_id) {
        $this->endpoint = 'following';
        $this->parameters = [
            'user_id' => $user_id
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetFollowingUsers";
    }
}