<?php

class GetFeedFeaturedTest extends BaseTest {

    /**
     * Test that fetching a list of featured broadcasts
     * returns a valid response and result list
     */
    public function testGetFeaturedFeedReturnsList() {
        $listRequest = new \Cjhbtn\Periscopr\Requests\GetFeedFeatured();
        $response = $this->client->execute($listRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\GetFeedFeatured", $response);
    }
}