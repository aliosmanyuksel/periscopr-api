<?php namespace Cjhbtn\Periscopr\Requests;

interface ApiRequest {

    public function getEndpoint();
    public function getParameters();
    public function getResponseHandler();

}