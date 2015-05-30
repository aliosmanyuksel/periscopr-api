<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetFeedGlobal
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetFeedGlobal extends BaseRequest {

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->endpoint = 'globalBroadcastFeed';
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetFeedGlobal";
    }
}