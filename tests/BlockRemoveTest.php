<?php

class BlockRemoveTest extends BaseTest {

    /**
     * Test unblocking a valid Periscope user_id returns true
     */
    public function testUnblockingValidUserReturnsTrue() {
        $blockRequest = new \Cjhbtn\Periscopr\Requests\BlockRemove("3309172");
        $response = $this->client->execute($blockRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\BlockRemove', $response);
        $this->assertEquals(true, $response->success);
    }
}