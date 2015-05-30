<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Class BaseRequest
 *
 * @package Cjhbtn\Periscopr\Requests
 */
abstract class BaseRequest implements ApiRequest {

    /** @var array $parameters */
    protected $parameters = [ ];

    /** @var string $endpoint */
    protected $endpoint   = '';

    /** @var \Cjhbtn\Periscopr\Responses\ApiResponse $response */
    protected $response;

    /**
     * Returns the API endpoint for the command
     *
     * @return string
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * Returns the parameters for the API command
     *
     * @return array
     */
    public function getParameters() {
        return $this->parameters;
    }

    /**
     * Returns the API response handler object name
     *
     * @return \Cjhbtn\Periscopr\Responses\ApiResponse
     */
    public function getResponseHandler() {
        return $this->response;
    }
}