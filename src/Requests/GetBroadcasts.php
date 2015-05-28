<?php namespace Cjhbtn\Periscopr\Requests;

class GetBroadcasts extends BaseRequest {

    /**
     * Class constructor
     *
     * @param array $id_list
     */
    public function __construct($id_list = [ ]) {
        $this->endpoint = 'getBroadcasts';
        $this->parameters = [
            'broadcast_ids' => (array) $id_list
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetBroadcasts";
    }
}