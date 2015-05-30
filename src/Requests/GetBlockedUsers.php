<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetBlockedUsers
 *
 * Get a list of users that have been blocked
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetBlockedUsers extends BaseRequest {

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->endpoint = 'block/users';
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\GetBlockedUsers';
    }
}