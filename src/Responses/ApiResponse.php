<?php namespace Cjhbtn\Periscopr\Responses;

/**
 * Interface ApiResponse
 *
 * @package Cjhbtn\Periscopr\Responses
 */
interface ApiResponse {

    /**
     * Return the response HTTP status code
     *
     * @return integer
     */
    public function getStatusCode();

    /**
     * Set the response HTTP status code
     *
     * @param integer $code
     */
    public function setStatusCode($code);

    /**
     * Process the JSON array returned in a response
     * and create the required models and properties
     *
     * @param array $response
     */
    public function processResponse(array $response);
}