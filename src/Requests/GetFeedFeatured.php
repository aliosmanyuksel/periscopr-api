<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetFeedLive
 *
 * Retrieve a list of Periscope broadcasts that are featured (i.e. sponsored ??)
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetFeedFeatured extends BaseRequest {

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->endpoint = 'featuredBroadcastFeed';
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetFeedFeatured";
    }
}