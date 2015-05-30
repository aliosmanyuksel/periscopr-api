<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetFollowerUsers
 *
 * Retrieve a list of followers for a given Periscope user_id.
 *
 * If you want to retrieve your own followers, you must specify your own account user_id.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetFollowerUsers extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id Periscope User ID
     */
    public function __construct($user_id) {
        $this->endpoint = 'followers';
        $this->parameters = [
            'user_id' => $user_id
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetFollowerUsers";
    }
}