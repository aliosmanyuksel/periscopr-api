<?php namespace Cjhbtn\Periscopr\Requests;

class GetFollowingUsers extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $user_id
     */
    public function __construct($user_id) {
        $this->endpoint = 'following';
        $this->parameters = [
            'user_id' => $user_id
        ];
        $this->response = "Cjhbtn\\Periscopr\\Responses\\GetFollowingUsers";
    }
}