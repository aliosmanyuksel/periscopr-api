<?php

class BlockAddTest extends BaseTest {

    /**
     * Test blocking a valid Periscope user_id returns true
     */
    public function testBlockingValidUserReturnsTrue() {
        $blockRequest = new \Cjhbtn\Periscopr\Requests\BlockAdd("3309172");
        $response = $this->client->execute($blockRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\BlockAdd', $response);
        $this->assertEquals(true, $response->success);
    }
}