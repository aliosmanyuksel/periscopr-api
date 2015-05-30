<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class GetBroadcastIDFromShareToken
 *
 * Returns an API broadcast_id based on a share token.
 *
 * A share token is part of the Periscope URL that gets posted to Twitter feeds:
 *
 *    https://www.periscope.tv/w/V0infjE5NTQyOTB8MTUxMjkyNzdP1izcAz4eyBkcW6iKQ9VGhiyGd-TBDvUZnDyWLKKEyQ==
 *
 * In the example above, the share token would be:
 *
 *    V0infjE5NTQyOTB8MTUxMjkyNzdP1izcAz4eyBkcW6iKQ9VGhiyGd-TBDvUZnDyWLKKEyQ==
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class GetBroadcastIDFromShareToken extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $share_token Periscope Share Token
     */
    public function __construct($share_token) {
        $this->endpoint = 'getBroadcastIdForShareToken';
        $this->parameters = [
            'token' => $share_token
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetBroadcastIDFromShareToken";
    }
}