<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetBroadcastViewers
 *
 * Returns a information about users who have viewed this broadcast.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetBroadcastViewers extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $broadcast_id Periscope Broadcast ID
     */
    public function __construct($broadcast_id) {
        $this->endpoint = 'getBroadcastViewers';
        $this->parameters = [
            'broadcast_id' => $broadcast_id
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetBroadcastViewers";
    }
}