<?php namespace Cjhbtn\Periscopr\Responses;

interface ApiResponse {

    public function getStatusCode();
    public function setStatusCode($code);
    public function processResponse(array $response);

}