<?php namespace Cjhbtn\Periscopr\Models;

class Broadcast extends BaseModel {

    public $id;
    public $created_at;
    public $updated_at;
    public $user_id;
    public $user_display_name;
    public $profile_image_url;
    public $state;
    public $is_locked;
    public $friend_chat;
    public $start;
    public $ping;
    public $has_location;
    public $city;
    public $country;
    public $country_state;
    public $iso_code;
    public $ip_lat;
    public $ip_lng;
    public $width;
    public $height;
    public $image_url;
    public $image_url_small;
    public $status;
    public $available_for_replay;
    public $featured;
    public $sort_score;
    public $is_trusted;

}