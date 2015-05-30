<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class LoginTwitter
 *
 * A method for logging in to Periscope using Twitter OAuth tokens. It is the method used by the mobile applications.
 *
 * The cookie returned in the response object should be used for all future requests as the authentication mechanism.
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class LoginTwitter extends BaseRequest {

    /**
     * Class constructor
     *
     * @param string $oauth_token Twitter OAuth Token
     * @param string $oauth_token_secret Twitter OAuth Token Secret
     * @param string $twitter_username Twitter Username
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