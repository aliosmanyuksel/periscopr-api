<?php namespace Cjhbtn\Periscopr\Requests;

class GetBroadcastIDFromShareToken extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $share_token
     */
    public function __construct($share_token) {
        $this->endpoint = 'getBroadcastIdForShareToken';
        $this->parameters = [
            'token' => $share_token
        ];
    }
}