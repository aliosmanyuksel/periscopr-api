<?php namespace Cjhbtn\Periscopr\Requests;

class GetBroadcastAccessDetails extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $broadcast_id
     */
    public function __construct($broadcast_id) {
        $this->endpoint = "accessChannel";
        $this->parameters = [
            'broadcast_id' => $broadcast_id
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetBroadcastAccessDetails";
    }
}