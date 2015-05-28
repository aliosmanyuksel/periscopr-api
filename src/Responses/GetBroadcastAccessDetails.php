<?php namespace Cjhbtn\Periscopr\Responses;

class GetBroadcastAccessDetails extends BaseResponse {

    /** @var string $subscriber */
    public $subscriber;

    /** @var string $publisher */
    public $publisher;

    /** @var string $auth_token */
    public $auth_token;

    /** @var string $signer_key */
    public $signer_key;

    /** @var string $signer_token */
    public $signer_token;

    /** @var integer $participant_index*/
    public $participant_index;

    /** @var string $channel */
    public $channel;

    /** @var boolean $read_only */
    public $read_only;

    /** @var boolean $should_log */
    public $should_log;

    /** @var boolean $should_verify_signature */
    public $should_verify_signature;

    /** @var string $session */
    public $session;

    /** @var string $rtmp_url */
    public $rtmp_url;

    /** @var string $hls_url */
    public $hls_url;

    /** @var string $https_hls_url */
    public $https_hls_url;

    /** @var string $type */
    public $type;

    /** @var \Cjhbtn\Periscopr\Models\Broadcast $broadcast */
    public $broadcast;
}