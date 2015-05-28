<?php namespace Cjhbtn\Periscopr\Requests;

class GetBroadcastViewers extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $broadcast_id
     */
    public function __construct($broadcast_id) {
        $this->endpoint = 'getBroadcastViewers';
        $this->parameters = [
            'broadcast_id' => $broadcast_id
        ];
    }
}