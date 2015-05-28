<?php namespace Cjhbtn\Periscopr\Requests;

class GetLiveBroadcasts extends BaseRequest {

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->endpoint = 'liveBroadcastFeed';
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetLiveBroadcasts";
    }
}