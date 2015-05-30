<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetBroadcasts
 *
 * Returns broadcast details for an array of given broadcast IDs.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetBroadcasts extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string[] $broadcast_id_list An array of Periscope Broadcast ID's
     */
    public function __construct($broadcast_id_list = [ ]) {
        $this->endpoint = 'getBroadcasts';
        $this->parameters = [
            'broadcast_ids' => (array) $broadcast_id_list
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetBroadcasts";
    }
}