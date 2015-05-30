<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class BlockAdd
 *
 * Remove the block of the given Periscope User ID.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class BlockRemove extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id Periscope User ID
     */
    public function __construct($user_id) {
        $this->endpoint = 'block/remove';
        $this->parameters = [
            'to' => $user_id
        ];
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\BlockRemove';
    }
}
