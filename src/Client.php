<?php namespace Cjhbtn\Periscopr;

use Cjhbtn\Periscopr\Requests\ApiRequest;
use Cjhbtn\Periscopr\Responses\ApiResponse;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;

class Client {

    /** @var GuzzleClient $guzzle */
    protected $guzzle;

    /** @var string $api_uri */
    protected $api_uri = 'https://api.periscope.tv/api/v2/';

    /** @var array $default_params */
    protected $default_params = [ ];

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->guzzle = $this->createGuzzle();
    }

    /**
     * Set the authentication cookie for authenticated requests
     *
     * @param string $cookie
     */
    public function setCookie($cookie) {
        $this->default_params['cookie'] = $cookie;
    }

    /**
     * Execute a command against the API
     *
     * @param ApiRequest $request
     * @return ApiResponse
     */
    public function execute(ApiRequest $request) {
        $class_name = $request->getResponseHandler();
        $handler = new $class_name();

        try {
            $response = $this->guzzle->request(
                "POST",
                $request->getEndpoint(),
                $this->encodeParameters($request->getParameters())
            );
            $handler->setStatusCode($response->getStatusCode());
            if ($response->getStatusCode() == 200) {
                $handler->processResponse(
                    json_decode(
                        $response->getBody()->getContents(),
                        true
                    )
                );
            }
        }
        catch (ClientException $ex) {
            $handler->setStatusCode($ex->getCode());
        }

        return $handler;
    }

    /**
     * Create a new instance of the Guzzle client
     *
     * @return GuzzleClient
     */
    protected function createGuzzle() {
        return new GuzzleClient([
            'base_uri' => $this->api_uri
        ]);
    }

    /**
     * JSON encode the parameters as the body of the request
     *
     * @param array $params
     * @return array
     */
    protected function encodeParameters($params) {
        return ['body' => json_encode(array_merge($this->default_params, $params))];
    }
}