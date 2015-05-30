<?php namespace Cjhbtn\Periscopr\Responses;

/**
 * Class GetSettings
 *
 * @package Cjhbtn\Periscopr\Responses
 */
class GetSettings extends BaseResponse {

    /** @var boolean $auto_save_to_camera */
    public $auto_save_to_camera;

    /** @var boolean $push_new_follower */
    public $push_new_follower;
}