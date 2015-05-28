<?php

    class GetUserTest extends BaseTest {

        /**
         * Test retrieving a blank User ID returns
         * a Not Found error
         */
        public function testGetBlankUserIdReturns404() {
            $userRequest = new \Cjhbtn\Periscopr\Requests\GetUser("");
            $response = $this->client->execute($userRequest);
            $this->assertEquals(404, $response->getStatusCode());
        }

        /**
         * Test retrieving a valid User ID returns
         * the correct response and a User model
         */
        public function testGetUserReturnsSuccess() {
            $userRequest = new \Cjhbtn\Periscopr\Requests\GetUser($this->user_id);
            $response = $this->client->execute($userRequest);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\GetUser', $response);
            $this->assertInstanceOf('Cjhbtn\\Periscopr\\Models\\User', $response->user);
            $this->assertEquals($this->user_id, $response->user->id);
        }
    }