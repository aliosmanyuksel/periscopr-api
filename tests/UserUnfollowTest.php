<?php

class UserUnfollowTest extends BaseTest {
    
    /**
     * Test unfollowing a valid Periscope user_id returns true
     */
    public function testUnfollowingValidUserReturnsTrue() {
        $unfollowRequest = new \Cjhbtn\Periscopr\Requests\UserUnfollow("3309172");
        $response = $this->client->execute($unfollowRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\UserUnfollow', $response);
        $this->assertEquals(true, $response->success);
    }
}