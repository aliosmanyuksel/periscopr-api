<?php

class UserFollowTest extends BaseTest {

    /**
     * Test following an invalid Periscope user_id
     */
    public function testFollowingInvalidUserReturnsFalse() {
        $followRequest = new \Cjhbtn\Periscopr\Requests\UserFollow("-1");
        $response = $this->client->execute($followRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\UserFollow', $response);
        $this->assertEquals(false, $response->success);
    }

    /**
     * Test following a valid Periscope user_id returns true
     */
    public function testFollowingValidUserReturnsTrue() {
        $followRequest = new \Cjhbtn\Periscopr\Requests\UserFollow("3309172");
        $response = $this->client->execute($followRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\UserFollow', $response);
        $this->assertEquals(true, $response->success);
    }
}