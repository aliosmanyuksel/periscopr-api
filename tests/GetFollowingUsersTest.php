<?php

    class GetFollowingUsersTest extends BaseTest {

        /**
         * Test that fetching following users for an invalid
         * user id returns Not Found
         *
         */
        public function testGetInvalidUserReturnsEmptyResults() {
            $following = new \Cjhbtn\Periscopr\Requests\GetFollowingUsers("-1");
            $response = $this->client->execute($following);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\GetFollowingUsers", $response);
            $this->assertEmpty($response->results);
        }

        /**
         * Test that fetching following users for the current
         * user id returns the correct response with an
         * array of User models in results
         */
        public function testGetMyFollowingUsersReturnsResults() {
            $following = new \Cjhbtn\Periscopr\Requests\GetFollowingUsers($this->user_id);
            $response = $this->client->execute($following);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\GetFollowingUsers", $response);
            $this->assertArrayHasKey(0, $response->results);
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Models\\User", $response->results[0]);
        }
    }