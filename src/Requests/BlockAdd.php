<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class BlockAdd
 *
 * Block a user with the given for Periscope User ID.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class BlockAdd extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id Periscope User ID
     */
    public function __construct($user_id) {
        $this->endpoint = 'block/add';
        $this->parameters = [
            'to' => $user_id
        ];
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\BlockAdd';
    }
}