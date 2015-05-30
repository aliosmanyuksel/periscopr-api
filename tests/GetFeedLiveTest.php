<?php

    class GetFeedLiveTest extends BaseTest {

        /**
         * Test that fetching a list of live broadcasts
         * returns a valid response and result list
         */
        public function testGetLiveFeedReturnsList() {
            $listRequest = new \Cjhbtn\Periscopr\Requests\GetFeedLive();
            $response = $this->client->execute($listRequest);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\GetFeedLive", $response);
            $this->assertNotEmpty($response->results);
            $this->assertArrayHasKey(0, $response->results);
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Models\\Broadcast", $response->results[0]);
        }
    }