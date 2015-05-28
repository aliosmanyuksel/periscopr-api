<?php namespace Cjhbtn\Periscopr\Models;

class User extends BaseModel {

    public $id;
    public $created_at;
    public $updated_at;
    public $is_beta_user;
    public $is_employee;
    public $is_twitter_verified;
    public $twitter_screen_name;
    public $username;
    public $display_name;
    public $description;
    public $profile_image_urls;
    public $initials;
    public $n_followers;
    public $n_following;
    public $n_hearts;
    public $n_replay_hearts;

}