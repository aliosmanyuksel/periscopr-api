<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetFeedLive
 *
 * Retrieve a list of live public Periscope broadcasts.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetFeedLive extends BaseRequest {

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->endpoint = 'liveBroadcastFeed';
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetFeedLive";
    }
}