<?php namespace Cjhbtn\Periscopr\Requests;

/**
 * Interface ApiRequest
 *
 * @package Cjhbtn\Periscopr\Requests
 */
interface ApiRequest {

    /**
     * Returns the API endpoint for the command
     *
     * @return string
     */
    public function getEndpoint();

    /**
     * Returns the parameters for the API command
     *
     * @return array
     */
    public function getParameters();

    /**
     * Returns the API response handler object name
     *
     * @return \Cjhbtn\Periscopr\Responses\ApiResponse
     */
    public function getResponseHandler();
}