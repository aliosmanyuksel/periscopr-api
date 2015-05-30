<?php

class GetBlockedUsersTest extends BaseTest {

    /**
     * Test getting blocked users returns success
     */
    public function testGetBlockedUsersReturnsSuccess() {
        $blocklistRequest = new \Cjhbtn\Periscopr\Requests\GetBlockedUsers();
        $response = $this->client->execute($blocklistRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\GetBlockedUsers', $response);
    }
}