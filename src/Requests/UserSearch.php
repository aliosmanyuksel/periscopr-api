<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class UserSearch
 *
 * Search the Periscope user database for usernames that match the provided search string.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class UserSearch extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $search A username search string
     */
    public function __construct($search) {
        $this->endpoint = 'userSearch';
        $this->parameters = [
            'search' => $search
        ];
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\UserSearch';
    }
}