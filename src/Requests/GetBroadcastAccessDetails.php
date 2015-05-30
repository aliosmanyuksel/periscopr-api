<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetBroadcastAccessDetails
 *
 * Retrieve the information and tokens needed to access the broadcast.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetBroadcastAccessDetails extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $broadcast_id The Periscope Broadcast ID
     */
    public function __construct($broadcast_id) {
        $this->endpoint = "accessChannel";
        $this->parameters = [
            'broadcast_id' => $broadcast_id
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetBroadcastAccessDetails";
    }
}