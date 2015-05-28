<?php namespace Cjhbtn\Periscopr\Responses;

class LoginTwitter extends BaseResponse {

    /** @var string $cookie */
    public $cookie;

    /** @var \Cjhbtn\Periscopr\Models\User */
    public $user;

    /** @var string $suggested_username */
    public $suggested_username;

    /** @var array $settings */
    public $settings;
}