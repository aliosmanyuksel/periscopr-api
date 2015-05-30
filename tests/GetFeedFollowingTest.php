<?php

class GetFeedFollowingTest extends BaseTest {

    /**
     * Test that fetching a list of following broadcasts
     * returns a valid response and result list
     */
    public function testGetFollowingFeedReturnsList() {
        $listRequest = new \Cjhbtn\Periscopr\Requests\GetFeedFollowing();
        $response = $this->client->execute($listRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf("Cjhbtn\\Periscopr\\Responses\\GetFeedFollowing", $response);
    }
}