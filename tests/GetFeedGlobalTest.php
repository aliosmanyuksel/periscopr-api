<?php

class GetFeedGlobalTest extends BaseTest {

    /**
     * Test that fetching a list of global broadcasts
     * returns a valid response and result list
     */
    public function testGetFollowingFeedReturnsList() {
        $listRequest = new \Cjhbtn\Periscopr\Requests\GetFeedGlobal();
        $response = $this->client->execute($listRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\GetFeedGlobal", $response);
    }
}