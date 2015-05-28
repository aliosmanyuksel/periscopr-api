<?php

    class GetBroadcastsTest extends BaseTest
    {

        /**
         * Test that fetching details for an invalid broadcast
         * id returns an empty set of results
         *
         */
        public function testGetInvalidBroadcastIdReturnsEmpty() {
            $broadcasts = new \Cjhbtn\Periscopr\Requests\GetBroadcasts("-1");
            $response = $this->client->execute($broadcasts);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertEmpty($response->results);
        }

        /**
         * @todo Need to find a way of testing live broadcast ID's for validity
         */
    }
