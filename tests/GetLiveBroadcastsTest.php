<?php

    class GetLiveBroadcastsTest extends BaseTest {

        /**
         * Test that fetching a list of live broadcasts
         * returns a valid response and result list
         */
        public function testGetLiveBroadcastsReturnsList() {
            $listRequest = new \Cjhbtn\Periscopr\Requests\GetLiveBroadcasts();
            $response = $this->client->execute($listRequest);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\GetLiveBroadcasts", $response);
            $this->assertNotEmpty($response->results);
            $this->assertArrayHasKey(0, $response->results);
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Models\\Broadcast", $response->results[0]);
        }
    }