<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetFeedFollowing
 *
 * Retrieve a list of Periscope broadcasts from users that you are following.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetFeedFollowing extends BaseRequest {

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->endpoint = 'followingBroadcastFeed';
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetFeedFollowing";
    }
}