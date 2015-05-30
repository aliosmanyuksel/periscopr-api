<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetSettings
 *
 * Retrieve all the user specific settings
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetSettings extends BaseRequest {

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->endpoint = 'getSettings';
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\GetSettings';
    }
}