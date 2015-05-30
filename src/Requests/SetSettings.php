<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class SetSettings
 *
 * Set the user specific settings
 *
 * @package Cjhbtn\Periscopr\Requests
 */
class SetSettings extends BaseRequest {

    /**
     * Class constructor
     *
     * @param boolean $auto_save_to_camera
     * @param boolean $push_to_follower
     */
    public function __construct($auto_save_to_camera, $push_to_follower) {
        $this->endpoint = 'setSettings';
        $this->parameters = [
            'settings' => [
                'auto_save_to_camera' => $auto_save_to_camera,
                'push_new_follower' => $push_to_follower
            ]
        ];
        $this->response = 'Cjhbtn\\Periscopr\\Responses\\SetSettings';
    }
}