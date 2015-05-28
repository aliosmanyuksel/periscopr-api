<?php namespace Cjhbtn\Periscopr\Responses;

use stdClass;

interface ApiResponse {

    public function getStatusCode();
    public function setStatusCode($code);
    public function processResponse(array $response);

}