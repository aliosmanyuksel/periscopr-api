<?php

    class ClientTest extends BaseTest {

        /**
         * Class constructor
         *
         */
        public function __construct() {
            $this->requiresAuth = false;
            parent::__construct();
        }

        /**
         * Test to see if the Client instance was
         * created successfully and is usable
         */
        public function testCanCreateInstance() {
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Client", $this->client);
        }

        /**
         * Test to see if a blank Request to the API
         * returns the Bad Request error
         */
        public function testBlankRequestReturns400() {
            $response = $this->client->execute(new BlankRequest());
            $this->assertEquals(400, $response->getStatusCode());
        }

        /**
         * Test to see if a blank LoginTwitter request
         * to the API returns an Unauthorized error
         */
        public function testBlankLoginTwitterRequestReturns401() {
            $response = $this->client->execute(
                new \Cjhbtn\Periscopr\Requests\LoginTwitter("", "", "", "")
            );
            $this->assertEquals(401, $response->getStatusCode());
        }

        /**
         * Test to see if a valid LoginTwitter request
         * returns the expected response and contains a cookie
         */
        public function testValidLoginTwitterRequestReturnsSuccess() {
            $response = $this->client->execute(
                new \Cjhbtn\Periscopr\Requests\LoginTwitter(
                    getenv('OAUTH_TOKEN'),
                    getenv('OAUTH_TOKEN_SECRET'),
                    getenv('TWITTER_USER_ID'),
                    getenv('TWITTER_USERNAME')
                )
            );
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\LoginTwitter", $response);
            $this->assertNotEmpty($response->cookie);
        }

    }


    class BlankRequest extends \Cjhbtn\Periscopr\Requests\BaseRequest {
        public function __construct() {
            $this->response = "BlankResponse";
        }
    }

    class BlankResponse extends \Cjhbtn\Periscopr\Responses\BaseResponse {

    }