<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class UserFollow
 *
 * Follow a specific Periscope user_id.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class UserFollow extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id Periscope User ID
     */
    public function __construct($user_id) {
        $this->endpoint = 'follow';
        $this->parameters = [
            'user_id' => $user_id
        ];
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\UserFollow';
    }
}