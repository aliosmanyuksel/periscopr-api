<?php namespace Cjhbtn\Periscopr\Requests;

class LoginTwitter extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $oauth_token
     * @param string $oauth_token_secret
     * @param string $twitter_user_id
     * @param string $twitter_username
     */
    public function __construct($oauth_token, $oauth_token_secret, $twitter_user_id, $twitter_username) {
        $this->endpoint = 'loginTwitter';
        $this->parameters = [
            'session_key'    => $oauth_token,
            'session_secret' => $oauth_token_secret,
            'user_id'        => $twitter_user_id,
            'username'       => $twitter_username,
            'phone_num'      => '',
            'install_id'     => ''
        ];
        $this->response = 'Cjhbtn\Periscopr\Responses\LoginTwitter';
    }
}