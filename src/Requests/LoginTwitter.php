<?php namespace Cjhbtn\Periscopr\Requests;

class LoginTwitter extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $oauth_token
     * @param string $oauth_token_secret
     * @param string $twitter_username
     */
    public function __construct($oauth_token, $oauth_token_secret, $twitter_username) {
        $this->endpoint = 'loginTwitter';
        $this->parameters = [
            'session_key'    => $oauth_token,
            'session_secret' => $oauth_token_secret,
            'user_id'        => ($oauth_token !== "" ? substr($oauth_token, 0, strpos($oauth_token, "-") - 1) : ""),
            'username'       => $twitter_username,
            'phone_num'      => '',
            'install_id'     => ''
        ];
        $this->response = 'Cjhbtn\Periscopr\Responses\LoginTwitter';
    }
}