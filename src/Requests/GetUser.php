<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetUser
 *
 * Retrieve information about a specific user by Periscope user_id
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetUser extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id Periscope User ID
     */
    public function __construct($user_id) {
        $this->endpoint = 'user';
        $this->parameters = [
            'user_id' => $user_id
        ];
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\GetUser';
    }
}